<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 3260 2006-03-26 00:18:01Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; 2003-2011 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> Powered by <a href="http://www.zen-cart.com" target="_blank">zen-cart.com</a> / <a href="http://www.zen-cart.jp" target="_blank">zen-cart.jp</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'ja_JP.EUC-JP');
mb_language('Japanese');
mb_internal_encoding("EUC-JP");
mb_http_output("EUC-JP");

// if mbstring is not load, use mb-emulator 

  define('DATE_FORMAT_SHORT', '%Y/%m/%d');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%Yǯ%m��%d��(%a)'); // this is used for strftime()
  define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

// EMAIL config
  define('EMAIL_CHARSET', 'ISO-2022-JP');
  define('EMAIL_ENCODING', '7bit');
  define('EMAIL_MIMEHEADER', 'B');
  define('EMAIL_IS_MULTIBYTE', TRUE);

////
// Return date in raw format mm/dd/yyyy
// $date should be in format yyyy/mm/dd -- Change for Japanese date format
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
    return substr($date, 8, 2) . substr($date, 5, 2) . substr($date, 0, 4);
      } else {
    return substr($date, 0, 4) . substr($date, 5, 2) . substr($date, 8, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'JPY');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="ja"');

// charset for web pages and emails
  define('CHARSET', 'EUC-JP');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'requests since');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','���եȷ�');
  define('TEXT_GV_NAMES','���եȷ�');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','��������������');

// text for gender
  define('MALE', '����');
  define('FEMALE', '����');
  define('MALE_ADDRESS', '����');
  define('FEMALE_ADDRESS', '����');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'yyyy/mm/dd');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[more]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', '���ƥ���');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', '�᡼����');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', '���徦��');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', '���徦��...');

  define('BOX_HEADING_FEATURED_PRODUCTS', '��������');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', '�������ᾦ��...');
  define('TEXT_NO_FEATURED_PRODUCTS', '�������ᾦ�ʤϤޤ�ʤ���Ͽ����ޤ��Τǡ��ޤ���ۤɤ�������������');

  define('TEXT_NO_ALL_PRODUCTS', '���ʤϤޤ�ʤ���Ͽ����ޤ��Τǡ��ޤ���ۤɤ�������������');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', '������...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', '���ʸ���');
  define('BOX_SEARCH_ADVANCED_SEARCH', '�ܺٸ���');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', '�ò�����');
  define('CATEGORIES_BOX_HEADING_SPECIALS','�ò����� ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', '��ӥ塼');
  define('BOX_REVIEWS_WRITE_REVIEW', '���ξ��ʤΥ�ӥ塼���');
  define('BOX_REVIEWS_NO_REVIEWS', '���ʤΥ�ӥ塼�Ϥޤ�����ޤ���');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s�� / 5������');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', '����åԥ󥰥�����');
  define('BOX_SHOPPING_CART_EMPTY', '�����Ȥ϶��Ǥ�');
  define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;x&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', '�Ƕ�Τ���ʸ');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', '�٥��ȥ��顼');
  define('BOX_HEADING_BESTSELLERS_IN', '�٥��ȥ��顼<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', '���Τ餻�᡼��');
  define('BOX_NOTIFICATIONS_NOTIFY', '<strong>%s</strong>�ˤĤ��ƤΤ��Τ餻�᡼���������');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', '<strong>%s</strong>�ˤĤ��ƤΤ��Τ餻�᡼���������ʤ�');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', '���ʾ���');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Web������');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', '¾�ξ���');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', '����');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', '�̲�');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', '����ե��᡼�����');
  define('BOX_INFORMATION_PRIVACY', '�Ŀ;����ݸ�����');
  define('BOX_INFORMATION_CONDITIONS', '�����ѵ���');
  define('BOX_INFORMATION_SHIPPING', '���������ʤˤĤ���');
  define('BOX_INFORMATION_CONTACT', '���䤤��碌');
  define('BOX_BBINDEX', '�ե������');
  define('BOX_INFORMATION_UNSUBSCRIBE', '�˥塼���쥿����Ͽ���');

  define('BOX_INFORMATION_SITE_MAP', '�����ȥޥå�');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', '�ɲþ���');
  define('BOX_INFORMATION_PAGE_2', '�ڡ���2');
  define('BOX_INFORMATION_PAGE_3', '�ڡ���3');
  define('BOX_INFORMATION_PAGE_4', '�ڡ���4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'ͧã���Τ餻��');
  define('BOX_TELL_A_FRIEND_TEXT', '���ξ��ʤ�ͧã���Τ餻��');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', '�����å���ꥹ��');
  define('BOX_WISHLIST_EMPTY', '�����å���ꥹ�Ȥ˲�����Ͽ����Ƥ��ޤ���');
  define('IMAGE_BUTTON_ADD_WISHLIST', '�����å���ꥹ�Ȥ˲ä���');
  define('TEXT_WISHLIST_COUNT', '���ߥ����å���ꥹ�Ȥ˾��ʤ� %s ����Ͽ����Ƥ��ޤ���');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', '<strong>%d</strong>���� <strong>%d</strong>�ޤǤ�ɽ�����Ƥ��ޤ� (�����å���ꥹ�Ȥο�:<strong>%d</strong>)');

//New billing address text
  define('SET_AS_PRIMARY' , 'ɸ���������Ȥ�������');
  define('NEW_ADDRESS_TITLE', '�����轻��');

// javascript messages
  define('JS_ERROR', '�ե�����ν�����˥��顼��ȯ�����ޤ�����\n\n���ι��ܤ��������Ƥ�������:\n\n');

  define('JS_REVIEW_TEXT', '* ��ӥ塼��ʸ�Ϥ�û�����ޤ�������' . REVIEW_TEXT_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ���������');
  define('JS_REVIEW_RATING', '* ���ʤ�ɾ�������򤷤Ƥ���������');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* ����ʧ����ˡ�����򤷤Ƥ���������');

  define('JS_ERROR_SUBMITTED', '���ϥե�����ϴ�����������Ƥ��ޤ���OK �ܥ���򥯥�å����ƽ�������λ����ޤǤ��Ԥ�����������');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '����ʧ����ˡ�����򤷤Ƥ���������');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '�����ѵ����Ʊ�դ������ϥ����å��ܥå����򥯥�å����Ƥ���������');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '�Ŀ;����ݸ����ˤ�Ʊ�դ������ϥ����å��ܥå����򥯥�å����Ƥ���������');

  define('CATEGORY_COMPANY', '���̾�ʲ�ҤǤ����Ѥξ���');
  define('CATEGORY_PERSONAL', '�Ŀ;���');
  define('CATEGORY_ADDRESS', '����');
  define('CATEGORY_CONTACT', 'Ϣ����');
  define('CATEGORY_OPTIONS', '���ץ����');
  define('CATEGORY_PASSWORD', '�ѥ����');
  define('CATEGORY_LOGIN', '������');
  define('PULL_DOWN_DEFAULT', '��̾�����򤷤Ƥ�������');

  define('ENTRY_COMPANY', '���̾������:');
  define('ENTRY_COMPANY_ERROR', '');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', '����:');
  define('ENTRY_GENDER_ERROR', '���̤����򤷤Ƥ�������');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', '��:');
  define('ENTRY_FIRST_NAME_ERROR', '���Ϻ���' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', '̾:');
  define('ENTRY_LAST_NAME_ERROR', '̾�Ϻ���' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_LAST_NAME_TEXT', '*');
  // ->furikana
  define('ENTRY_FIRST_NAME_KANA', '���դ꤬��:');
  define('ENTRY_FIRST_NAME_KANA_ERROR', '���դ꤬�ʤϺ���' . ENTRY_FIRST_NAME_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_FIRST_NAME_KANA_TEXT', '*');
  define('ENTRY_LAST_NAME_KANA', '̾�դ꤬��:');
  define('ENTRY_LAST_NAME_KANA_ERROR', '̾�դ꤬�ʤϺ���' . ENTRY_LAST_NAME_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_LAST_NAME_KANA_TEXT', '*');
  // <-furikana
  define('ENTRY_DATE_OF_BIRTH', '������:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '��������[1970/05/21](����/��/��)�ν񼰤����Ϥ��Ƥ���������');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (������ 1970/05/21)');
  define('ENTRY_EMAIL_ADDRESS', 'E�᡼�륢�ɥ쥹:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'E�᡼�륢�ɥ쥹��Ⱦ�Ѥ�' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '�᡼�륢�ɥ쥹�����������Ϥ���Ƥ��ʤ��褦�Ǥ���');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '���Υ᡼�륢�ɥ쥹�Ϥ��Ǥ���Ͽ����Ƥ��ޤ������Υ᡼�륢�ɥ쥹�ǥ����󤵤�뤫���㤦���ɥ쥹�ǥ�������Ȥ���Ͽ���Ƥ���������');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', '�ե������˥å��͡���:');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', '���Υ˥å��͡���Ϥ��Ǥ˻Ȥ��Ƥ��ޤ�');
  define('ENTRY_NICK_LENGTH_ERROR', '�˥å��͡���Ϻ���' . ENTRY_NICK_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_STREET_ADDRESS', '���� �ޥ󥷥�󡦥��ѡ���̾:');
  define('ENTRY_STREET_ADDRESS_ERROR', '���� �ޥ󥷥�󡦥��ѡ���̾�Ϻ���' . ENTRY_STREET_ADDRESS_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', '����2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', '͹���ֹ�:');
  define('ENTRY_POST_CODE_ERROR', '͹���ֹ�Ϻ���' . ENTRY_POSTCODE_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', '��Į¼��:');
  define('ENTRY_CUSTOMERS_REFERRAL', '�Ȳ񥳡���:');

  define('ENTRY_CITY_ERROR', '��Į¼��̾�Ϻ���' . ENTRY_CITY_MIN_LENGTH . ' ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', '��ƻ�ܸ�:');
  define('ENTRY_STATE_ERROR', '��ƻ�ܸ�̾�Ϻ���' . ENTRY_STATE_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_STATE_ERROR_SELECT', '�ץ�������˥塼������ƻ�ܸ������򤷤Ƥ�������');
  define('ENTRY_STATE_TEXT', '*');
  define('ENTRY_COUNTRY', '��̾:');
  define('ENTRY_COUNTRY_ERROR', '�ץ�������˥塼�����̾�����򤷤Ƥ�������');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', '�����ֹ�:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '�����ֹ�Ϻ���' . ENTRY_TELEPHONE_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', '�ե��å����ֹ�:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', '�˥塼���쥿������ɤ���');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', '����');
  define('ENTRY_NEWSLETTER_NO', '���ɲ��');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', '�ѥ����:');
  define('ENTRY_PASSWORD_ERROR', '�ѥ���ɤϺ���' . ENTRY_PASSWORD_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '�ѥ���ɤγ�ǧ���Ʊ���ѥ���ɤ�����Ϥ��Ƥ�������');
  define('ENTRY_PASSWORD_TEXT', '* (Ⱦ�ѱѿ����Ǻ���' . ENTRY_PASSWORD_MIN_LENGTH . 'ʸ���ʾ�)');
  define('ENTRY_PASSWORD_CONFIRMATION', '�ѥ���ɤγ�ǧ:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', '���ߤΥѥ����:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '�ѥ���ɤ�Ⱦ�ѱѿ����Ǻ���' . ENTRY_PASSWORD_MIN_LENGTH . ' ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_PASSWORD_NEW', '�������ѥ����:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '�������ѥ���ɤ�Ⱦ�ѱѿ�����' . ENTRY_PASSWORD_MIN_LENGTH . 'ʸ���ʾ����Ϥ��Ƥ�������');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '�ѥ���ɤγ�ǧ��Ͽ������ѥ���ɤ�����Ϥ��Ƥ�������');
  define('PASSWORD_HIDDEN', '--ɽ������ޤ���--');

  define('FORM_REQUIRED_INFORMATION', '* ɬ�ܹ���');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '<strong>%d</strong>����<strong>%d</strong> ��ɽ���� (���ʤο�: <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '<strong>%d</strong>����<strong>%d</strong> ��ɽ���� (����ʸ��: <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '<strong>%d</strong>����<strong>%d</strong> ��ɽ���� (��ӥ塼��: <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '<strong>%d</strong>����<strong>%d</strong> ��ɽ���� (���徦�ʤο�: <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '<strong>%d</strong>����<strong>%d</strong> ��ɽ���� (�ò����ʤο�: <strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', '<strong>%d</strong>����<strong>%d</strong>��ɽ���� (�������ᾦ�ʤο�:<strong>%d</strong>)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', '<strong>%d</strong>����<strong>%d</strong>��ɽ���� (�����ʤο�:<strong>%d</strong>)');

define('PREVNEXT_TITLE_FIRST_PAGE', '�ǽ�Υڡ���');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', '���Υڡ���');
define('PREVNEXT_TITLE_NEXT_PAGE', '���Υڡ���');
define('PREVNEXT_TITLE_LAST_PAGE', '�Ǹ�Υڡ���');
define('PREVNEXT_TITLE_PAGE_NO', '%d�ڡ���');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '����%d�ڡ���');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '����%d�ڡ���');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;�ǽ�');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;����]');
define('PREVNEXT_BUTTON_NEXT', '[����&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', '�Ǹ�&gt;&gt;');

define('TEXT_BASE_PRICE','�١�������: ');

define('TEXT_CLICK_TO_ENLARGE', '����ɽ��');

  define('TEXT_SORT_PRODUCTS', '���ʤ��¤��ؤ� ');
  define('TEXT_DESCENDINGLY', '�߽�');
  define('TEXT_ASCENDINGLY', '����');
  define('TEXT_BY', ' by ');

define('TEXT_REVIEW_BY', '���: %s��');
define('TEXT_REVIEW_WORD_COUNT', '%s��');
define('TEXT_REVIEW_RATING', 'ɾ��: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', '��Ͽ��: %s');
define('TEXT_NO_REVIEWS', '���ʤΥ�ӥ塼�Ϥޤ�����ޤ���');

  define('TEXT_NO_NEW_PRODUCTS', '���徦�ʤϤޤ�ʤ���Ͽ����ޤ��Τǡ��ޤ���ۤɤ�������������');

  define('TEXT_UNKNOWN_TAX_RATE', '��Ψ����');

  define('TEXT_REQUIRED', '<span class="errorText">ɬ��</span>');

  define('TEXT_TIME_SPECIFY','���Ϥ�������');

  define('WARNING_REGISTER_GLOBALS_ON', '��������Υ����С���register_globals��On�Ǳ��Ѥ���Ƥ��ޤ���<br/>register_globals�ϥ������ƥ�����������������������ǽ�������뤿�ᡢZen Cart�ϡ�register_globals�������Off�ˤ��ʤ����ư��ޤ���<br/>Zen Cart�Υ��󥹥ȡ���ǥ��쥯�ȥ��.htaccess�ե����뤬���������åץ��ɤ���Ƥ���Τˤ��Υ�å�������ɽ������Ƥ����硢��������Υ����С��Ǥ�.htaccess��register_globals��������ѹ��Ǥ��ʤ����Ȥ��̣���Ƥ��ޤ���<br/>����������褹�뤿��ˤϡ����Τ���2�ĤΤɤ��餫���б���ɬ�פǤ���<br/><br/><br/>1. �����С���������ѹ�����<br/>2. register_globals��Off�Ǳ��Ѳ�ǽ�ʥ����С��˺ƥ��󥹥ȡ��뤹��');
  $warn_path = (isset($_SERVER['SCRIPT_FILENAME']) ? @dirname($_SERVER['SCRIPT_FILENAME']) : '.....');
  define('WARNING_INSTALL_DIRECTORY_EXISTS', '�ٹ�: ���󥹥ȡ���ǥ��쥯�ȥ꤬���Τޤ޻ĤäƤ��ޤ� : ' . $warn_path . '/zc_install. �������ƥ�����ʤΤǤ��Υǥ��쥯�ȥ�������Ƥ���������');
  define('WARNING_CONFIG_FILE_WRITEABLE', '�ٹ�: ����ե����뤬�񤭹��߲�ǽ�ˤʤäƤ��ޤ� : ' . $warn_path . '/includes/configure.php. �������ƥ�����ʤΤǡ����Υե�������������桼�������¤����ꤷ�Ʋ�������');
  unset($warn_path);
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', '�ٹ�: ���å������¸�ǥ��쥯�ȥ꤬¸�ߤ��ޤ��� : ' . zen_session_save_path() . '. ���Υǥ��쥯�ȥ꤬�����ޤǥ��å����ǽ��ư��ޤ���');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', '�ٹ�: ���å������¸�ǥ��쥯�ȥ�˽񤭹��ߤǤ��ޤ���: ' . zen_session_save_path() . '. ���������������������ꤵ���ޤǥ��å����ǽ��ư��ޤ���');
  define('WARNING_SESSION_AUTO_START', '�ٹ�: session.auto_start ��ͭ���ˤʤäƤ��ޤ� - ����php��ǽ��php.ini��̵���ˤ���Web�����Ф�Ƶ�ư���Ƥ���������');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', '�ٹ�: ��������ɾ��ʥǥ��쥯�ȥ꤬¸�ߤ��ޤ���: ' . DIR_FS_DOWNLOAD . '. ���Υǥ��쥯�ȥ꤬ͭ���ˤʤ�ޤǥ�������ɾ��ʵ�ǽ��ư��ޤ���');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', '�ٹ�: SQL����å���ǥ��쥯�ȥ꤬¸�ߤ��ޤ���: ' . DIR_FS_SQL_CACHE . '. ���Υǥ��쥯�ȥ꤬�����ޤ�SQL����å��嵡ǽ��ư��ޤ���');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', '�ٹ�: SQL����å���ǥ��쥯�ȥ�˽񤭹��ߤǤ��ޤ���: ' . DIR_FS_SQL_CACHE . '. ���������������������ꤵ���ޤ�SQL����å��嵡ǽ��ư��ޤ���');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', '���Ȥ��Υǡ����١�����Patch Level��夲��ɬ�פ�����褦�Ǥ�����������->�ɲ����ꡦ�ġ���->�����С�����Υ����å� ��patch level���ǧ���Ƥ���������');


  define('TEXT_CCVAL_ERROR_INVALID_DATE', '���Ϥ��줿���쥸�åȥ����ɤ�ͭ�����¤�̵���Ǥ�������ǧ�ξ�⤦�������Ϥ��Ƥ���������');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '���Ϥ��줿���쥸�åȥ����ɤΥ������ֹ��̵���Ǥ�������ǧ�ξ�⤦�������Ϥ��Ƥ���������');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '�������ֹ�κǽ�Σ���: %s ���ְ㤤�Ǥʤ���С�������åפǤϤ��Υ����ɤΤ���갷�����Ǥ��ޤ����ֹ椬�ְ�äƤ���褦�Ǥ�����⤦�������Ϥ��Ƥ���������');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', '��������ݥ�');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' �褯�������');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' �Ĺ� ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . '���������');
  define('GV_FAQ', TEXT_GV_NAME . ' �褯�������');
  define('ERROR_REDEEMED_AMOUNT', '�����������������ޤ���');
  define('ERROR_NO_REDEEM_CODE', '' . TEXT_GV_REDEEM . '�����Ϥ���Ƥ��ޤ���');
  define('ERROR_NO_INVALID_REDEEM_GV', '̵����' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '�Ǥ�');
  define('TABLE_HEADING_CREDIT', '�����Ѳ�ǽ�ʥ��쥸�åȥ�����');
define('GV_HAS_VOUCHERA', '�����ͤ�' . TEXT_GV_NAME . '��������Ȥ˻Ĺ⤬����ޤ�������˾�Ǥ����� <br />

                           ���λĹ������ <a class="pageResults" href="');
define('GV_HAS_VOUCHERB', '"><strong>E�᡼��</strong></a>������');
define('ENTRY_AMOUNT_CHECK_ERROR', '���ζ�ۤ�����ˤϻĹ⤬��­���Ƥ��ޤ�');
define('BOX_SEND_TO_FRIEND', ' ' . TEXT_GV_NAME . '��£��');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . '����������ޤ�����');
  define('CART_COUPON', '�����ݥ� :');
  define('CART_COUPON_INFO', '����˾ܤ���');
  define('TEXT_SEND_OR_SPEND','�����ͤ�' . TEXT_GV_NAME . '��������Ȥ˻Ĺ⤬����ޤ��� ���Ȥ������������Ȥ⡢�ɤʤ��������뤳�Ȥ�Ǥ��ޤ���������ϲ����Υܥ���򥯥�å����Ƥ���������');
  define('TEXT_BALANCE_IS', '�����ͤ�' . TEXT_GV_NAME . '�Ĺ�: ');
  define('TEXT_AVAILABLE_BALANCE', '�����ͤ�' . TEXT_GV_NAME . '���������');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', '���եȷ�/�����ݥ�');
  define('PAYMENT_MODULE_GV', 'GV/DC');

  define('TABLE_HEADING_CREDIT_PAYMENT', '�����Ѳ�ǽ�ʥ��쥸�åȥ�����');

  define('TEXT_INVALID_REDEEM_COUPON', '̵���ʥ����ݥ󥳡��ɤǤ�');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', '���Υ����ݥ�� %s �߰ʾ�Τ��㤤ʪ�Ǥ����Ѥ��������ޤ�');
  define('TEXT_INVALID_STARTDATE_COUPON', '���Υ����ݥ�Ϥޤ����Ȥ����������ޤ���');
  define('TEXT_INVALID_FINISDATE_COUPON', '���Υ����ݥ��ͭ�����¤��ڤ�Ƥ��ޤ�');
  define('TEXT_INVALID_USES_COUPON', '���Υ����ݥ�����ƤΤ����ͤΤ����Ѳ���ι�פǺ��� ');
  define('TIMES', '�� �ޤǤΤ����ѤˤʤäƤ���ޤ���');
  define('TIME', ' �� �ޤǤΤ����ѤˤʤäƤ���ޤ���');
  define('TEXT_INVALID_USES_USER_COUPON', '�����ݥ󥳡���: %s �ϴ��˺�����Ѳ����ã���Ƥ��ޤ������Υ����ݥ�Ϥ����ͤ��Ȥ˺��� ');
  define('REDEEMED_COUPON', '����� ');
  define('REDEEMED_MIN_ORDER', '�߰ʾ�Τ���ʸ');
  define('REDEEMED_RESTRICTIONS', ' [���ʥ��ƥ��꤬���ꤵ��ޤ�]');
  define('TEXT_ERROR', '���顼��������ޤ���');
  define('TEXT_INVALID_COUPON_PRODUCT', '���ߥ����Ȥ����äƤ��뾦�ʤǤ��Υ����ݥ󥳡��ɤ򤪻Ȥ������������Τ�����ޤ���');
  define('TEXT_VALID_COUPON', '��������ݥ����������ޤ���');

// more info in place of buy now
  define('MORE_INFO_TEXT','...�ܺ�');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','IP���ɥ쥹: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','���ɥ쥹����');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','��������ο���: ');
  define('PRODUCTS_ORDER_QTY_TEXT','�����Ȥ������: ');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', '�ĸ�');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','���:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%OFF');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;OFF');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','�ò�:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','���ݥ󥵡�');
  define('TEXT_BANNER_BOX','������åפΥ��ݥ󥵡��ˤ⤪Ω����꤯��������');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','��¸���Ǥ���?');
  define('TEXT_BANNER_BOX2','��������å����Ƥ�������!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','���ݥ󥵡�');
  define('TEXT_BANNER_BOX_ALL','������åפΥ��ݥ󥵡��ˤ⤪Ω����꤯��������');

// boxes defines
  define('PULL_DOWN_ALL','���򤷤Ƥ�������');
  define('PULL_DOWN_MANUFACTURERS','- �ꥻ�å� -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', '���򤷤Ƥ�������');

// general Sort By
  define('TEXT_INFO_SORT_BY','ɽ����: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - ������ɥ����Ĥ���');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ ������ɥ����Ĥ��� ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', '���顼: ���Υե����륿���פϵ��Ĥ���Ƥ��ޤ���');
  define('WARNING_NO_FILE_UPLOADED', '�ٹ�:  ���⥢�åץ��ɤ���Ƥ��ޤ���');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '����:  �ե����뤬��¸����ޤ���');
  define('ERROR_FILE_NOT_SAVED', '���顼:  �ե����뤬��¸����Ƥ��ޤ���');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '���顼:  ��¸�ǥ��쥯�ȥ꤬�񤭹��߲�ǽ�ˤʤäƤ��ޤ���');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '���顼: ��¸�ǥ��쥯�ȥ꤬¸�ߤ��ޤ���');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', '���Τ餻: ���ƥʥ󥹺�ȤΤ���ޤ�ʤ������Ȥ�ٻߤ������ޤ�����ͽ��������');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', '���Τ餻: �������ޥ��ƥʥ󥹺�ȤΤ��᥵���Ȥ�ٻߤ��Ƥ��ޤ���');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','̵���Ǥ�!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','���ʤ��䤤��碌');
  define('TEXT_CALL_FOR_PRICE','���ʤ��䤤��碌����');

  define('TEXT_INVALID_SELECTION',' �����̵���Ǥ���:  ');
  define('TEXT_ERROR_OPTION_FOR',' ���ץ����: ');
  define('TEXT_INVALID_USER_INPUT', '���Ϥ��Ƥ�������<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','�Ǿ�:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','����ñ��:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','�����Ȥ�����:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','�ɲä���:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','����:');

  define('TEXT_PRODUCTS_MIX_OFF','*���ץ����ʣ���Բ�');
  define('TEXT_PRODUCTS_MIX_ON','���ץ����ʣ���');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','*ñ���⥪�ץ����ʣ���Բ�<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*ñ���⥪�ץ����ʣ���<br />');

  define('ERROR_MAXIMUM_QTY','���̤��ѹ����ޤ��� - ���٤ˤ���ᤤ�������������������Ȥ����äƤ��ޤ� ');
  define('ERROR_CORRECTIONS_HEADING','������������Ƥ�������: <br />');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','���:����ʧ������λ����ޤǾ��ʤΥ�������ɤϤǤ��ޤ���');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','����̾: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />�����ˤ����ξ��ʤϸ��߼�갷�äƤ���ޤ���<br />����åԥ󥰥����Ȥ�����������Ƥ��������ޤ�����');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ... �Ǿ��Ŀ����顼 - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... ����ñ�̥��顼 - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... ̵���ʥ��ץ�������򤵤�Ƥ��ޤ� ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> ����ʸ����: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... ����Ŀ����顼 - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... �Ǿ��Ŀ����顼 - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... ����ñ�̥��顼 - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... ����Ŀ����顼 - ');

  define('TABLE_HEADING_FEATURED_PRODUCTS','�������ᾦ��');

  define('TABLE_HEADING_NEW_PRODUCTS', '%s�ο��徦��');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', '����ͽ�꾦��');
  define('TABLE_HEADING_DATE_EXPECTED', 'ͽ����');
  define('TABLE_HEADING_SPECIALS_INDEX', '%s: ������ò���');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','̵��!');

// customer login
  define('TEXT_SHOWCASE_ONLY','���䤤��碌');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','���ʤϥ������');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','���ʤ����ˤʤ�ˤϥ����󤷤Ƥ�������');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); 
// blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','�����Τ�');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', '���ʤϥ������');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', '��ǧ��³����');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','������');

// text pricing
  define('TEXT_CHARGES_WORD','��ۤη׻����:');
  define('TEXT_PER_WORD','<br />1�Ĥθ��ˤĤ�: ');
  define('TEXT_WORDS_FREE',' ̵����� ');
  define('TEXT_CHARGES_LETTERS','��ۤη׻����:');
  define('TEXT_PER_LETTER','<br />1ʸ���ˤĤ�: ');
  define('TEXT_LETTERS_FREE',' ̵��ʸ����');
  define('TEXT_ONETIME_CHARGES','*������ = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"?t" . '*������ = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', '�����Ͱ�');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','����');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','���');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '���ܿ����Ͱ�');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' ����ʸ����');
  define('TEXT_REMAINING','�Ĥ�');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', '�����׻�');
  define('CART_SHIPPING_OPTIONS_LOGIN', '������ɽ������ˤ�<a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">������</span></a>���Ƥ�������');
  define('CART_SHIPPING_METHOD_TEXT', '������ˡ');
  define('CART_SHIPPING_METHOD_RATES', '����');
  define('CART_SHIPPING_METHOD_TO','������: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', '������: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">������</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','������̵��');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- ���������');
  define('CART_SHIPPING_METHOD_RECALCULATE','�Ʒ׻�');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','������:');
  define('CART_OT','��׶�ۤ����Ѥ��:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','�����Ȥ����: ');
  define('CART_SELECT','����');
  define('ERROR_CART_UPDATE', '����ʸ���Ƥ򹹿����Ƥ������� ...<br />');
  define('IMAGE_BUTTON_UPDATE_CART', '�����Ȥ����Ƥ򹹿�');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', '�ɲ�: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', '�ɲ�: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', '�ɲ�: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', '�ɲ�: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', '���̳������');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', '���̳��Ŭ�Ѹ����');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', '���̳������');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* �����ɽ�����ץ����ˤ��ۤʤ�ޤ�');
  define('TEXT_HEADER_DISCOUNTS_OFF', '���̳���Ϥ����Ѥ��������ޤ���...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- �ꥻ�å� - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', '����̾');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', '����̾ - �߽�');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', '���� - �����');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', '���� - �����');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', '��ǥ�');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', '��Ͽ�� - ������');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', '��Ͽ�� - �����');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', '�����ɽ��');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', '���ͭ������');
  define('TABLE_HEADING_DOWNLOAD_COUNT', '�Ĥ�');
  define('HEADING_DOWNLOAD', '�ե�������������ɤ���ˤϥ�������ɥܥ���򲡤��ƥݥåץ��åץ�˥塼����֥ǥ���������¸�פ����򤷤Ƥ���������');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','�ե�����̾');
  define('TABLE_HEADING_PRODUCT_NAME','��̾');
  define('TABLE_HEADING_BYTE_SIZE','�ե����륵����');
  define('TEXT_DOWNLOADS_UNLIMITED', '̵����');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', '����.');
  define('TABLE_HEADING_PRODUCTS', '��̾');
  define('TABLE_HEADING_TOTAL', '���');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', '�Ŀ;����ݸ�����');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '���ҤθĿ;����ݸ����ˤ�Ʊ�դ������ϥ����å��ܥå����򥯥�å����Ƥ����������Ŀ;����ݸ����ˤ�<a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">������</span></a>��');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '�Ŀ;����ݸ����ˤ�Ʊ�դ��ޤ�');
  define('TABLE_HEADING_ADDRESS_DETAILS', '����');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Ϣ����');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'ǯ��γ�ǧ');
  define('TABLE_HEADING_LOGIN_DETAILS', '������');
  define('TABLE_HEADING_REFERRAL_DETAILS', '�Ҳ�Ǥ���?');

  define('ENTRY_EMAIL_PREFERENCE','�˥塼���쥿�������E�᡼��ˤĤ���');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML����');
  define('ENTRY_EMAIL_TEXT_DISPLAY','�ƥ����ȷ���');
  define('EMAIL_SEND_FAILED','���顼: E�᡼��������˼��Ԥ��ޤ���������: "%s" <%s> ��̾: "%s"');

  define('DB_ERROR_NOT_CONNECTED', '���顼 - �ǡ����١�������³�Ǥ��ޤ���');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '�ٹ�: EZ-PAGES �إå��� - ������IP������ɽ��');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '�ٹ�: EZ-PAGES �եå��� - ������IP������ɽ��');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '�ٹ�: EZ-PAGES �����ɥܥå��� - ������IP������ɽ��');


///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
?>
