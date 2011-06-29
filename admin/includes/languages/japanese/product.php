<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', '���ƥ��ꡦ����');
define('HEADING_TITLE_GOTO', '������:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '���ƥ��ꡦ����');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', '������');

define('TABLE_HEADING_PRICE','����/���̲���/���������');
define('TABLE_HEADING_QUANTITY','����');

define('TABLE_HEADING_ACTION', '���');
define('TABLE_HEADING_STATUS', '���ơ�����');

define('TEXT_CATEGORIES', '���ƥ���:');
define('TEXT_SUBCATEGORIES', '���֥��ƥ���:');
define('TEXT_PRODUCTS', '����:');
define('TEXT_PRODUCTS_PRICE_INFO', '����:');
define('TEXT_PRODUCTS_TAX_CLASS', '�Ǽ���:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'ʿ����:');
define('TEXT_PRODUCTS_QUANTITY_INFO', '����:');
define('TEXT_DATE_ADDED', '��Ͽ��:');
define('TEXT_DATE_AVAILABLE', '�󶡲�ǽ��:');
define('TEXT_LAST_MODIFIED', '������:');
define('TEXT_IMAGE_NONEXISTENT', '���᡼���ʤ�');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '���Υ�٥�˿��������ƥ��꤫���ʤ��ɲä��Ƥ�������');
define('TEXT_PRODUCT_MORE_INFORMATION', '����˾ܺ٤ʾ�������ˤʤ�ˤϡ����ξ��ʤ� <a href="http://%s" target="blank">Web�ڡ���</a> �ء�');
define('TEXT_PRODUCT_DATE_ADDED', '������åפؤΤ��ξ��ʤ���Ͽ���� %s');
define('TEXT_PRODUCT_DATE_AVAILABLE', '���ξ��ʤ��󶡲�ǽ���� %s');

define('TEXT_EDIT_INTRO', 'ɬ�פ��ѹ���ԤäƤ���������');
define('TEXT_EDIT_CATEGORIES_ID', '���ƥ���ID:');
define('TEXT_EDIT_CATEGORIES_NAME', '���ƥ���̾:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '���ƥ������:');
define('TEXT_EDIT_SORT_ORDER', '�����Ƚ�:');

define('TEXT_INFO_COPY_TO_INTRO', '���ξ��ʤ򥳥ԡ����������������ƥ��������Ǥ���������');
define('TEXT_INFO_CURRENT_CATEGORIES', '���ߤΥ��ƥ���: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '�����ƥ���');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '���ƥ�����Խ�');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '���ƥ������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '���ƥ�����ư');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '���ʤ���');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '���ʤ��ư');
define('TEXT_INFO_HEADING_COPY_TO', '���ԡ���');

define('TEXT_DELETE_CATEGORY_INTRO', '���Υ��ƥ���������˺�����ޤ���?');
define('TEXT_DELETE_PRODUCT_INTRO', '���ξ��ʤ�ʵפ˺�����ޤ���?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>�ٹ�:</b> ���Υ��ƥ���ˤ� %s �Ĥ� (����)���ƥ��꤬��󥯤��Ƥ��ޤ�!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>�ٹ�:</b> ���Υ��ƥ���ˤ� %s �Ĥξ��ʤ���󥯤��Ƥ��ޤ�!');

define('TEXT_MOVE_PRODUCTS_INTRO', '���� <b>%s</b> ���ư�����������ƥ��������Ǥ���������');
define('TEXT_MOVE_CATEGORIES_INTRO', '���ƥ��� <b>%s</b> ���ư�����������ƥ��������Ǥ���������');
define('TEXT_MOVE', 'Move <b>%s</b> ���ư:');

define('TEXT_NEW_CATEGORY_INTRO', '���������ƥ���ˤĤ��Ƥξ�������Ϥ��Ƥ���������');
define('TEXT_CATEGORIES_NAME', '���ƥ���̾:');
define('TEXT_CATEGORIES_IMAGE', '���ƥ������:');
define('TEXT_SORT_ORDER', '�����Ƚ�:');

define('TEXT_PRODUCTS_STATUS', '���ʥ��ơ�����:');
define('TEXT_PRODUCTS_VIRTUAL', '����������뾦��:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '�������̵��:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '���ʤο������ɽ��:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '�󶡲�ǽ��:');
define('TEXT_PRODUCT_AVAILABLE', '�߸ˤ���');
define('TEXT_PRODUCT_NOT_AVAILABLE', '�߸��ڤ�');
define('TEXT_PRODUCT_IS_VIRTUAL', '�Ϥ��������轻��򥹥��å�');
define('TEXT_PRODUCT_NOT_VIRTUAL', '�������������轻�꤬ɬ��');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '�Ϥ����������̵��');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '���������̾�������Ŭ��');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', '�����褬ɬ�פ��ü쾦��/��������ɾ���');//Special, Product/Download Combo Requires a Shipping Address
define('TEXT_PRODUCTS_SORT_ORDER', '�����Ƚ�:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', '�Ϥ����������ɽ��');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', '�����������������ɽ��');

define('TEXT_PRODUCTS_MANUFACTURER', '���ʥ᡼����:');
define('TEXT_PRODUCTS_NAME', '����̾:');
define('TEXT_PRODUCTS_DESCRIPTION', '��������:');
define('TEXT_PRODUCTS_QUANTITY', '���ʿ���:');
define('TEXT_PRODUCTS_MODEL', '���ʷ���:');
define('TEXT_PRODUCTS_IMAGE', '���ʲ���:');
define('TEXT_PRODUCTS_IMAGE_DIR', '���åץ�����ǥ��쥯�ȥ�:');
define('TEXT_PRODUCTS_URL', '����URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(��http://��̵���ǵ���)</small>');
define('TEXT_PRODUCTS_PRICE_NET', '���ʲ��� (�ͥå�):');
define('TEXT_PRODUCTS_PRICE_GROSS', '���ʲ��� (����):');
define('TEXT_PRODUCTS_WEIGHT', '���ʽ���:');

define('EMPTY_CATEGORY', '���Υ��ƥ���');

define('TEXT_HOW_TO_COPY', '���ԡ���ˡ:');
define('TEXT_COPY_AS_LINK', '���ʤ���');
define('TEXT_COPY_AS_DUPLICATE', '���ʤ�ʣ��');


// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','���ʤ�ʣ�������˻���');
  define('TEXT_COPY_ATTRIBUTES','����°����ʣ�����ʤ˥��ԡ����ޤ���?');
  define('TEXT_COPY_ATTRIBUTES_YES','�Ϥ�');
  define('TEXT_COPY_ATTRIBUTES_NO','������');

// Products and Discount Copy Options
  define('TEXT_COPY_DISCOUNTS_ONLY','ʣ���������ʤˤΤ߳����Ŭ�Ѥ��ޤ���');
//Only used for Duplicate Products with Discounts ...
  define('TEXT_COPY_DISCOUNTS','���Ŭ�ѤΤ���˥��ԡ����ʤ�ʣ�����ޤ�����');
//Copy Product Discounts to Duplicate?'
  define('TEXT_COPY_DISCOUNTS_YES','�Ϥ�');
  define('TEXT_COPY_DISCOUNTS_NO','������');

  define('TEXT_INFO_CURRENT_PRODUCT', '���ߤξ���: ');
  define('TABLE_HEADING_MODEL', '����');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','����ID# ��°�����ѹ� ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','<strong>��</strong> ����°������::<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','���ξ��ʤ���°����¾�ξ��ʤޤ��ϥ��ƥ������Τ˥��ԡ�:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','���ξ��ʤ���°�����̤� <strong>����</strong> �˥��ԡ�:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','���ξ��ʤ���°�����̤� <strong>���ƥ���</strong> �˥��ԡ�:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>���Ǥˤ��뾦��°����ɤΤ褦�˰����ޤ���?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','�ǽ��<strong>���</strong>����������°���򥳥ԡ�');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','���������ꡦ���ʤ�<strong>����</strong>������������Τ�ä���');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>̵��</strong>���ƿ�����°����ä���Τ�');

  define('SUCCESS_ATTRIBUTES_DELETED','°���Ϻ������ޤ�����');
  define('SUCCESS_ATTRIBUTES_UPDATE','°���Ϲ�������ޤ�����');

  define('ICON_ATTRIBUTES','��������°��(Attribute Features)');

  define('TEXT_CATEGORIES_IMAGE_DIR','���åץ�����ǥ��쥯�ȥ�:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','�ٹ�: ���������ɽ��������1������');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','�ٹ�: ���������ɽ��������1������');

  define('TEXT_PRODUCT_OPTIONS', '<strong>����:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','��������°��(Attribute Features):');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','��������ɾ���: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','����°���ˤ�����:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','�Ϥ�');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','������');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','**ɽ�����ʤϺǤ��㤤���롼��°���β��ʤ�ޤ�(Display price will include lowest group attributes prices plus price)');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','**ɽ�����ʤϺǤ��㤤���롼��°���β��ʤ�ޤ�(Display price will include lowest group attributes prices plus price)');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','���ʤκǾ�����:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','���ʤο���ñ��:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','���ʤκ������:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = ̵���¡�1 = ��������ɽ��');

  define('TEXT_PRODUCTS_MIXED','�Ǿ�����/ñ�̥ߥå���:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '���ξ��ʤ�̵���Ǥ�');
  define('TEXT_PRODUCT_IS_FREE','̵������:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*̵���ȥޡ������줿����');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*̵���ȥޡ������줿����');

  define('TEXT_PRODUCT_IS_CALL','���ʤ��䤤��碌����:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*���ʤ��䤤��碌�ȥޡ������줿����');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*���ʤ��䤤��碌�ȥޡ������줿����');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>������°���򥹥��å� </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>������°����ʲ��������� </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>°����ʲ����鹹�� </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','ʸ�񥿥��ȥ�ʡ�title�����ǡˤ������������λ���');
//Mark What the Product\'s Meta Tag Title Should Include:</strong>
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>����̾:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>�����ȥ�:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>��ǥ�:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>����:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>����Ѥߥ����饤��:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>�����ȥ�:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta����(Keywords):</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta����(Description):</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">�ӽ�����Ƥ��ޤ�</span>');

?>
