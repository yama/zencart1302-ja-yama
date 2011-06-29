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
//  $Id: options_values_manager.php 1148 2005-04-07 19:24:10Z drbyte $
//

define('HEADING_TITLE_OPT', '���ʥ��ץ�����ͤδ���');
define('HEADING_TITLE_VAL', '���ʥ��ץ�����ͤδ���');
define('HEADING_TITLE_ATRIB', '����°��');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '����̾');
define('TABLE_HEADING_OPT_NAME', '���ץ����̾');
define('TABLE_HEADING_OPT_VALUE', '���ץ������');
define('TABLE_HEADING_OPT_PRICE', '����');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '��Ƭ��(Prefix)');
define('TABLE_HEADING_ACTION', '���');
define('TABLE_HEADING_DOWNLOAD', '��������ɾ���:');
define('TABLE_TEXT_FILENAME', '�ե�����̾:');
define('TABLE_TEXT_MAX_DAYS', '��������ɴ���:');
define('TABLE_TEXT_MAX_COUNT', '�ǹ��������ɲ��:');

define('TEXT_WARNING_OF_DELETE', '���Υ��ץ����˥�󥯤��줿���ʡ����ץ�����������ޤ����������ȥ��顼���Ф��ǽ��������ޤ���');
define('TEXT_OK_TO_DELETE', '���Υ��ץ����˥�󥯤��줿���ʡ����Ϥ���ޤ��󡣺����ǽ�Ǥ���');
define('TEXT_OPTION_ID', '���ץ����ID');
define('TEXT_OPTION_NAME', '���ץ����̾');
define('TABLE_HEADING_OPT_DISCOUNTED','�ǥ����������');

define('ATTRIBUTE_WARNING_DUPLICATE','°����ʣ�� - °�����ɲä���ޤ���Ǥ�����'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','°����ʣ����¸�ߤ��ޤ� - °�����ѹ�����ޤ���Ǥ�����'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','°�����ץ����ȥ��ץ�����ͤ����פ��ޤ��� - °�����ɲä���ޤ���Ǥ�����'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','°�����ץ����ȥ��ץ�����ͤ����פ��ޤ��� - °�����ɲä���ޤ���Ǥ�����'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','��ǽ��ʣ�����ץ����̾���ɲä���ޤ���(Possible Duplicate Options Name Added)��'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','��ǽ��ʣ�����ץ�����ͤ��ɲä���ޤ���(Possible Duplicate Options Value Added)��'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','�Խ�'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','���'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','������°�����ɲ�'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTE: ��������ɵ�ǽ����');

define('TABLE_TEXT_MAX_DAYS_SHORT', '��������ɴ���:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '��������ɲ�ǽ���:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','�����Ƚ�');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','�ǥե���Ƚ�');
  define('TEXT_SORT',' Order: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','��Ƭ��(Prefix)');
  define('TABLE_HEADING_OPT_WEIGHT','����');
  define('TABLE_HEADING_OPT_SORT_ORDER','�����Ƚ�');
  define('TABLE_HEADING_OPT_DEFAULT','�ǥե����');

  define('TABLE_HEADING_YES','�Ϥ�');
  define('TABLE_HEADING_NO','������');

  define('TABLE_HEADING_OPT_TYPE', '���ץ����Υ�����'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','������');
  define('TABLE_HEADING_OPTION_VALUE_MAX','�ǹ�');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','��');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','������');

  define('TEXT_OPTION_VALUE_COMMENTS','������: ');
  define('TEXT_OPTION_VALUE_SIZE','ɽ��������: ');
  define('TEXT_OPTION_VALUE_MAX','��Ĺ: ');

  define('TEXT_ATTRIBUTES_IMAGE','°���β�������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','°���β����ǥ��쥯�ȥ�:');

  define('TEXT_ATTRIBUTES_FLAGS','°��<br />�ե饰:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '������Ū<br />ɽ���Τ�:');
  define('TEXT_ATTRIBUTES_IS_FREE', '°����̵��<br />���ʤ�̵���κݤ�:');
  define('TEXT_ATTRIBUTES_DEFAULT', '�ǥե����°��<br />�ޡ��������򤵤�Ƥ�����:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Ʊ���ǥ���������Ȥ�Ŭ��<br />���ʤ˻���:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�١������ʤ˴ޤ�<br />°���ˤ�äƲ��ʷ���ξ��');

  define('TEXT_PRODUCT_OPTIONS_INFO','���ʥ��ץ������ɲ�����');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>���ץ����̾���ͤ�...�ξ��ʤ����ƥ��ԡ�����</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '���ʤ˸�����Ͽ����Ƥ��륪�ץ����̾���ͤ����򤷤Ƥ����������⤷����¸�ߤ��륪�ץ����̾�����ͤ��顢�����ʥ��ץ����̾���ͤ򥳥ԡ����������ʤ����򤷤Ƥ���������');
  define('TEXT_SELECT_OPTION_FROM', 'Ŭ�礹�륪�ץ����̾:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Ŭ�礹�륪�ץ������:');
  define('TEXT_SELECT_OPTION_TO', '�ɲä��륪�ץ����̾:');
  define('TEXT_SELECT_OPTION_VALUES_TO', '�ɲä��륪�ץ������:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', '����ˤ��Ƥ��������������������ʤΥ��ƥ��꡼ID�����Ϥ��Ƥ�������');//Leave blank for ALL Products or<br />enter a Category ID for Products to update

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>��¸�Υ��ץ����̾���饪�ץ����̾���ͤ��ʤ˥��ԡ�����</strong>');//<strong>Copy Option Name/Value to Products with existing Option Name ...</strong>
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', '���ʤ˸�����Ͽ����Ƥ��륪�ץ����̾���ͤ����򤷤Ƥ���������
�⤷�������򤵤줿���ƥ��꡼��ˤ��롢��˾���륪�ץ����̾����ä����ʤ����򤷤Ƥ�������<br />
<strong>��:</strong>���ץ����̾�ɲ�:����Option��:�֤����Ƥ�Ŭ�ѡ����ץ����̾:Size
<strong>��:</strong>���ץ����̾�ɲ�:ProductID��34��value�ͤ���ľ��ʤο���option��:��
<strong>��:</strong>���ץ����̾�ɲ�:ProductID��34��value�ͤ���ľ��ʤο���option��:��CategoryID�Υ�����:65
        ');

  define('TEXT_SELECT_OPTION_TO_ADD_TO', '�ɲä�����Υ��ץ����̾:');
  define('TEXT_SELECT_OPTION_FROM_ADD', '�ɲä��륪�ץ����̾:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', '�ɲä��륪�ץ������:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'ProductID #�ν�����ȥ�ӥ塼���ͤ⤷���Ͻ���ͤ��ʤ����϶���:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��¸�ξ��ʥ��ȥ�ӥ塼�ȤϤɤΤ褦�ˤ��ޤ���?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>���</strong> ��˺�����Ƥ��顢���������ȥ�ӥ塼�Ȥ��դ��Ƥ���������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>����</strong> ����������Ȳ��ʤǴ�¸�Υ��ȥ�ӥ塼�Ȥ򹹿����롣');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>̵��</strong> ��¸�Υ��ȥ�ӥ塼�Ȥ�̵�뤷�����������ȥ�ӥ塼�ȤΤߤ��ɲä���');

  define('TEXT_INFO_FROM', ' ����: ');
  define('TEXT_INFO_TO', ' ��: ');
  define('ERROR_OPTION_VALUES_COPIED', '���顼: ̵���ʥ��ץ����̾�ȥ��ץ�����ͤǤ�');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', '���顼: ���򤵤줿���ץ����̾�ȥ��ץ�����ͤ�Ŭ�礷�ޤ���');
  define('ERROR_OPTION_VALUES_NONE', '���顼: ���ԡ������Τ�����ޤ���');
  define('SUCCESS_OPTION_VALUES_COPIED', '���ԡ����������ޤ���! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', '���顼: Products ID#�Υ��ץ����̾�ȥ��ץ�����ͤ������Ƥ��ޤ�');//Missing Option Name/Value for Products ID#

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>���ץ����̾���ͤ�...�Ǥ������Ƥξ��ʤΥ��ȥ�ӥ塼�Ȥ�������</strong>');//Delete Matching Attribute from ALL Products where Option Name and Value ...
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '���ʤ�¸�ߤ��륪�ץ����̾�ȥ��ץ�����ͤ����򤷤Ƥ����������⤷��������ξ��ʥ��ƥ�����椫��õ�������ʤ��������򤷤Ƥ���������');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Ŭ�礹�륪�ץ����̾:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Ŭ�礹�륪�ץ������:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', '���顼: ���򤵤줿���ץ����̾�ȥ��ץ�����ͤ�Ŭ�礷�ޤ���');

  define('SUCCESS_OPTION_VALUES_DELETE', '����l: :�κ�� ');
?>