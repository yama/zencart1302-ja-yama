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
//  $Id: attributes_controller.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', 'CATEGORIES: ');

define('HEADING_TITLE_OPT', '���ʥ��ץ����');
define('HEADING_TITLE_VAL', '���ץ������');
define('HEADING_TITLE_ATRIB', '���ʥ��ץ����°���δ���');
define('HEADING_TITLE_ATRIB_SELECT','���ʥ��ץ����°����ɽ�����뾦�ʤ����򤷤Ƥ���������');

define('TEXT_PRICES_AND_WEIGHTS', '���ʤȽ��̤�����');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', '�ץ饤���ե��������䥪�ե��åȤϡ����ץ������������ɲ�����˼��Τ褦�˺��Ѥ��ޤ���<br/><br/><b>�����ץ����������ι���ñ���ʾ���1���������<br/>���� [���ʲ���] �� [���ץ�������]<br/>������ [�١�������] �ߡ�[�ץ饤���ե�������]��[���ե��å�]��</b><br/><br/>��������[����°���ˤ�����]��[°���ˤ�����������١������ʤ˴ޤ��]��<br/>�ե饰�ξ��֤�[�١�������]���Ѥ�ꡢ2�ե饰�Ȥ�� "�Ϥ�" �ʤ�<br/><br/><b>[�١�������] �� [���ʲ���]��[���ץ�������]</b><br/><br/>�����줫�����뤤��ξ�� "������" �ʤ�<br/><br/><b>[�١�������] �� [���ʲ���]</b><br/><br/>�ˤʤ�ޤ���<br/><br/>�ץ饤���ե�������');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', '���ե��å�');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', '��󥿥����Ͱ����Ͱ����');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', '��󥿥���ץ饤���ե������������ե��åȤϡ����ץ������������ɲ�����˼��Τ褦�˺��Ѥ��ޤ���<br/><br/><b>�����ץ����������ι���ñ���ʾ���1���������<br/>���� [���ʲ���] �� [���ץ�������]</b><br/><br/>����¾�ˡ�1��ʸ�����꤫�������⤬���äơ�����<br/><b>�����ץ������������ɲ������1��ʸ�������<br/>���� [�١�������] �ߡ�[��󥿥���ץ饤���ե�������]��[��󥿥��४�ե��å�]��</b><br/><br/>��������[����°���ˤ�����]��[°���ˤ�����������١������ʤ˴ޤ��]��<br/>�ե饰�ξ��֤�[�١�������]���Ѥ�ꡢ2�ե饰�Ȥ�� "�Ϥ�" �ʤ�<br/><br/><b>[�١�������] �� [���ʲ���]��[���ץ�������]</b><br/><br/>�����줫�����뤤��ξ�� "������" �ʤ�<br/><br/><b>[�١�������] �� [���ʲ���]</b><br/><br/>�ˤʤ�ޤ���<br/><br/>��󥿥���ץ饤���ե�������');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', '��󥿥��४�ե��å�');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', '���ץ����ο����Ͱ�����<br/><br/>��:2:-8,4:-16,N:-20<br/>���ξ�硢���Υ��ץ�������ꤷ�����ʹ����Ŀ���2�ĤޤǤ�8�߰�����<br/>3��4�ĤޤǤ�6�߰�����5�İʾ��20�߰����ˤʤ�ޤ���<br/>�Ǹ���Ͱ������N���ͤ�̵�뤵�졢���ʹ����Ŀ���ľ�����Ͱ�����<br/>�θĿ�(�����Ǥ�4)��+1�İʾ�λ����Ͱ�����Ȥ����Ͱ��ۤ��������Ѥ��ޤ���<br/>N���ͤ�ư���ΰ�̣�Ϥ���ޤ��󤬡����ѤǺ�����򤱤뤿���<br/>ľ�����Ͱ�����θĿ�+1(�����Ǥ�5)����ꤷ�Ƥ���������<br/>�Ͱ��Ͼ��ʣ���ñ�̤˺��Ѥ��ޤ���<br/>-��Ĥ��ʤ���ۻ���򤹤��<br/>�Ͱ��ǤϤʤ��դˤ��ζ�ۤ��û����������ˤʤ�ޤ���<br/>');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', '���ץ����Υ�󥿥�������Ͱ�����<br/><br/>��:2:-8,4:-16,N:-20<br/>���ξ�硢���Υ��ץ�������ꤷ�����ʹ����Ŀ���2�ĤޤǤ�8�߰�����<br/>3��4�ĤޤǤ�6�߰�����5�İʾ��20�߰����ˤʤ�ޤ���<br/>�Ǹ���Ͱ������N���ͤ�̵�뤵�졢���ʹ����Ŀ���ľ�����Ͱ�����<br/>�θĿ�(�����Ǥ�4)��+1�İʾ�λ����Ͱ�����Ȥ����Ͱ��ۤ��������Ѥ��ޤ���<br/>N���ͤ�ư���ΰ�̣�Ϥ���ޤ��󤬡����ѤǺ�����򤱤뤿���<br/>ľ�����Ͱ�����θĿ�+1(�����Ǥ�5)����ꤷ�Ƥ���������<br/>�Ͱ���Ʊ�쾦��Ʊ�쥪�ץ����ι����˰��������Ѥ��ޤ���<br/>-��Ĥ��ʤ���ۻ���򤹤��<br/>�Ͱ��ǤϤʤ��դˤ��ζ�ۤ��û����������ˤʤ�ޤ���<br/>');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'ñ����β���');
//Price Per Word
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '̵���κ���ñ���');
//- Free Words
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'ʸ����β���');
//Price Per Letter
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '̵���κ���ʸ����');
//- Free Letters
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '����̾');
define('TABLE_HEADING_OPT_NAME', '���ץ����̾');
define('TABLE_HEADING_OPT_VALUE', '���ץ������');
define('TABLE_HEADING_OPT_PRICE', '����');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '��');
define('TABLE_HEADING_ACTION', '���');
define('TABLE_HEADING_DOWNLOAD', '��������ɾ���:');
define('TABLE_TEXT_FILENAME', '�ե�����̾:');
define('TABLE_TEXT_MAX_DAYS', 'ͭ������(��):');
define('TABLE_TEXT_MAX_COUNT', '�����������ɿ�:');
define('TABLE_HEADING_OPT_DISCOUNTED','�ǥ����������');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','���ܲ��ʤ˴ޤ�');
define('TABLE_HEADING_PRICE_TOTAL','����Ͱ���<br />��󥿥����Ͱ���');
//Total|Disc: Onetime:
define('TEXT_WARNING_OF_DELETE', '���Υ��ץ����Ͼ��ʤȲ��ʤ˷�ӤĤ��Ƥ��ޤ���- �����ʺ�����Ǥ��ޤ���');
define('TEXT_OK_TO_DELETE', '���Υ��ץ����Ͼ��ʤȲ��ʤ˷�ӤĤ��Ƥ��ޤ���- �����˺���Ǥ��ޤ�');
define('TEXT_OPTION_ID', '���ץ����ID');
define('TEXT_OPTION_NAME', '���ץ����̾');

define('ATTRIBUTE_WARNING_DUPLICATE','���ʥ��ץ����°����ʣ�����ޤ�����- ���ʥ��ץ����°�����ɲä���Ƥ��ޤ���'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','���ʥ��ץ����°����ʣ����¸�ߤ��ޤ��� - ���ʥ��ץ����°�����ѹ�����Ƥ��ޤ���'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','���ʥ��ץ����°���ȥ��ץ�����ͤ����פ��ޤ��� - ���ʥ��ץ����°�����ɲä���ޤ���Ǥ���'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','���ʥ��ץ����°���ȥ��ץ�����ͤ����פ��ޤ��� - ���ʥ��ץ����°�����ѹ�����ޤ���Ǥ���'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','ʣ����ǽ�ʥ��ץ����̾���ɲä���ޤ�����'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','ʣ����ǽ�ʥ��ץ�����ͤ��ɲä���ޤ�����'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','�Խ�'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','���'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','������°�����ɲ�'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTE: �������������������ղäˤʤ�ޤ�����');

define('TABLE_TEXT_MAX_DAYS_SHORT', '��:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '����:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','ɽ���������');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','�ǥե���Ȥ������');
  define('TEXT_SORT',' Order: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','��');
  define('TABLE_HEADING_OPT_WEIGHT','����');
  define('TABLE_HEADING_OPT_SORT_ORDER','�����');
  define('TABLE_HEADING_OPT_DEFAULT','�ǥե����');

  define('TABLE_HEADING_OPT_TYPE', '���ץ���󥿥���'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','������');
  define('TABLE_HEADING_OPTION_VALUE_MAX','����');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','��');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','������');

  define('TEXT_OPTION_VALUE_COMMENTS','������: ');
  define('TEXT_OPTION_VALUE_SIZE','ɽ��������: ');
  define('TEXT_OPTION_VALUE_MAX','�����Ĺ��: ');

  define('TEXT_ATTRIBUTES_IMAGE','���ץ�������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','���ץ�����������¸�ǥ��쥯�ȥ�:');

  define('TEXT_ATTRIBUTES_FLAGS','°��<br />�ե饰');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'ɽ���Τ�');
  define('TEXT_ATTRIBUTES_IS_FREE', '���ʤ�̵�����ʤΤȤ�<br/>°���ˤ����ʤ�̵���ˤ���');
  define('TEXT_ATTRIBUTES_DEFAULT', '�ǥե���Ȥ�<br />���򤵤��');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '°���ˤ����������ˤ��ò�/������γ����Ŭ�Ѥ���');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','°���ˤ�����������١������ʤ˴ޤ��');
  define('TEXT_ATTRIBUTES_REQUIRED','�ƥ��������Ϥ�ɬ�ܤˤ���');

  define('LEGEND_BOX','°���ե饰');
  define('LEGEND_KEYS','OFF/ON');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', '���ȤΤ�');
  define('LEGEND_ATTRIBUTES_IS_FREE', '̵��');
  define('LEGEND_ATTRIBUTES_DEFAULT', '�ǥե����');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', '�Ͱ������줿');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','���ܲ���');
  define('LEGEND_ATTRIBUTES_REQUIRED','�׵����');
  define('LEGEND_ATTRIBUTES_IMAGES','���᡼��');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','ͭ��/��ͭ��<br />�ե�����͡���');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','�ǥե���Ȥ������ˤ���');
  define('TEXT_PRODUCTS_LISTING','ɽ������Ƥ��뾦��: ');
  define('TEXT_NO_PRODUCTS_SELECTED','���ʤ����򤵤�Ƥ��ޤ���');
  define('TEXT_NO_ATTRIBUTES_DEFINED','���ξ��ʤˤ�°�����������Ƥ��ޤ��󡣾���ID��');

  define('TEXT_PRODUCTS_ID','����ID');
  define('TEXT_ATTRIBUTES_DELETE','���ƺ��');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','°�����ʤ˥��ԡ�����');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','°���򥫥ƥ��꡼�˥��ԡ�����');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','°�����ѹ�������ID ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','���ξ��ʤ�<strong>����</strong>��°���������ޤ���:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','°����¾�ξ��ʤ䥫�ƥ��꡼�˥��ԡ����ޤ���:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','����');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','���ʥ��ץ����°����¾��<strong>����</strong>�˥��ԡ����ޤ������ԡ�������ID');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','�����ʥ��ץ����°���Υ��ԡ��辦��:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','���ƥ��꡼');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','���ʥ��ץ����򥳥ԡ����륫�ƥ���:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','<strong>���ƥ��꡼</strong>������Ƥξ��ʤ˾��ʥ��ץ����°���򥳥ԡ����� ���ԡ�������ID');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��¸�ξ��ʥ��ץ����°���ΰ�������ꤷ�ޤ���</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','�ޤ�<strong>���</strong>���Ƥ��顢���������ʥ��ץ����°���򥳥ԡ�����');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','����������/���ʤ�<strong>����</strong>���Ƥ��鿷������Τ��ɲä���');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','���ߤΤ�Τ�<strong>̵��</strong>���ƿ��������ʥ��ץ����°�����ɲä���');

  define('SUCCESS_PRODUCT_UPDATE_SORT','°���������򹹿����ޤ����� ����ID ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','�����򹹿�����°��������ޤ��󡣾���ID ');
  define('SUCCESS_ATTRIBUTES_DELETED','°���������ޤ�����');
  define('SUCCESS_ATTRIBUTES_UPDATE','°���򹹿����ޤ�����');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','���ԡ���Υ��ƥ��꤬���򤵤�Ƥ��ޤ���');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - ���ƥ��꡼: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','���������Ƥ�°���������ޤ�����������ID ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>������°���򥹥��å�</strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>���������ʥ��ץ����°����������</strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>U���ʥ��ץ����°�����鹹��</strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','°���ץ�ӥ塼');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','���ʥ��ץ����°���Υץ�ӥ塼 ID:');
  define('TEXT_PRODUCT_OPTIONS', '<strong>���򤷤Ƥ�������:</strong>');


  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>�����ܥ���򲡤��Ⱦ��ʥ��ץ����°���������������ޤ���</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '���ʥ��ץ����°���ˤ�äƲ����դ����ޤ���');
  define('TEXT_PRODUCTS_PRICE', '���ʲ���: ');
  define('TEXT_SPECIAL_PRICE', '���̲���: ');
  define('TEXT_SALE_PRICE', '������β���: ');
  define('TEXT_FREE', '̵��');
  define('TEXT_CALL_FOR_PRICE', '���ʤˤĤ��Ƥ��䤤��碌��������');
  define('TEXT_SAVE_CHANGES','�ѹ�����¸����:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', '�����Ȥ��ɲä���Ƥ��ޤ���');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', '�ʲ��Υ��ץ����Υ��ץ�����ͤ����ƺ�����ޤ�����');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>����̾: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>���ץ����̾: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', '�ʲ��Υ��ץ����Υ��ץ�����ͤ����ƺ�����ޤ�����: ');
?>
