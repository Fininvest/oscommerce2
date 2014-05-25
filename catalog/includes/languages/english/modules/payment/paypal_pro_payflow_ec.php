<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_TITLE', 'PayPal Express Checkout (Payflow Edition)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_PUBLIC_TITLE', 'PayPal (including Credit and Debit Cards)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit PayPal Website</a>');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DIRECT_MODULE', 'PayPal mandates the PayPal Payments Pro (Payflow Edition) payment module be enabled if this module is to be activated. This module will not load until the PayPal Payments Pro (Payflow Edition) module has been installed.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the Vendor and Password parameters have been configured. Please edit and configure the settings of this module.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_BUTTON', 'Checkout with PayPal');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_COMMENTS', 'Comments:');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_GENERAL', 'Error: A general problem has occurred with the transaction. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_CFG_ERROR', 'Error: Payment module configuration error. Please verify the login credentials.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADDRESS', 'Error: A match of the Shipping Address City, State, and Postal Code failed. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DECLINED', 'Error: This transaction has been declined. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_EXPRESS_DISABLED', 'Error: PayPal Express Checkout has been disabled for this merchant. Please contact PayPal Customer Service.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_LINK_TITLE', 'Test Gateway Connection');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TITLE', 'Gateway Connection Test');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_GENERAL_ERROR', 'An error occurred. Please refresh the page and try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_GENERAL_TEXT', 'Testing connection to gateway..');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_BUTTON_CLOSE', 'Close');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS_TITLE', 'Success!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS_TEXT_LIVE', 'A connection to the live gateway can been made.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS_TEXT_TEST', 'A connection to the test gateway can been made.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR_TITLE', 'Error!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR_TEXT_LIVE', 'A connection to the live gateway could not be made.<br /><br />Disable Verify SSL Certificate in the module configuration and try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR_TEXT_TEST', 'A connection to the test gateway could not be made.<br /><br />Disable Verify SSL Certificate in the module configuration and try again.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_NOT_INSTALLED', 'The PayPal Express Checkout (Payflow Edition) payment module is not installed. Please install it and try again.');
?>
