<?php
/**
 * Created by PhpStorm.
 * User: andreyalifirenko
 * Date: 9/30/15
 * Time: 9:23 PM
 */ 
class Trd_Importxls_Model_Resource_Importxls extends Mage_Core_Model_Resource_Db_Abstract
{

    protected function _construct()
    {
        $this->_init('trd_importxls/importxls', 'importxls_id');
    }

}