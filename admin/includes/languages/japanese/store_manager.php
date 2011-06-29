<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: store_manager.php 2634 2005-12-20 06:56:04Z drbyte $
//
//
  define('HEADING_TITLE', '����å״����ġ���');
  define('TABLE_CONFIGURATION_TABLE', 'CONSTANT����򸡺�');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>����</strong>: °���Υ����Ƚ�򹹿����ޤ���');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>����</strong>: ���ʲ��ʤΥ������ͤ򹹿����ޤ�����');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>����</strong>: �־��ʤα��������󥭥󥰡פ�0�˥ꥻ�åȤ��ޤ���');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Successful</strong> ���ʤν��֤򥼥�Υꥻ�å�');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>����</strong>: ��󥯤��줿���ʤΤ���Υޥ��������ƥ����ꥻ�åȤ��ޤ���');
  define('SUCCESS_UPDATE_COUNTER', '<strong>����</strong> �����󥿤�ʲ����ͤ˹������ޤ���: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>�������ޤ���</strong> �����ԤΥ����ƥ��ӥƥ����򹹿����ޤ�');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>���顼:</strong> ���פ������ꥭ��(Configuration Keys)�����Ĥ���ޤ���...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>���顼:</strong> �����Τ�������ꥭ�����ƥ����Ȥ����Ϥ���Ƥ��ޤ��� ... ��������ߤ��ޤ���');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>�����󥿤򹹿�</strong><br />�ʲ��ο������ͤ˹���: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>�����ʤβ��ʥ����Ȥ򹹿�</strong><br />ɽ�����ʤǤΥ����Ȥ��ǽ�ˤ���ˤ�: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>�־��ʤα��������󥭥󥰡פ�ꥻ�å�</strong><br />�־��ʤα��������󥭥󥰤�0�˥ꥻ�å�: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>��ʸ���줿���ʤ�ꥻ�åȤ���</strong><br />��ʸ���줿���ʤΥ�����Ȥ򥼥�ˤ���: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>�����ʤΥޥ��������ƥ���ID��ꥻ�å�</strong><br />��󥯤��줿���ʤȲ��ʤ�ȿ�Ǥ���ˤ�: ');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>�����ԤΥ����ƥ��ӥƥ����ơ��֥��ǡ����١���������<br />�ٹ�: ���ι�����Ԥ����Хå����åפ�ɬ����äƤ�������!</strong><br />�����ԤΥ����ƥ��ӥƥ����ϴ����Ԥγ�ư�����Ͽ������ΤǤ� ���Τ��������礭���ʤ뤿�ᡢ®�䤫�ˤ��줤�ˤ��Ƥ���ɬ�פ�����ޤ���<br />�ٹ��60����50000��ۤ�ί�ޤ�ޤ�');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>���ߤΥ�������ID��ꥻ�åȤ���</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '<strong>���: ���ߤΥ�������ID��ꥻ�åȤ������� ...</strong><br />�ǽ�˥ƥ�����ʸ��Ԥ������Υ�������ID�򸵤˿�������������ID����Ƥ���������<br />��������������ID�ϡ����μºݤ���ʸ���˳��Ϥ�������������ID���1���ʤ����ͤ������ޤ�(<strong>��:</strong> ���μºݤΥ�������ID���1225�פ���Ϥ᤿����С�1224�פ�����)��<br /><strong>�ٹ�:</strong> ��������ID�����䤹�����إꥻ�åȤϤǤ��ޤ��������餹�����إꥻ�åȤϤǤ��ޤ���<br />��������ID����١�25�פ˥ꥻ�åȤ������١�20�פ˥ꥻ�åȤ��Ƥ⡢���μºݤΥ�������ID�ϡ�26�פ���ˤʤ�ޤ���');
  define('TEXT_OLD_ORDERS_ID', '�Ť���������ID');
  define('TEXT_NEW_ORDERS_ID', '��������������ID');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>CONSTANT����󥲡�������ե�����򸡺�</strong>');
  define('TEXT_CONFIGURATION_KEY', '�����ޤ���̾��:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>���:</strong> CONSTANTS����ʸ���Ǥ���<br />��󥲡�������ե�����θ����ǥǡ����١����ơ��֥�˲��⸫�Ĥ���ʤ���硢��鸡��(alternative search)�ˤʤ�ޤ���');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>��󥲡�������ե�������򸡺�</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', '�ƥ����Ȥ�õ��:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>���:</strong> ��󥲡�������ե�������θ�������ʸ������ʸ����������ǽ�Ǥ���');

  define('TABLE_TITLE_KEY', '<strong>����:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>�����ȥ�:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>����:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>���롼��:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '��������ե�����θ���:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '- ̤���� -');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '���ƤΥ�󥲡����ե����� ' . strtoupper($_SESSION['language']) . ' - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '�ᥤ�������󥲡����ե����� - ����åץڡ���(Catalog) (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '���������������󥲡����ե����� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '�ᥤ�������󥲡����ե����� - �����ԥڡ���(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '���������������󥲡����ե����� - �����ԥڡ���(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '���������������󥲡����ե����� - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','�Խ��Բ�');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' �⤷�����ԲĻ�');
?>