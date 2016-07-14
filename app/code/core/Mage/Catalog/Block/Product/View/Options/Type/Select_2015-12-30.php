<?php

/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Catalog
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Product options text type block
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_Catalog_Block_Product_View_Options_Type_Select extends Mage_Catalog_Block_Product_View_Options_Abstract {

    /**
     * Return html for control element
     *
     * @return string
     */
    public function getValuesHtml() {
        $_option = $this->getOption();
        $configValue = $this->getProduct()->getPreconfiguredValues()->getData('options/' . $_option->getId());
        $store = $this->getProduct()->getStore();

        if ($_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_DROP_DOWN
            || $_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_MULTIPLE) {
            $require = ($_option->getIsRequire()) ? ' required-entry' : '';
            $extraParams = '';
            $select = $this->getLayout()->createBlock('core/html_select')
                ->setData(array(
                    'id' => 'select_'.$_option->getId(),
                    'class' => $require.' product-custom-option selectpicker'
                ));
            if ($_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_DROP_DOWN) {
                $select->setName('options['.$_option->getid().']')
                    ->addOption('', $this->__('-- Please Select --'));
            } else {
                $select->setName('options['.$_option->getid().'][]');
                $select->setClass('multiselect'.$require.' product-custom-option');
            }
            $ak = '1';
            foreach ($_option->getValues() as $_value) {
                $priceStr = $this->_formatPrice(array(
                    'is_percent' => ($_value->getPriceType() == 'percent'),
                    'pricing_value' => $_value->getPrice(($_value->getPriceType() == 'percent'))
                        ), false);
                if ($ak <= 11) {
                    $select->addOption(
                            $_value->getOptionTypeId(), $_value->getTitle() . ' ' . $priceStr . '', array('id' => $ak.'_size','style' => 'display: block;', 'price' => $this->helper('core')->currencyByStore($_value->getPrice(true), $store, false))
                    );
                }
                elseif ($ak >= 17) {
                    $select->addOption(
                            $_value->getOptionTypeId(), $_value->getTitle() . ' ' . $priceStr . '', array('id' => $ak.'_size','style' => 'display: block;', 'price' => $this->helper('core')->currencyByStore($_value->getPrice(true), $store, false))
                    );
                }
                else {
                    $select->addOption(
                            $_value->getOptionTypeId(), $_value->getTitle() . ' ' . $priceStr . '', array('id' => $ak.'_size','style' => 'display: none;', 'price' => $this->helper('core')->currencyByStore($_value->getPrice(true), $store, false))
                    );
                }
                $ak++;
            }
            if ($_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_MULTIPLE) {
                $extraParams = ' multiple="multiple"';
            }
            if (!$this->getSkipJsReloadPrice()) {
                $extraParams .= ' onchange="opConfig.reloadPrice()"';
            }
            $select->setExtraParams($extraParams);

            if ($configValue) {
                $select->setValue($configValue);
            }

            return $select->getHtml();
        }

        if ($_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_RADIO || $_option->getType() == Mage_Catalog_Model_Product_Option::OPTION_TYPE_CHECKBOX
        ) {
            $selectHtml = '<ul id="options-' . $_option->getId() . '-list" class="options-list">';
            $require = ($_option->getIsRequire()) ? ' validate-one-required-by-name' : '';
            $arraySign = '';
            switch ($_option->getType()) {
                case Mage_Catalog_Model_Product_Option::OPTION_TYPE_RADIO:
                    $type = 'radio';
                    $class = 'radio';
                    if (!$_option->getIsRequire()) {
                        $selectHtml .= '<li><input type="radio" id="options_' . $_option->getId() . '" class="'
                                . $class . ' product-custom-option" name="options[' . $_option->getId() . ']"'
                                . ($this->getSkipJsReloadPrice() ? '' : ' onclick="opConfig.reloadPrice()"')
                                . ' value="" checked="checked" /><span class="label"><label for="options_'
                                . $_option->getId() . '">' . $this->__('None') . '</label></span></li>';
                    }
                    break;
                case Mage_Catalog_Model_Product_Option::OPTION_TYPE_CHECKBOX:
                    $type = 'checkbox';
                    $class = 'checkbox';
                    $arraySign = '[]';
                    break;
            }
            $count = 1;
            foreach ($_option->getValues() as $_value) {
                $count++;

                $priceStr = $this->_formatPrice(array(
                    'is_percent' => ($_value->getPriceType() == 'percent'),
                    'pricing_value' => $_value->getPrice($_value->getPriceType() == 'percent')
                ));

                $htmlValue = $_value->getOptionTypeId();
                if ($arraySign) {
                    $checked = (is_array($configValue) && in_array($htmlValue, $configValue)) ? 'checked' : '';
                    $engravingclass = '';
                    $datatarget = '';
                } elseif ($count == '2') {

                    if (str_replace(" ", "_", strtolower($this->escapeHtml($_option->getTitle()))) == 'engraving') {
                        $engravingclass = 'open-engraving-popup open-popup';
                        $datatarget = 'data-target="engraving-popup"';
                        $checked = '';
                    } else {
                        $engravingclass = '';
                        $datatarget = '';
                        $checked = 'checked';
                    }
                } else {
                    if (str_replace(" ", "_", strtolower($this->escapeHtml($_option->getTitle()))) == 'engraving' && $count == '3') {
                        $engravingclass = '';
                        $datatarget = '';
                        $checked = 'checked';
                    } else {
                        $checked = $configValue == $htmlValue ? 'checked' : '';
                        $engravingclass = '';
                        $datatarget = '';
                    }
                }

                $selectHtml .= '<li>' . '<input type="' . $type . '" class="' . $class . ' ' . $require
                        . ' product-custom-option"'
                        . ($this->getSkipJsReloadPrice() ? '' : ' onclick="opConfig.reloadPrice()"')
                        . ' name="options[' . $_option->getId() . ']' . $arraySign . '" id="options_' . $_option->getId()
                        . '_' . $count . '" value="' . $htmlValue . '" ' . $checked . ' price="'
                        . $this->helper('core')->currencyByStore($_value->getPrice(true), $store, false) . '" />'
                        . '<span class="label"><label class="' . $engravingclass . '" ' . $datatarget . ' for="options_' . $_option->getId() . '_' . $count . '" id="option_' . strtolower($_value->getTitle()) . '">'
                        . $_value->getTitle() . ' ' . $priceStr . '</label></span>';
                if ($_option->getIsRequire()) {
                    $selectHtml .= '<script type="text/javascript">' . '$(\'options_' . $_option->getId() . '_'
                            . $count . '\').advaiceContainer = \'options-' . $_option->getId() . '-container\';'
                            . '$(\'options_' . $_option->getId() . '_' . $count
                            . '\').callbackFunction = \'validateOptionsCallback\';' . '</script>';
                }
                $selectHtml .= '</li>';
            }
            $selectHtml .= '</ul>';

            return $selectHtml;
        }
    }

}
