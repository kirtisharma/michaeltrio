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
 * @package     Mage_XmlConnect
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * XmlConnect application localization helper
 *
 * @category    Mage
 * @package     Mage_XmlConnect
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_XmlConnect_Helper_Translate extends Mage_Core_Helper_Abstract
{
    /**
     * Hash of localization
     *
     * @var string
     */
    protected $_hash;

    /**
     * Get hash localization
     *
     * @return string
     */
    public function getHash()
    {
        if (!$this->_hash) {
            $this->_hash = sha1(serialize($this->getLocalizationArray()));
        }
        return $this->_hash;
    }

    /**
     * Get application localization strings array
     *
     * @return array
     */
    public function getLocalizationArray()
    {
        return array(
            'About' => $this->__('About'),
            'Account' => $this->__('Account'),
            'AccountInfo' => $this->__('Account Information'),
            'AccountMyDownloadableProducts' => $this->__('My Downloadable Products'),
            'AccountMyDownloadableProductsDate' => $this->__('Date'),
            'AccountMyDownloadableProductsOpen' => $this->__('Open'),
            'AccountMyDownloadableProductsOrder' => $this->__('Order'),
            'AccountMyDownloadableProductsRemainingDownloads' => $this->__('Remaining downloads'),
            'AccountMyDownloadableProductsStatus' => $this->__('Status'),
            'AccountSettings' => $this->__('Account Settings'),
            'AccountSettingsCancel' => $this->__('Home'),
            'Add' => $this->__('Add'),
            'AddAddressFromContacts' => $this->__('Add Address from Contacts'),
            'AddBillingAddressText' => $this->__('Add a billing address'),
            'AddCustomText' => $this->__('Add Custom'),
            'AddFilterTitle' => $this->__('Filter'),
            'AddNewAddress' => $this->__('Add New Address'),
            'AddNewEntry' => $this->__('Add'),
            'AddShippingAddressText' => $this->__('Add a shipping address'),
            'AddToCart' => $this->__('Add to Cart'),
            'AddToCartTitle' => $this->__('Add to Cart'),
            'AddToWishlistTitle' => $this->__('Add to Wishlist'),
            'AddingProductToCartProgressTitle' => $this->__('Adding Product to Cart...'),
            'AddingProductToWishListProgressTitle' => $this->__('Adding Product to WishList...'),
            'AdditionalInfo' => $this->__('Additional Info'),
            'AddressBook' => $this->__('Address Book'),
            'AddressBookIsEmpty' => $this->__('Address book is empty'),
            'AddressBookUpdatedMessage' => $this->__('Address Book Updated'),
            'AddressInfo' => $this->__('Address Info'),
            'AgreementsButtonTitle' => $this->__('Read the Terms and Conditions'),
            'AgreementsCheckboxTitle' => $this->__('I agree to the Terms and Conditions'),
            'AgreementsDescription' => $this->__('You must read and agree to the Terms and Conditions before placing your order.'),
            'AllImages' => $this->__('All Images'),
            'AlsoLikeLbl' => $this->__('You may also like'),
            'Amount' => $this->__('Amount'),
            'AmountIn' => $this->__('Amount in %@'),
            'Amounts' => $this->__('Amounts'),
            'AppIdNotActivated' => $this->__('The application is currently inactive.\nPlease try again later.'),
            'ApplicationCode' => $this->__('App code'),
            'AppliedFiltersLabel' => $this->__('FILTERS APPLIED'),
            'Apply' => $this->__('Apply'),
            'ApplyingCouponProgressTitle' => $this->__('Applying Coupon Code'),
            'ApplyingGiftCartProgressTitle' => $this->__('Applying Gift Card %@'),
            'AsGuestText' => $this->__('as Guest'),
            'AsLowAsExcludingTaxLabel' => $this->__('As low as excl. tax'),
            'AsLowAsIncludingTaxLabel' => $this->__('As low as incl. tax'),
            'AsLowAsLabel' => $this->__('As low as'),
            'AuthenticationToSocialClientFailedAlertMessage' => $this->__('Authentication to %@ did failed...'),
            'AverageRating' => $this->__('Average Rating'),
            'Back' => $this->__('Back'),
            'BackFromInfo' => $this->__('Back'),
            'BiggerThanMaxMessage' => $this->__('The value should not be greater than %.2f!'),
            'BillingAddressTitle' => $this->__('Billing address'),
            'BillingCheckout' => $this->__('Billing'),
            'BundleProductsSectionTitle' => $this->__('Bundle Products'),
            'BuyMoreAndSave' => $this->__('Buy More & Save'),
            'Cancel' => $this->__('Cancel'),
            'CancelButtonTitle' => $this->__('Cancel'),
            'CancelingPayPalMECLProgressTitle' => $this->__('Canceling PayPal ...'),
            'Cart' => $this->__('Shopping Cart'),
            'CartBtn' => $this->__('Cart'),
            'CartIsEmpty' => $this->__('The cart is empty'),
            'CartRegisteredMessage' => $this->__('Offline cart stored on server'),
            'CartRegisteredTitle' => $this->__(''),
            'CartRegistrationFailedMessage' => $this->__('Storage of offline cart on server failed. Please retry later'),
            'CartRegistrationFailedTitle' => $this->__('Error'),
            'CartUpdatedMessageTitle' => $this->__('Cart Updated'),
            'CheckGiftCardLabel' => $this->__('Check Gift Card'),
            'CheckingCartProgressTitle' => $this->__('Checking Gift Card %@'),
            'CheckoutAsGuestButtonTitle' => $this->__('Checkout as Guest'),
            'CheckoutButtonFullTitle' => $this->__('Proceed to Checkout'),
            'CheckoutButtonTitle' => $this->__('Checkout'),
            'CheckoutInitializationProgressTitle' => $this->__('Checkout initialization...'),
            'CheckoutInitializedText' => $this->__('Checkout initialized!'),
            'CheckoutTitle' => $this->__('Checkout'),
            'ChooseAmount' => $this->__('Choose amount'),
            'City' => $this->__('City'),
            'Clear' => $this->__('Clear'),
            'Close' => $this->__('Close'),
            'CommitCartChangesAlertText' => $this->__('You have uncommitted actions. Commit?'),
            'CommittingUpdatesProgressTitle' => $this->__('Commiting updates...'),
            'ConfigurationLoadingError' => $this->__('There is an error in loading an app\'s configuration'),
            'ConfigureTitle' => $this->__('Select Options'),
            'Connecting' => $this->__('Connecting'),
            'ConnectionErrorMessage' => $this->__('Connection Error\nWe\'re sorry. The app is experiencing connection problems. The app requires a network connection to operate.'),
            'ConnectionLostMessage' => $this->__('Connection Error\nWe\'re sorry. The app is experiencing connection problems. The app requires a network connection to operate.'),
            'ContactsAreEmpty' => $this->__('ContactsAreEmpty'),
            'Continue' => $this->__('Continue'),
            'Copyright' => $this->__('Copyright: Magento (c) 2010'),
            'Country' => $this->__('Country'),
            'CountrySelect' => $this->__('Countries'),
            'CreateAccount' => $this->__('Create an Account'),
            'CreateAccountButtonTitle' => $this->__('Create Account'),
            'CreateAccountLabel' => $this->__('Create Account'),
            'CreateAccountSectionHeader' => $this->__('New to Our Store?'),
            'CreateAnAccountLabel' => $this->__('Create an Account'),
            'CrossSellsText' => $this->__('Cross Sells'),
            'CrossellTitle' => $this->__('You may also like'),
            'CustomAmount' => $this->__('Custom amount'),
            'DateText' => $this->__('Date'),
            'DateTitle' => $this->__('Date:'),
            'Delete' => $this->__('Delete'),
            'DeleteItemMessage' => $this->__('Are you sure you want to remove this item?'),
            'DeleteRecordButtonTitle' => $this->__('Delete'),
            'Description' => $this->__('Description'),
            'DiscountButtonTitle' => $this->__('Apply'),
            'DiscountLabel' => $this->__('Discount:'),
            'DiscountTextFieldPlaceholder' => $this->__('Enter discount code if any'),
            'DiscoutnButtonTitle' => $this->__('Apply'),
            'DoneTitle' => $this->__('Done'),
            'DownloadableProductLinkSample' => $this->__('Sample'),
            'DownloadableProductsUpdatedMessage' => $this->__('Downloadable Products Updated'),
            'DownloadsLimitTitle' => $this->__('Downloads limit:'),
            'Edit' => $this->__('Edit'),
            'EditAccountButtonTitle' => $this->__('Save'),
            'EditAddressBookRecord' => $this->__('Edit Address'),
            'EditFilterTitle' => $this->__('Edit filter'),
            'EditMailList' => $this->__('Edit Mail List'),
            'EditNote' => $this->__('Edit note'),
            'Email' => $this->__('E-mail'),
            'EmailCopyLabel' => $this->__('Cc:'),
            'EmailCountMaxExceed' => $this->__('Too many recipients have been set.  Max amount of recipients is:'),
            'EmailLabel' => $this->__('To:'),
            'EmailThemeLabel' => $this->__('Subject:'),
            'EmptyCategoryMessage' => $this->__('Sorry, there are no items in this category.'),
            'EmptyDiscount' => $this->__('Enter discount code first.'),
            'EmptyDiscountCodeAlertMessage' => $this->__('Discount code is empty'),
            'EmptyEmails' => $this->__('Please enter at least one email recipient'),
            'EmptyGalleryMessage' => $this->__('This product has no images.'),
            'EmptyGiftCardValueMessage' => $this->__('Please, specify gift card amount!'),
            'EmptyMyDownloadableViewMessage' => $this->__('List of downloadable products is empty'),
            'EmptyStoreCreditHistoryMessage' => $this->__('There is no store credit history!'),
            'EmptyViewMessage' => $this->__('There are no items here'),
            'EmptyWishlistViewMessage' => $this->__('Wishlist is empty.'),
            'EnterEmailText' => $this->__('Enter e-mail'),
            'EnterGiftCardPromo' => $this->__('Enter giftcard promo code here'),
            'EnterNameText' => $this->__('Enter Name'),
            'EnterText' => $this->__('Enter text'),
            'Error' => $this->__('Error'),
            'ErrorEmailMessage1' => $this->__('Email is not specified'),
            'ErrorEmailMessage2' => $this->__('Email is not correct'),
            'ErrorLoadingConfigurationFormat' => $this->__('Error Loading Configuration Format'),
            'ErrorPasswordMessage1' => $this->__('Password is not specified'),
            'ErrorRetrievingData' => $this->__('There is an error in retrieving the data. Please try again later'),
            'ExcludingTaxLabel' => $this->__(''),
            'Facebook' => $this->__('Facebook'),
            'FacebookPostFailedMessage' => $this->__('Facebook post failed...'),
            'FacebookPostSuccess' => $this->__('Successfully posted to Facebook'),
            'FieldRequiredToBeFilledDialogMessage' => $this->__('The %s field should be filled.'),
            'Filters' => $this->__('Filters'),
            'FixedAmounts' => $this->__('Fixed amounts'),
            'ForgotPassword' => $this->__('Forgot Password'),
            'ForgotPasswordButtonTitle' => $this->__('Forgot Password?'),
            'ForgotPasswordSectionHeader' => $this->__('Forgot your password?'),
            'Form' => $this->__('Form'),
            'FormCellTitle' => $this->__('Form'),
            'FromExcludingTaxLabel' => $this->__('From excl. tax'),
            'FromIncludingTaxLabel' => $this->__('From incl. tax'),
            'FullDescription' => $this->__('Full Description'),
            'FunctionalityIsDisabledInOfflineModeAlertMessage' => $this->__('This functionality disabled in offline mode'),
            'Gallery' => $this->__('Gallery'),
            'GetMoreElements' => $this->__('Load more items'),
            'GettingMoreElements' => $this->__('Loading more items...'),
            'GiftCardCodeCheck' => $this->__('Check'),
            'GiftCardCodeRedeem' => $this->__('Redeem'),
            'GiftCardPromo' => $this->__('Giftcard promo code'),
            'GiftCartRedeemedMessageText' => $this->__('Check Gift Card Promo Redeemed'),
            'Giftcards' => $this->__('Enter the gift card code'),
            'GuestLogInMessage' => $this->__('Checkout as Guest or Register'),
            'Home' => $this->__('Home'),
            'IAgree' => $this->__('I Agree'),
            'InStock' => $this->__('In Stock'),
            'IncludingTaxLabel' => $this->__('Incl. tax'),
            'IncorrectDecimalValueDialogMessage' => $this->__('You have entered an incorrect decimal value in the custom amount field. Provide a valid value.'),
            'InitializationPayPalMECLFailedMessage' => $this->__('Initialization of the PayPal checkout failed!'),
            'InitializationPayPalMECLProgressTitle' => $this->__('Initialization PayPal ...'),
            'InvalidEmailDialogMessage' => $this->__('Email address you provided is not valid. Please provide a valid one.'),
            'InvalidResponse' => $this->__('The server responded with invalid data.'),
            'Item' => $this->__('Item'),
            'ItemOptionsSectionTitle' => $this->__('Item Options'),
            'LastOrders' => $this->__('My Orders'),
            'LastUpdatePullDownText' => $this->__('Last update: %@'),
            'LessThatMinMessage' => $this->__('The value should not be less than %.2f!'),
            'LindedIn' => $this->__('LindedIn'),
            'LinkTitle' => $this->__('Link:'),
            'LinkedIn' => $this->__('LinkedIn'),
            'LinkedInAuthorization' => $this->__('LinkedIn Authorization'),
            'LinkedInAutorization' => $this->__('LinkedIn Autorization'),
            'LinkedInPostSuccess' => $this->__('Successfully posted to Linkedin'),
            'LinkedInTitle' => $this->__('LinkedIn'),
            'LinkedinPostFailedMessage' => $this->__('Linkedin post failed...'),
            'LoadingAccountFormProgressTitle' => $this->__('Loading Account Form...'),
            'LoadingAddressBookProgressTitle' => $this->__('Loading Address Book...'),
            'LoadingAddressFormProgressTitle' => $this->__('Loading Address Form...'),
            'LoadingCMSPageProgtessTitle' => $this->__('Loading CMS page ...'),
            'LoadingCartProgressTitle' => $this->__('Loading Cart...'),
            'LoadingCategoryProgressTitle' => $this->__('Loading category ...'),
            'LoadingDownloadableProductsProgressTitle' => $this->__('Loading My Downloadable Products...'),
            'LoadingGalleryProgressTitle' => $this->__('Loading Gallery...'),
            'LoadingLoginFormProgressTitle' => $this->__('Loading Login Form...'),
            'LoadingMoreItems' => $this->__(''),
            'LoadingOrderDetailsProgressTitle' => $this->__('Loading Order Details'),
            'LoadingOrdersListProgressTitle' => $this->__('Loading Orders List...'),
            'LoadingProductOptionsProgressTitle' => $this->__('Loading Product Options...'),
            'LoadingProductProgressTitle' => $this->__('Loading product ...'),
            'LoadingProductsProgressTitle' => $this->__('Loading Products...'),
            'LoadingProgressTitle' => $this->__('Loading %@...'),
            'LoadingRegistrationFormProgressTitle' => $this->__('Loading Registration Form...'),
            'LoadingRestorePasswordFormProgressTitle' => $this->__('Loading Restore Password Form...'),
            'LoadingShippindPayPalMECLProgressTitle' => $this->__('Loading shipping methods ...'),
            'LoadingStoreCreditProgressTitle' => $this->__('Loading Store Credit...'),
            'LoadingText' => $this->__('Loading...'),
            'LoadingWishListProgressTitle' => $this->__('Loading WishList...'),
            'LoadingWriteReviewFormProgressTitle' => $this->__('Loading Write Review Form...'),
            'LogIn' => $this->__('Log In'),
            'LogInButtonTitle' => $this->__('Log into Account'),
            'LogInEmailLabel' => $this->__('Email'),
            'LogInMessage' => $this->__('You must login first'),
            'LogInMessageTitle' => $this->__('LogInMessageTitle'),
            'LogInPasswordLabel' => $this->__('Password'),
            'LogInSectionHeader' => $this->__('Log into your account'),
            'LogOut' => $this->__('Log Out'),
            'LogOutButtonTitle' => $this->__('Log out Account'),
            'MailToText' => $this->__('To:'),
            'MaxLengthMessage' => $this->__('The max length of the field "%@" is %d!'),
            'Maximum' => $this->__('Maximum: %.2f'),
            'MergeButtonTitle' => $this->__('Merge'),
            'MessageText' => $this->__('Message'),
            'MessageTwitterTooLong' => $this->__('Message too long, please use 140 symbols'),
            'Minimize' => $this->__('Minimize'),
            'Minimum' => $this->__('Minimum: %.2f'),
            'MoreInfo' => $this->__('More Info'),
            'MyAccount' => $this->__('My Account'),
            'NameText' => $this->__('Name'),
            'NewAddressBookRecord' => $this->__('Add New Address'),
            'No' => $this->__('No'),
            'NoInternetConnectionAlertTitle' => $this->__('No internet connection. Retry later ...'),
            'NoLastOrders' => $this->__('You have placed no orders.'),
            'NoProductsFoundAlertTitle' => $this->__('No products found. Please retry with other term'),
            'NoProductsMatchingSelection' => $this->__(''),
            'NoSupportForOrderDetails' => $this->__('Currently, the system does not support the viewing of the order detail.'),
            'NotCorrectField' => $this->__('%@ is not correct'),
            'NotEmail' => $this->__('The following email(s) are either mistyped or have incorrect format. Check them and try again:\n'),
            'NotLoggedInAlertMessage' => $this->__('You are not logged in'),
            'NotZeroCustomValueDialogMessage' => $this->__('The custom amount value should be higher than 0.'),
            'NothingSelected' => $this->__('At least one option should be selected'),
            'Notice' => $this->__('Notice'),
            'OK' => $this->__('OK'),
            'OpenAmountPriceBoundariesText' => $this->__('Minimum %@, maximum %@'),
            'Options' => $this->__('Options'),
            'OptionsTitle' => $this->__('Options'),
            'OrderCanceledAlertMessage' => $this->__('You canceled your order. Touch "Pay with PayPal" to try again.'),
            'OrderCanceledPayPalMECLMessage' => $this->__('Order canceled'),
            'OrderDetailsUpdatedMessage' => $this->__('Order Details Updated'),
            'OrderFailedAlertMessage' => $this->__('Your order failed. Touch "Pay with PayPal" to try again.'),
            'OrderFailedMessage' => $this->__('Order failed'),
            'OrderHeader' => $this->__('Order #'),
            'OrderIDTitle' => $this->__('Order ID:'),
            'OrderInfoTitle' => $this->__('Order Info'),
            'OrderListUpdatedMessage' => $this->__('Order List Updated'),
            'OrderNumberText' => $this->__('Order Number'),
            'OrderReviewCheckout' => $this->__('Order Review'),
            'OrderReviewScreenTitle' => $this->__('Order Review'),
            'OrderedItemsText' => $this->__('Ordered Items'),
            'OtherAmount' => $this->__('Other amount'),
            'OutOfStock' => $this->__('Out of Stock'),
            'ParsingError' => $this->__('Error while reading remote data'),
            'PasswordLength' => $this->__('The minimum password length is 6'),
            'PayPalCheckout' => $this->__('PayPal Checkout'),
            'PayPalText' => $this->__('PayPal'),
            'PaymentBridgeServiceErrorMessage' => $this->__('Unknown Payment Bridge Error'),
            'PaymentMethodSectionTitle' => $this->__('Payment Method'),
            'PaymentMethodSelectionWarning' => $this->__('Please select payment method to cover a quote'),
            'PaymentMethodTitle' => $this->__('Payment method'),
            'PaymentMethodsCheckout' => $this->__('Payment Information'),
            'PlaceOrder' => $this->__('Place Order'),
            'PlacingOrderProgressTitle' => $this->__('Placing order ...'),
            'PostToLinkedIn' => $this->__('Share on LinkedIn'),
            'PostToTwitter' => $this->__('Share on Twitter'),
            'PostToWallProduct' => $this->__('Post this product to your wall'),
            'PostingEmailProgressTitle' => $this->__('Posting to e-mails'),
            'Price' => $this->__('Price'),
            'PriceExcludingTax' => $this->__('Price excluding tax'),
            'PriceIncludingTax' => $this->__('Price including tax'),
            'Product' => $this->__('Product'),
            'ProductAddedAlertMessage' => $this->__('Product succesfully added to cart'),
            'ProductAddedAlertTitle' => $this->__('Product added'),
            'ProductAddedToCartLabelTitle' => $this->__('Product Added to Cart'),
            'ProductAddedToWishlistLabelTitle' => $this->__('Product Added to Wishlist'),
            'ProductGalleryUpdatedMessage' => $this->__('Product Gallery Updated'),
            'ProductOptionsUpdatedMessage' => $this->__('Product Options Updated'),
            'ProductOutOfStockAlertMessage' => $this->__('Product is out of stock'),
            'ProductOutOfStockAlertTitle' => $this->__(''),
            'ProductPaymentCompleteLabelTitle' => $this->__('Success'),
            'ProductPaymentCompleteleLabelTitle' => $this->__('Success'),
            'ProductRemovedFromWishlistLabelTitle' => $this->__('Product Removed From Wishlist'),
            'ProductReviewsUpdatedMessage' => $this->__('Product Reviews Updated'),
            'ProductUpdatedMessage' => $this->__('Product Updated'),
            'ProductsText' => $this->__('Products'),
            'PullDownToUpdatePullDownText' => $this->__('Pull Down To Update..'),
            'Qty' => $this->__('Qty'),
            'Quantity' => $this->__('Quantity'),
            'QuantityTitle' => $this->__('Qty:'),
            'RatingReviewsNone' => $this->__('No Ratings'),
            'RatingReviewsTitle' => $this->__('Ratings and Reviews'),
            'RecoverPasswordButtonTitle' => $this->__('Recover'),
            'RedemingGiftCartProgressTitle' => $this->__('Redeeming Gift Card %@'),
            'RegionFieldLabel' => $this->__('State/Province'),
            'RegionSelect' => $this->__('Regions'),
            'RegisterText' => $this->__('Register'),
            'RegisteringOfflineCartProgressTitle' => $this->__('Registering cart ...'),
            'RegisteringUserProgressTitle' => $this->__('Registering user ...'),
            'RegularLabel' => $this->__('Regular'),
            'RegularPriceLabel' => $this->__('Unit Price:'),
            'RelatedProductLabel' => $this->__('You may also like'),
            'ReleaseToUpdatePullDownText' => $this->__('Release To Update...'),
            'RemoveFromWishlistTitle' => $this->__('Remove'),
            'RemoveGiftCardLabel' => $this->__('Remove'),
            'RemoveText' => $this->__('Remove'),
            'RemovingAddressProgressTitle' => $this->__('Remove Address...'),
            'RemovingCouponProgressTitle' => $this->__('Removing Coupon...'),
            'RemovingGiftCartProgressTitle' => $this->__('Removing Gift Card...'),
            'RemovingProductFromWishListProgressTitle' => $this->__('Removing Product from WishList...'),
            'RemovingProgressTitle' => $this->__('Removing %@...'),
            'RemovingStoreCreditProgressTitle' => $this->__('Removing Store Credit...'),
            'RequiredFieldMessage' => $this->__('field is required'),
            'RequiredFieldTitle' => $this->__('required'),
            'RequiredLabel' => $this->__('* - field is required'),
            'Revert' => $this->__('Revert'),
            'RevertDiscountButtonTitle' => $this->__('Revert Discount'),
            'SamplesButtonTitle' => $this->__('Samples'),
            'Save' => $this->__('Save'),
            'SavingAddressProgressTitle' => $this->__('Saving Address...'),
            'SavingChangesProgressTitle' => $this->__('Saving changes ...'),
            'SavingMethodsProgressTitle' => $this->__('Saving shipping methods ...'),
            'SavingShippingAddressProgressTitle' => $this->__('Saving shipping address ...'),
            'Search' => $this->__('Search'),
            'SearchUpdatedMessage' => $this->__('Search Updated'),
            'SearchingProgressTitle' => $this->__('Searching for %@...'),
            'SeeAllText' => $this->__('See all'),
            'SelectA' => $this->__('Select a'),
            'SelectBillingAddressTitle' => $this->__('Select a Billing Address'),
            'SelectBillingMethodTitle' => $this->__('Select a Billing Address'),
            'SelectBillingMethodTitleNoAddress' => $this->__(''),
            'SelectBoxFormat' => $this->__('Select %@'),
            'SelectFromAddressBook' => $this->__('Select from Address Book'),
            'SelectLinks' => $this->__('Select Links'),
            'SelectOptions' => $this->__('Select Options'),
            'SelectPaymentMethod' => $this->__('Select Payment Method'),
            'SelectShippingAddressTitle' => $this->__('Select a Shipping Address'),
            'SelectShippingMethod' => $this->__('Select shipping method'),
            'SelectShippingMethodTitle' => $this->__('Select a Shipping Address'),
            'Send' => $this->__('Send'),
            'SendEmail' => $this->__('Send'),
            'SendEmailTitle' => $this->__('Tell a Friend'),
            'SendTitle' => $this->__('Send'),
            'SendingEmailFailedMessage' => $this->__('Sending e-mail failed...'),
            'SetEmailMessage' => $this->__('Please set email'),
            'SettedText' => $this->__('Set'),
            'ShakeToResetFilters' => $this->__('Shake device to reset the filter'),
            'Share' => $this->__('Share'),
            'ShareTitle' => $this->__('Share'),
            'ShippingAddressTitle' => $this->__('Shipping address'),
            'ShippingCheckout' => $this->__('Shipping'),
            'ShippingMethodTitle' => $this->__('Shipping method'),
            'ShippingMethodsCheckout' => $this->__('Ship method'),
            'Shop' => $this->__('Shop'),
            'ShopAll' => $this->__('Shop All'),
            'ShopUpdatedMessageTitle' => $this->__('Shop Updated'),
            'ShorteningUrlClientSideError' => $this->__('The shortening service returned status code %d indicating a client side error.'),
            'ShorteningUrlError' => $this->__('Error during shortening url'),
            'ShorteningUrlServerSideError' => $this->__('The shortening service returned status code %d indicating a server side error.'),
            'ShowPasswordLabelTitle' => $this->__('Show Password'),
            'SignIn' => $this->__('Sign In'),
            'SignOutProgressTitle' => $this->__('Signing Out ...'),
            'SigningInProgressTitle' => $this->__('Signing In...'),
            'Sku' => $this->__('Product SKU'),
            'SortByLabel' => $this->__('SORT BY:'),
            'SpecialExcludingTaxLabel' => $this->__('Special'),
            'SpecialIncludingTaxLabel' => $this->__('Incl. tax'),
            'SpecifyPaymentMethod' => $this->__('Please specify payment method'),
            'SpecifyShippingMethod' => $this->__('Please specify shipping method'),
            'StandardCheckout' => $this->__('Standard Checkout'),
            'StartingAtExcludingTaxLabel' => $this->__('Starting at excl. tax'),
            'StartingAtIncludingTaxLabel' => $this->__('Starting at incl. tax'),
            'StatusText' => $this->__('Status'),
            'StoreCredit' => $this->__('Store credit'),
            'StoreCreditBalanceHeader' => $this->__('Balance'),
            'StoreCreditInfoUpdatedMessage' => $this->__('Store Credit Info Updated'),
            'StrAddress' => $this->__('Address'),
            'SubmitReview' => $this->__('Submit Review'),
            'SubmittingReviewProgressTitle' => $this->__('Submitting Review...'),
            'Subtotal' => $this->__('Subtotal'),
            'SubtotalExcludingTax' => $this->__('Subtotal excluding tax'),
            'SubtotalExcludingTaxLabel' => $this->__('Subtotal:'),
            'SubtotalIncludingTax' => $this->__('Subtotal including tax'),
            'SubtotalIncludingTaxLabel' => $this->__('Subtotal incl. tax:'),
            'SubtotalRegularPriceLabel' => $this->__('Subtotal:'),
            'SuccessOrderID' => $this->__('Order ID'),
            'SwipeToRevealOptions' => $this->__('Swipe a product to reveal more options'),
            'Telephone' => $this->__('Telephone'),
            'TellAFriendButtonTitle' => $this->__('Tell a Friend'),
            'TellAFriendTitle' => $this->__('Tell a Friend'),
            'TermsAndConditions' => $this->__('Terms And Conditions'),
            'ThereAreNoItemsInYourCart' => $this->__('There are no items in your cart'),
            'ThereIsNoAddressesForThisContact' => $this->__('There is no addresses for this contact'),
            'ToExcludingTaxLabel' => $this->__('To excl. tax'),
            'ToHighCustomValueDialogMessage' => $this->__('The custom amount value should not be higher than %s.'),
            'ToIncludingTaxLabel' => $this->__('To incl. tax'),
            'ToLowCustomValueDialogMessage' => $this->__('The custom amount value should not be lower than %s.'),
            'TooBigValueMessage' => $this->__('The value is too big!'),
            'TooLongTextDialogMessage' => $this->__('The length of the text in the %s field is too big. Please shorten the text.'),
            'TotalsText' => $this->__('Totals'),
            'TouchAndHoldToDeleteProduct' => $this->__('Touch and hold a product to delete from shopping cart'),
            'TouchAndHoldToRevealOptions' => $this->__('Touch and hold a product to reveal more options'),
            'TryAgain' => $this->__('Try Again'),
            'Twitter' => $this->__('Twitter'),
            'TwitterAuthorization' => $this->__('Twitter Authorization'),
            'TwitterAutorization' => $this->__('Twitter Autorization'),
            'TwitterPostFailedMessage' => $this->__('Twitter post failed...'),
            'TwitterPostSuccess' => $this->__('Your tweet has been sent. Thanks for sharing this product on Twitter'),
            'TypeTitle' => $this->__('Type'),
            'URLOrCodeNotSet' => $this->__('Either remote URL or application code was not set. Please make sure you filled all the values and try again.'),
            'UnknownException' => $this->__('Unknown error ocured. Please retry later'),
            'UpdateCommentErrorMessage' => $this->__('Update Comment Error'),
            'UpdatingCartProgressTitle' => $this->__('Updating Cart...'),
            'UpdatingPullDownText' => $this->__('Updating ...'),
            'UseBillingAddress' => $this->__('Use Billing Address'),
            'UseBillingAddressForShipping' => $this->__('Use billing address for shipping'),
            'Version' => $this->__('Version'),
            'ViewCartButtonTitle' => $this->__('View Cart'),
            'ViewDetailsTitle' => $this->__('View Details'),
            'ViewGalleryTitle' => $this->__('View Gallery'),
            'ViewWishlistButtonTitle' => $this->__('View Wishlist'),
            'WaitTitle' => $this->__('Please wait...'),
            'WebStoreAvailableOnly' => $this->__('Product only available on the website.'),
            'WebsiteRestrictionEnabledMessage' => $this->__('Website is offline'),
            'WishListUpdatedMessage' => $this->__('WishList Updated'),
            'Wishlist' => $this->__('My Wishlist'),
            'WishlistPopupTitle' => $this->__('Add To Wishlist'),
            'WriteAReview' => $this->__('Write a review'),
            'WriteReviewTitle' => $this->__('Write a Review'),
            'WrongEmailFormat' => $this->__('Wrong email format'),
            'XMLConnectURL' => $this->__('URL'),
            'Yes' => $this->__('Yes'),
            'iPhoneAddressBookNavigationBarTitle' => $this->__('Address Book'),
            'labelPayWithCheckoutTitle' => $this->__('OR, Pay with Standard Checkout'),
            'qtyLabelTitle' => $this->__('Quantity:')
        );
    }
}
