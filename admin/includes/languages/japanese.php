<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: english.php 3020 2006-02-13 04:24:58Z ajeh $
//

if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

mb_language('Japanese');
mb_internal_encoding("EUC-JP");
mb_http_output("EUC-JP");

// EMAIL config
define('EMAIL_CHARSET', 'ISO-2022-JP');
define('EMAIL_ENCODING', '7bit');
define('EMAIL_MIMEHEADER', 'B');
define('EMAIL_IS_MULTIBYTE', TRUE);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'ja_JP.euc-jp');
define('DATE_FORMAT_SHORT', '%Y/%m/%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%Yǯ%m��%d��(%a)'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'yyyy/MM/dd');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format yyyy/mm/dd
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 8, 2) . substr($date, 5, 2) . substr($date, 0, 4);
  } else {
    return substr($date, 0, 4) . substr($date, 5, 2) . substr($date, 8, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', '�᥿������������ޤ���');
define('ICON_METATAGS_OFF', '�᥿������������ޤ���');
define('TEXT_LEGEND_META_TAGS', '�᥿���������:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>���:</strong> ������Ѥߥ����饤��פ�[meta_tags.php]�ե���������������Ƥ��ޤ���');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ja"');

// charset for web pages and emails
define('CHARSET', 'EUC-JP');

// page title
define('TITLE', 'Zen Cart : ��������');


define('HEADER_TITLE_TOP', '�����ԥۡ���');
define('HEADER_TITLE_SUPPORT_SITE', 'Zen Cart.com');
define('HEADER_TITLE_SUPPORT_SITE_JP', 'Zen Cart.JP');
define('HEADER_TITLE_ONLINE_CATALOG', '����饤�󥷥�å�');
define('HEADER_TITLE_VERSION', '�С������');
define('HEADER_TITLE_LOGOFF', '������');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','���եȷ�');
  define('TEXT_GV_NAMES','���եȷ�');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','��������������');

// text for gender
define('MALE', '����');
define('FEMALE', '����');

// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '��������');
define('BOX_CONFIGURATION_MYSTORE', '�ޥ����ȥ�');
define('BOX_CONFIGURATION_LOGGING', '����');
define('BOX_CONFIGURATION_CACHE', '����å���');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', '�⥸�塼��');
define('BOX_MODULES_PAYMENT', '��ʧ��');
define('BOX_MODULES_SHIPPING', '����');
define('BOX_MODULES_ORDER_TOTAL', '��ʸ���');
define('BOX_MODULES_PRODUCT_TYPES', '���ʥ�����');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', '���ʤδ���');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', '���ƥ��ꡦ���ʤδ���');
define('BOX_CATALOG_PRODUCT_TYPES', '���ʥ����פδ���');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', '���ץ����̾�δ���');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', '���ץ�����ͤδ���');
define('BOX_CATALOG_MANUFACTURERS', '�᡼�����δ���');
define('BOX_CATALOG_REVIEWS', '��ӥ塼�δ���');
define('BOX_CATALOG_SPECIALS', '�ò����ʤδ���');
define('BOX_CATALOG_PRODUCTS_EXPECTED', '����ͽ�꾦�ʤδ���');
define('BOX_CATALOG_SALEMAKER', '������δ���(SALE Maker)');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', '���ʲ��ʤδ���');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', '�ܵҡ���ʸ�δ���');
define('BOX_CUSTOMERS_CUSTOMERS', '�ܵҴ���');
define('BOX_CUSTOMERS_ORDERS', '��ʸ����');
define('BOX_CUSTOMERS_GROUP_PRICING', '����ܵҥ��롼�פδ���');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', '�ϰ衦��Ψ����');
define('BOX_TAXES_COUNTRIES', '��̾����');
define('BOX_TAXES_ZONES', '�ϰ�����');
define('BOX_TAXES_GEO_ZONES', '�ϰ�������');
define('BOX_TAXES_TAX_CLASSES', '�Ǽ�������');
define('BOX_TAXES_TAX_RATES', '��Ψ����');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', '��¥��ݡ���');
define('BOX_REPORTS_PRODUCTS_VIEWED', '���ʤα��������󥭥�');
define('BOX_REPORTS_PRODUCTS_PURCHASED', '���ʤ��������󥭥�');
define('BOX_REPORTS_ORDERS_TOTAL', '�ܵ��̤�����󥭥�');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', '�߸˿��ξ��ʤ����ʥ�󥭥�');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', '�ܵҾҲ�ξ���');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', '�ɲ����ꡦ�ġ���');
define('BOX_TOOLS_ADMIN', '�����Ԥ�����');
define('BOX_TOOLS_TEMPLATE_SELECT', '�ƥ�ץ졼�Ȥ�����');
define('BOX_TOOLS_BACKUP', 'DB�Хå����å״���');
define('BOX_TOOLS_BANNER_MANAGER', '�Хʡ��δ���');
define('BOX_TOOLS_CACHE', '����å��女��ȥ���');
define('BOX_TOOLS_DEFINE_LANGUAGE', '����ե��������');
define('BOX_TOOLS_FILE_MANAGER', '�ե��������');
define('BOX_TOOLS_MAIL', '�᡼�������');
define('BOX_TOOLS_NEWSLETTER_MANAGER', '�᡼��ޥ�����δ���');
define('BOX_TOOLS_SERVER_INFO', '�����о���Υ����å�');
define('BOX_TOOLS_WHOS_ONLINE', '����饤��桼���Υ����å�');
define('BOX_TOOLS_STORE_MANAGER', '����å״������ѥġ���');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', '��ȯ���ѥġ���');
define('BOX_TOOLS_SQLPATCH','SQL�ѥå��Υ��󥹥ȡ���');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', '����¾');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','���֥ڡ������Խ�');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', '�ᥤ��ڡ���');
define('BOX_TOOLS_DEFINE_CONTACT_US','���䤤��碌');
define('BOX_TOOLS_DEFINE_PRIVACY','�Ŀ;���');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','����������');
define('BOX_TOOLS_DEFINE_CONDITIONS','�����ѵ���');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','����ʸ��λ');
define('BOX_TOOLS_DEFINE_PAGE_2','Page 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Page 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Page 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', '�����饤��');
define('BOX_LOCALIZATION_CURRENCIES', '�̲�����');
define('BOX_LOCALIZATION_LANGUAGES', '��������');
define('BOX_LOCALIZATION_ORDERS_STATUS', '��ʸ���ơ���������');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '�������ݥ��');
define('BOX_GV_ADMIN_QUEUE', '��ǧ�Ԥ�' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', '' . TEXT_GV_NAME.'��᡼������');
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . '�����յ�Ͽ');
define('BOX_COUPON_ADMIN','�����ݥ���δ���');

define('IMAGE_RELEASE', 'Redeem ', '��������');

// javascript messages
define('JS_ERROR', '���顼�� �ե���������Ƥ˥��顼������ޤ���!\n�ʲ������Ƥ��ǧ���Ƥ���������\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* �����ʤβ��ʤ�ɬ�פǤ���\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* ���ʥ��ץ����°���β��ʤϡޤΤ����줫��ɬ�פǤ���\n');

define('JS_PRODUCTS_NAME', '* ������̾��ɬ�ܤǤ���\n');
define('JS_PRODUCTS_DESCRIPTION', '* �����ʤ����������Ϥ���Ƥ��ޤ���\n');
define('JS_PRODUCTS_PRICE', '* �����ʤβ��ʤ����Ϥ���Ƥ��ޤ���\n');
define('JS_PRODUCTS_WEIGHT', '* �����ʤν��̤����Ϥ���Ƥ��ޤ���\n');
define('JS_PRODUCTS_QUANTITY', '* �����ʤκ߸˿������Ϥ���Ƥ��ޤ���\n');
define('JS_PRODUCTS_MODEL', '* �����ʤη��֤����Ϥ���Ƥ��ޤ���\n');
define('JS_PRODUCTS_IMAGE', '* �����ʤβ��������Ϥ���Ƥ��ޤ���\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* ���ξ��ʤο��������ʤ����ꤷ�Ƥ���������\n');

define('JS_GENDER', '* \'����\'�����򤷤Ƥ���������\n');
define('JS_FIRST_NAME', '* \'��\'�����Ϥ��Ƥ���������' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_LAST_NAME', '* \'̾\'�����Ϥ��Ƥ���������' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_FIRST_NAME_KANA', '* \'���դ꤬��\'�����Ϥ��Ƥ���������' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_LAST_NAME_KANA', '* \'̾�դ꤬��\'�����Ϥ��Ƥ���������' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_DOB', '* \'��ǯ����\'�����Ϥ��Ƥ����������ե����ޥå�: xxxx/xx/xx (����/��/��).\n');
define('JS_EMAIL_ADDRESS', '* \'�᡼�륢�ɥ쥹\'�����Ϥ��Ƥ���������' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_ADDRESS', '* \'����\'�����Ϥ��Ƥ��������� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_POST_CODE', '* \'͹���ֹ�\'�����Ϥ��Ƥ���������' . ENTRY_POSTCODE_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_CITY', '* \'�Զ�Į¼\'�����Ϥ��Ƥ���������' . ENTRY_CITY_MIN_LENGTH . 'ʸ���ʾ�\n');
define('JS_STATE', '* \'��ƻ�ܸ�\'�����Ϥ��Ƥ���������\n');
define('JS_STATE_SELECT', '-- ���򤷤Ƥ������� --');
define('JS_ZONE', '* \'��ƻ�ܸ�\'��ꥹ�Ȥ������򤷤Ƥ���������');
define('JS_COUNTRY', '* \'��̾\'�����򤷤Ƥ���������\n');
define('JS_TELEPHONE', '* \'�����ֹ�\'�����Ϥ��Ƥ���������' . ENTRY_TELEPHONE_MIN_LENGTH . 'ʸ���ʾ�.\n');
define('JS_PASSWORD', '* \'�ѥ����\' �� \'�ѥ���ɳ�ǧ\'�����פ���褦�����Ϥ��Ƥ���������' . ENTRY_PASSWORD_MIN_LENGTH . 'ʸ���ʾ�\n');

define('JS_ORDER_DOES_NOT_EXIST', '��ʸ�ֹ�%s��¸�ߤ��ޤ���');

define('CATEGORY_PERSONAL', '�Ŀ;���');
define('CATEGORY_ADDRESS', '������');
define('CATEGORY_CONTACT', '��Ϣ����');
define('CATEGORY_COMPANY', '���̾');
define('CATEGORY_OPTIONS', '���ץ����');

define('ENTRY_GENDER', '����:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">ɬ�ܤǤ�</span>');
define('ENTRY_FIRST_NAME', '��:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_LAST_NAME', '̾:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ�</span>');
// ->furikana
define('ENTRY_FIRST_NAME_KANA', '���դ꤬��:');
define('ENTRY_FIRST_NAME_KANA_ERROR', '&nbsp;<span class="errorText">' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_LAST_NAME_KANA', '̾�դ꤬��:');
define('ENTRY_LAST_NAME_KANA_ERROR', '&nbsp;<span class="errorText">' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ�</span>');
// <-furikana
define('ENTRY_DATE_OF_BIRTH', '��ǯ����:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(������: 1970/05/21)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail ���ɥ쥹:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">���Υ᡼�륢�ɥ쥹�������Ǥ���</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">���Υ᡼�륢�ɥ쥹�ϴ�����Ͽ����Ƥ��ޤ���</span>');
define('ENTRY_COMPANY', '���̾:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Discount Pricing Group');
define('ENTRY_STREET_ADDRESS', '����1:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">' . ENTRY_STREET_ADDRESS_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_SUBURB', '����2:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', '͹���ֹ�:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">' . ENTRY_POSTCODE_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_CITY', '�Զ�Į¼:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">' . ENTRY_CITY_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_STATE', '��ƻ�ܸ�:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">ɬ��</span>');
define('ENTRY_COUNTRY', '��̾:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', '�����ֹ�:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">' . ENTRY_TELEPHONE_MIN_LENGTH . 'ʸ���ʾ�</span>');
define('ENTRY_FAX_NUMBER', 'Fax�ֹ�:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', '�᡼��ޥ�����:');
define('ENTRY_NEWSLETTER_YES', '���ɤ���');
define('ENTRY_NEWSLETTER_NO', '���ɤ��ʤ�');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', '�᡼������');
define('IMAGE_BACK', '���');
define('IMAGE_BACKUP', '�Хå����å�');
define('IMAGE_CANCEL', '����󥻥�');
define('IMAGE_CONFIRM', '��ǧ');
define('IMAGE_COPY', '���ԡ�');
define('IMAGE_COPY_TO', '���ԡ���');
define('IMAGE_DETAILS', '�ܺ�');
define('IMAGE_DELETE', '���');
define('IMAGE_EDIT', '�Խ�');
define('IMAGE_EMAIL', 'E-Mail');
define('IMAGE_FILE_MANAGER', '�ե��������');
define('IMAGE_ICON_STATUS_GREEN', 'ͭ��');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'ͭ���ˤ���');
define('IMAGE_ICON_STATUS_RED', '̵��');
define('IMAGE_ICON_STATUS_RED_LIGHT', '̵���ˤ���');
define('IMAGE_ICON_INFO', '����');
define('IMAGE_INSERT', '����');
define('IMAGE_LOCK', '��å�');
define('IMAGE_MODULE_INSTALL', '�⥸�塼��Υ��󥹥ȡ���');
define('IMAGE_MODULE_REMOVE', '�⥸�塼��Υ��󥤥󥹥ȡ���');
define('IMAGE_MOVE', '��ư');
define('IMAGE_NEW_BANNER', '�������Хʡ�');
define('IMAGE_NEW_CATEGORY', '���������ƥ���');
define('IMAGE_NEW_COUNTRY', '��������̾');
define('IMAGE_NEW_CURRENCY', '�������̲�');
define('IMAGE_NEW_FILE', '�������ե�����');
define('IMAGE_NEW_FOLDER', '�������ե����');
define('IMAGE_NEW_LANGUAGE', '����������');
define('IMAGE_NEW_NEWSLETTER', '�������᡼��ޥ�����');
define('IMAGE_NEW_PRODUCT', '����������');
define('IMAGE_NEW_SALE', '������������');
define('IMAGE_NEW_TAX_CLASS', '�������Ǽ���');
define('IMAGE_NEW_TAX_RATE', '��������Ψ');
define('IMAGE_NEW_TAX_ZONE', '���������ϰ�');
define('IMAGE_NEW_ZONE', '�������ϰ�');
define('IMAGE_OPTION_NAMES', '���ץ����̾�δ���');
define('IMAGE_OPTION_VALUES', '���ץ�����ͤδ���');
define('IMAGE_ORDERS', '��ʸ');
define('IMAGE_ORDERS_INVOICE', 'Ǽ�ʽ�');
define('IMAGE_ORDERS_PACKINGSLIP', '����ɼ');
define('IMAGE_PREVIEW', '�ץ�ӥ塼');
define('IMAGE_RESTORE', '����');
define('IMAGE_RESET', '�ꥻ�å�');
define('IMAGE_SAVE', '��¸');
define('IMAGE_SEARCH', '����');
define('IMAGE_SELECT', '����');
define('IMAGE_SEND', '����');
define('IMAGE_SEND_EMAIL', '�᡼������');
define('IMAGE_UNLOCK', '��å����');
define('IMAGE_UPDATE', '����');
define('IMAGE_UPDATE_CURRENCIES', '���إ졼�ȹ���');
define('IMAGE_UPLOAD', '���åץ���');
define('IMAGE_TAX_RATES','��Ψ');
define('IMAGE_DEFINE_ZONES','�ϰ�����');
define('IMAGE_PRODUCTS_PRICE_MANAGER', '���ʲ��ʤδ���');
define('IMAGE_UPDATE_PRICE_CHANGES', '���ʲ��ʤι���');
define('IMAGE_ADD_BLANK_DISCOUNTS','Add ' . DISCOUNT_QTY_ADD . ' Blank Discount Qty');
define('IMAGE_CHECK_VERSION', 'zen-cart�Υ��åץǡ��Ȥ�����å�');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'ʣ�����ƥ���Υ�󥯴���');

define('IMAGE_ICON_STATUS_ON', '���ơ����� - ����');
define('IMAGE_ICON_STATUS_OFF', '���ơ����� - ����');
define('IMAGE_ICON_LINKED', 'Product is Linked');

define('IMAGE_REMOVE_SPECIAL','���̲��ʤ�������');
define('IMAGE_REMOVE_FEATURED','�������ᾦ�ʾ����������');
define('IMAGE_INSTALL_SPECIAL', '���̲��ʤξ�������ꤹ��');
define('IMAGE_INSTALL_FEATURED', '�������ᾦ�ʾ�����ɲä���');

define('ICON_PRODUCTS_PRICE_MANAGER','���ʲ��ʤδ���');
define('ICON_COPY_TO', '���ԡ���');
define('ICON_CROSS', '��(False)');
define('ICON_CURRENT_FOLDER', '���ߤΥե����');
define('ICON_DELETE', '���');
define('ICON_EDIT', '�Խ�');
define('ICON_ERROR', '���顼');
define('ICON_FILE', '�ե�����');
define('ICON_FILE_DOWNLOAD', '���������');
define('ICON_FOLDER', '�ե����');
define('ICON_LOCKED', '��å�');
define('ICON_MOVE', '��ư');
define('ICON_PREVIOUS_LEVEL', '���Υ�٥�');
define('ICON_PREVIEW', '�ץ�ӥ塼');
define('ICON_RESET', '�ꥻ�å�');
define('ICON_STATISTICS', '����');
define('ICON_SUCCESS', '����');
define('ICON_TICK', '��(True)');
define('ICON_UNLOCKED', '��å����');
define('ICON_WARNING', '�ٹ�');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '%s�ڡ��� (��%d�ڡ���)');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', '�ǥե����');
define('TEXT_SET_DEFAULT', '�ǥե���Ȥ�����');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* ɬ��</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '���顼: �ǥե���Ȥ��̲ߤ����ꤵ��Ƥ��ޤ��󡣡֥����饤����->���̲�����פ������ꤷ�Ƥ���������');

define('TEXT_CACHE_CATEGORIES', '���ƥ���ܥå���');
define('TEXT_CACHE_MANUFACTURERS', '�᡼�����ܥå���');
define('TEXT_CACHE_ALSO_PURCHASED', '��Ϣ�ξ��ʥ⥸�塼��');

define('TEXT_NONE', '--�ʤ�--');
define('TEXT_TOP', '�ȥå�');

define('ERROR_DESTINATION_DOES_NOT_EXIST', '���顼: �����褬¸�ߤ��ޤ���%s');
define('ERROR_DESTINATION_NOT_WRITEABLE', '���顼: �����褬�񤭹����ԲĤˤʤäƤ��ޤ���%s');
define('ERROR_FILE_NOT_SAVED', '���顼: ���åץ��ɤ����ե��������¸����ޤ���Ǥ�����');
define('ERROR_FILETYPE_NOT_ALLOWED', '���顼: �ե����륢�åץ��ɤ����Ĥ���Ƥ��ޤ���%s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '����: ���åץ��ɤ��줿�ե����뤬��¸����ޤ�����%s');
define('WARNING_NO_FILE_UPLOADED', '�ٹ�: ���åץ��ɥե����뤬���ꤵ��Ƥ��ޤ���');
define('WARNING_FILE_UPLOADS_DISABLED', '�ٹ�: ����PHP�Ǥϥե����륢�åץ��ɤ����ݡ��Ȥ���Ƥ��ޤ���ini�ե�����������Ƥ���������');
define('ERROR_ADMIN_SECURITY_WARNING', '�ٹ�: �����ͤΥ����󤬰����ǤϤ���ޤ��� ... �ޤ��������������꤬����Ƥ��ޤ���: Admin ���ɥߥ�ϼ�곰����Ƥ��ʤ������ޤ����ѹ�����Ƥ��ޤ���<br />�Ǥ�������᤯��Shop�Υ������ƥ��Τ���˥�������Ѥ���٤��Ǥ���<br />�ġ���˹Ԥ��ޤ�->������ID�ȥѥ���ɤ��Ѥ�����������ꡣ<br />�����ͤΤ�����ɲå������ƥ��˴ؤ��Ƥϡ�/docs�򻲾Ȥ��Ƥ���������');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','�ǡ����١����Υѥå���٥��夲��ɬ�פ�����ޤ��� �ġ���򸫤Ƥ�������->�����о���򻲾ȤΤ�ȡ��ѥå���٥��ľ���Ƥ���������');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //�ǡ����١����С������ߥ��ޥå��˴ؤ���ٹ�򥪥դˤ�������ˤ��ޤ���');
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>�ٹ�</strong> �����Ȥϸ��ߥ��ƥʥ���Τ����ĺ�����Ƥ��ޤ���<br />���: ���ƥʥ󥹻��ˤϡ�Payment�������Υ⥸�塼��ƥ��Ȥ�Ԥʤ����ȤϤǤ��ޤ���');

define('_JANUARY', '1��');
define('_FEBRUARY', '2��');
define('_MARCH', '3��');
define('_APRIL', '4��');
define('_MAY', '5��');
define('_JUNE', '6��');
define('_JULY', '7��');
define('_AUGUST', '8��');
define('_SEPTEMBER', '9��');
define('_OCTOBER', '10��');
define('_NOVEMBER', '11��');
define('_DECEMBER', '12��');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '<b>%d</b>����<b>%d</b>���ɽ�� (��<b>%d</b>��)');

define('TEXT_VALID_PRODUCTS_LIST', '���ʥꥹ��');
define('TEXT_VALID_PRODUCTS_ID', '����ID');
define('TEXT_VALID_PRODUCTS_NAME', '����̾');
define('TEXT_VALID_PRODUCTS_MODEL', '���ʷ���');

define('TEXT_VALID_CATEGORIES_LIST', '���ƥ���ꥹ��');
define('TEXT_VALID_CATEGORIES_ID', '���ƥ���ID');
define('TEXT_VALID_CATEGORIES_NAME', '���ƥ���̾');

define('DEFINE_LANGUAGE','�������:');

define('BOX_ENTRY_COUNTER_DATE','������ȳ�����:');
define('BOX_ENTRY_COUNTER','�������:');

// not installed
define('NOT_INSTALLED_TEXT','���󥹥ȡ��뤵��Ƥ��ޤ���');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','���ץ�����ͤΥ����Ƚ�����');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>���ץ����°���򥪥ץ�����ͤǥ����Ȥ���</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>���ץ����°����ɽ����򹹿�����</strong><br />�ǥե���Ȥ�ɽ����s:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','���ץ����̾�Υ����Ƚ�����');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','���ץ����°���δ���');

// generic model
  define('TEXT_MODEL','����:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','�����ɥܥå�����ɽ������');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s ��ǧ�Ԥ� ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' �����Ԥ�');
  define('IMAGE_ORDER','Order');

  define('BOX_TOOLS_EMAIL_WELCOME','�����륫��᡼��Υץ�ӥ塼');

  define('IMAGE_DISPLAY','ɽ��');
  define('IMAGE_UPDATE_SORT','�����Ƚ繹��');
  define('IMAGE_EDIT_PRODUCT','�����Խ�');
  define('IMAGE_EDIT_ATTRIBUTES','���ʥ��ץ�����Խ�');
  define('TEXT_NEW_PRODUCT', '���ƥ�����ξ���: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','���ץ����̾�ȥ��ץ�������');
  define('TEXT_PRODUCTS_PRICE_MANAGER','���ʲ��ʴ���');
  define('TEXT_PRODUCT_EDIT','�����Խ�');
  define('TEXT_ATTRIBUTE_EDIT','���ʥ��ץ�����Խ�');
  define('TEXT_PRODUCT_DETAILS','�ܺ�');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', '�Ͱ�����');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Ψ��%��');
  define('DEDUCTION_TYPE_DROPDOWN_2', '����������');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','�Ǿ�:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','ñ��:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','������:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','�ɲ�:');

  define('TEXT_PRODUCTS_MIX_OFF','*���ץ����ޤޤ�');
  define('TEXT_PRODUCTS_MIX_ON','*���ץ�������');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','�����ե��륿: ');
  define('HEADING_TITLE_SEARCH_DETAIL','����: ');

  define('PREV_NEXT_PRODUCT', '����: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*���ƥ����̵���Ǥ�</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*���ʤ�̵���Ǥ�</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','�����ԥǥ⤬ͭ���ˤʤäƤ��ޤ��� �����Ĥ���������ܤ����Ǥ��ʤ��褦�ˤʤäƤ��ޤ���');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','�����ԥǥ⤬ͭ���ˤʤäƤ��ޤ��� �����Ĥ���������ܤ����Ǥ��ʤ��褦�ˤʤäƤ��ޤ��� - <strong>���: �����Ԥκ�����ϲ�ǽ�Ǥ���</strong>');
  define('ERROR_ADMIN_DEMO','�����ԥǥ⤬ͭ���ˤʤäƤ��ޤ���e ... �¹Ԥ��褦�Ȥ��������̵���ˤʤ�ޤ�����');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','���Ѳ�ǽ�ʿ������С������');
  define('TEXT_VERSION_CHECK_NEW_PATCH','���Ѳ�ǽ�ʿ������ѥå�');
  define('TEXT_VERSION_CHECK_PATCH','�ѥå�');
  define('TEXT_VERSION_CHECK_DOWNLOAD','�ѥå����������ɤ���');
  define('TEXT_VERSION_CHECK_CURRENT','Zen Cart&trade�ΥС������; �Ȥ�������Ϥ���ޤ���');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', ' <b>%d</b>����<b>%d</b>��ɽ����(�����������<b>%d</b>��)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', '��������ɾ��ʤδ���');

define('BOX_CATALOG_FEATURED','�������ᾦ�ʤδ���');

define('ERROR_NOTHING_SELECTED', '�������򤵤�Ƥ��ޤ��� ... �ѹ�����Ƥ��ޤ���');
define('TEXT_STATUS_WARNING','<strong>���:</strong> ���դ����ꤷ�Ƥ����ȡ����ơ���������ưŪ�˥��󡦥��դˤʤ�ޤ���');

define('TEXT_LEGEND_LINKED', '��󥯤��줿����');
define('TEXT_MASTER_CATEGORIES_ID','���ʥޥ��������ƥ���:');
define('TEXT_LEGEND', '����: ');
define('TEXT_LEGEND_STATUS_OFF', '���ơ����� - ����');
define('TEXT_LEGEND_STATUS_ON', '���ơ����� - ����');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>���: �ޥ��������ƥ���ϡ��㤨�Х�����ʤɾ��ʥ��ƥ������<br />��������򤹤�褦�ʾ��˻��Ѥ��ޤ���</strong>');

define('TEXT_YES', 'Yes');
define('TEXT_NO', 'No');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>�������ꥨ�顼!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>�ٹ�:</strong> Ź�ޤ�͹���ֹ椬���ꤵ��Ƥ��ޤ���');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>�ٹ�:</strong> ������̵���˽���0�����ꤵ��Ƥ���Τǡ�������̵���⥸�塼���̵���Ǥ�');
define('ERROR_USPS_STATUS', '<strong>�ٹ�:</strong> USPS is either missing the username and/or password, or ... it is set to TEST rather than PRODUCTION and will not work<br />If you still cannot retrieve quotes, contact USPS and activate your live account');

// text pricing
define('TEXT_CHARGES_WORD','����׻����:');
define('TEXT_PER_WORD','<br />���ñ������: ');
define('TEXT_WORDS_FREE',' ��̵�� ');
define('TEXT_CHARGES_LETTERS','����׻����:');
define('TEXT_PER_LETTER','<br />ʸ��ñ������: ');
define('TEXT_LETTERS_FREE',' ʸ��̵�� ');
define('TEXT_ONETIME_CHARGES','*��󥿥������� = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*��󥿥������� = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', '���̳�����ץ����');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','����');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','����');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '���̳������󥿥������⥪�ץ����');
define('TEXT_CATEGORIES_PRODUCTS', '���ʥ��ƥ�������򤷤Ƥ�������');
define('TEXT_PRODUCT_TO_VIEW', '���ʤ����򤷡�ɽ���ܥ���򲡤��Ƥ���������');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', '̵���Υޥ��������ƥ��� ID');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>�ٹ�:</strong> ���ξ��ʤ�ʣ���Υ��ƥ���˥�󥯤���ޤ������ޥ��������ƥ�����������ꤵ��Ƥ��ޤ���!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '���� �䤤�礻');
define('PRODUCTS_PRICE_IS_FREE_TEXT','����̵��');

define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', '����:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','�����:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','������:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','HTML���ǥ��������ꤷ�Ƥ��ʤ���Javascript�򥪥դˤ��Ƥ�����ϡ�ľ��HTML�ƥ����Ȥ����Ϥ��Ƥ���������');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">���: ���ʤ��ϥƥ����ȷ����Υ᡼���ȤäƤ��ޤ���HTML�����Υ᡼������ꤿ�����ϡ֥᡼�륪�ץ����פ�HTML�����᡼���ͭ���ˤ��륪�ץ��������ꤷ�Ƥ���������</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">���: ���ʤ��ϥƥ����ȷ����Υ᡼���ȤäƤ��ޤ���HTML�����Υ᡼������ꤿ�����ϡ��֥᡼�륪�ץ����פ�HTML�����᡼���ͭ���ˤ��륪�ץ��������ꤷ�Ƥ���������</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"���Υ᡼���HTML�ե����ޥåȤǤ������ʤ������Ȥ��Υ᡼�륽�եȤǤ�Ŭ�ڤ�ɽ���Ǥ��ʤ��褦�Ǥ���");
define('ENTRY_EMAIL_PREFERENCE','�᡼��ե����ޥå�����:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','�����Ƶ���(none)�פ��֥��ץȥ�����(���ɼԤ��鳰��)�פ����֤ȡ���ʸ��ǧ�᡼���ޤ����ƤΥ᡼���������ʤ����֤ˤʤ�ޤ���');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML����');
define('ENTRY_EMAIL_TEXT_DISPLAY','�ƥ����ȷ���');
define('ENTRY_EMAIL_NONE_DISPLAY','���Ƶ���');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','�᡼��ޥ������ۿ������');
define('ENTRY_NOTHING_TO_SEND','��å��������������Ƥ�����ޤ���');
 define('EMAIL_SEND_FAILED','���顼: "%s"�ؤΥ᡼���������� <%s> �оݤ�: "%s"');

// toggle on/off
  define('TEXT_HTML_AREA', 'htmlArea');
  define('TEXT_EDITOR_INFO', '�ƥ����ȥ��ǥ���');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', '���ƥ���/���� ��ʸ����: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', '���ʤΥ����Ƚ����, ����');
  define('TEXT_SORT_PRODUCTS_NAME', '����');
  define('TEXT_SORT_PRODUCTS_MODEL', '��ǥ�');
  define('TEXT_SORT_PRODUCTS_QUANTITY', '��ʸ��+, ����');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', '��ʸ��-, ����');
  define('TEXT_SORT_PRODUCTS_PRICE', '����+, ����');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', '����-, ����');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', '���ƥ���Υ����Ƚ����, ���ƥ���');
  define('TEXT_SORT_CATEGORIES_NAME', '���ƥ���');



  define('TABLE_HEADING_YES','�Ϥ�');
  define('TABLE_HEADING_NO','������');
  define('TEXT_IMAGES_OVERWRITE', '��¸�Υ��ץ����������񤭤��ޤ�����<br/>��񤭤������ʤ�����[������]�����򤷤ơ���¸�ե�����Ȥϰۤʤ�̾���Υե������[���ץ�������]�˻��ꤷ�Ƥ���������');
  define('TEXT_IMAGE_OVERWRITE_WARNING','�ٹ�: °�����ܲ����򥢥åץ��ɤ��ޤ���������񤭤Ǥ��ޤ���Ǥ����� ');

  define('ERROR_DEFINE_OPTION_NAMES', '�ٹ�: ���ץ����͡�������������Ƥ��ޤ���');
  define('ERROR_DEFINE_OPTION_VALUES', '�ٹ�: ���ץ���������塼�����������Ƥ��ޤ���');
  define('ERROR_DEFINE_PRODUCTS', '�ٹ�: ���ʤ����������Ƥ��ޤ���');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', '�ٹ�: �ޥ��������ƥ����ID�Ϥ��ξ��ʤ����ꤵ��Ƥ��ޤ���');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','���֥��ƥ����ޤ�Ʋä��ޤ���');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','���֥��ƥ���ʳ��ǲä��Ƥ���������');

  define('BUTTON_PREVIOUS_ALT','���ξ���');
  define('BUTTON_NEXT_ALT','���ξ���');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'ʣ���Υ��ƥ��꤬�ޥ͡�������󥯤��ޤ���');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'ʣ���Υ��ƥ���ؤξ��ʤ򥳥ԡ����ޤ���');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', '���٤Ƥξ��ʤ򥳥ԡ�, �ɲäȺ���� �������ᾦ�ʤΥ��ơ������ϸ��ߥ��դǤ���');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', '�������ᾦ�ʤ�ɽ�� - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', '�������ᾦ�ʤ�ɽ�� - OFF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '���顼: Ʊ�����ƥ���Ǿ��ʤ��󥯤��뤳�ȤϤǤ��ޤ���');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '���顼: ���������᡼���ǥ��쥯�ȥ�ν񤭹��ߤ���ǽ�ǤϤ���ޤ���: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '���顼: ���������᡼���ǥ��쥯�ȥ꤬¸�ߤ��Ƥ��ޤ���: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', '���顼: ���֥��ƥ���˥��ƥ����ư�������Ȥ��Ǥ��ޤ���');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', '���顼: ����¸�ߤ���Ȥ����Ʊ�����ƥ��ꡢ�ޤ��ϡ����ƥ������ؤξ��ʤ��ư���뤳�Ȥ��Ǥ��ޤ���');
  define('ERROR_CATEGORY_HAS_PRODUCTS', '���顼: ���ƥ���ˡ����ʤ�����ޤ�!<br /><br />���ʤ��Υ��ƥ����¤�뤿��˰�����줬�Ǥ��ޤ����� ���ƥ����Products��Categories�Τɤ��餫�ˤ⤫����餺���褷��ξ�����ݻ�����Ȥ����櫓�ǤϤ���ޤ���!');
  define('SUCCESS_CATEGORY_MOVED', '����! ���ƥ��������˰�ư���ޤ�����');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', '���顼: Ʊ�����ƥ���˥��ƥ�����ư���뤳�ȤϤǤ��ޤ���!
 ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '�ٹ�: EZ-PAGES HEADER - ������IP�Τ�ͭ���ˤʤäƤ��ޤ���');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '�ٹ�: EZ-PAGES FOOTER - ������IP�Τ�ͭ���ˤʤäƤ��ޤ���');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '�ٹ�: EZ-PAGES SIDEBOX - ������IP�Τ�ͭ���ˤʤäƤ��ޤ���');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','�ٹ�: ���ξ��ʤϥޡ������ʤǤ��� - ����̵�������Ϥ���ν���򥹥��åפ��ޤ���<br />��ʸ���ʤΤ��٤Ƥ��ǥ⾦�ʤǤ���Ȥ���������ȯ�����ޤ���');
  define('TEXT_VIRTUAL_EDIT','�ٹ�: ���ξ��ʤϥޡ������ʤǤ��� - ����̵�������Ϥ���ν���򥹥��åפ��ޤ���<br />��ʸ���ʤΤ��٤Ƥ��ǥ⾦�ʤǤ���Ȥ���������ȯ�����ޤ���');
  define('TEXT_FREE_SHIPPING_PREVIEW','�ٹ�: ���ξ��ʤϥޡ������ʤǤ��� - ����̵�������Ϥ���ν��꤬ɬ�פǤ���<br />���������ˤ����뤹�٤Ƥξ��ʤ��������̵���Ǥ���Ȥ��ˡ�����̵���ѤΥ⥸�塼�뤬ɬ�פǤ���');
  define('TEXT_FREE_SHIPPING_EDIT','�ٹ�: �Ϥ����ޡ������ʤǤ��� - ����̵��, ���Ϥ���ν��꤬ɬ�פǤ���<br />���������ˤ����뤹�٤Ƥξ��ʤ��������̵���Ǥ���Ȥ��ˡ�����̵���ѤΥ⥸�塼�뤬ɬ�פǤ���');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', '�ٹ�: �����ͤΥ���Ͽ�ϡ������2����ʾ�ˤ��뤳�Ȥ򤪴��ᤷ�ޤ���');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', '�ٹ�: �����ͤΥ���Ͽ�ϡ������50,000�ʾ�ˤ��뤳�Ȥ򤪴��ᤷ�ޤ�');
  define('RESET_ADMIN_ACTIVITY_LOG', '�����ͤΥ���Ͽ��ꥻ�åȤ��뤿�ᡢ�����Ͳ��̤ذ�ư���ޤ���');

  define('CATEGORY_HAS_SUBCATEGORIES', '���: ���ƥ���˥��֥��ƥ��꤬����ޤ���<br />���ʤ��ɲäǤ��ޤ���');

  define('WARNING_REGISTER_GLOBALS_ON', '��������Υ����С���register_globals��On�Ǳ��Ѥ���Ƥ��ޤ���<br/>register_globals�ϥ������ƥ�����������������������ǽ�������뤿�ᡢZen Cart�ϡ�register_globals�������Off�ˤ��ʤ����ư��ޤ���<br/>Zen Cart�Υ��󥹥ȡ���ǥ��쥯�ȥ��.htaccess�ե����뤬���������åץ��ɤ���Ƥ���Τˤ��Υ�å�������ɽ������Ƥ����硢��������Υ����С��Ǥ�.htaccess��register_globals��������ѹ��Ǥ��ʤ����Ȥ��̣���Ƥ��ޤ���<br/>����������褹�뤿��ˤϡ����Τ���2�ĤΤɤ��餫���б���ɬ�פǤ���<br/><br/><br/>1. �����С���������ѹ�����<br/>2. register_globals��Off�Ǳ��Ѳ�ǽ�ʥ����С��˺ƥ��󥹥ȡ��뤹��');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>
