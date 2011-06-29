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
//  $Id: categories.php 2847 2006-01-13 07:40:50Z drbyte $
//

define('HEADING_TITLE', '���ƥ��ꡦ���ʤδ���');
define('HEADING_TITLE_GOTO', '������:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '���ƥ��� / ����');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sort');

define('TABLE_HEADING_PRICE','����/�ò�/������');
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
define('TEXT_DATE_AVAILABLE', 'ȯ����:');
define('TEXT_LAST_MODIFIED', '������:');
define('TEXT_IMAGE_NONEXISTENT', '������¸�ߤ��ޤ���');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '���������ƥ���ޤ��Ͼ��ʤ���Ͽ���Ƥ���������.');
define('TEXT_PRODUCT_MORE_INFORMATION', '��äȾܤ�������ϡ����ξ��ʤ�<a href="http://%s" target="blank">Web�ڡ���</a>��������������');
define('TEXT_PRODUCT_DATE_ADDED', '���ξ��ʤ� %s �˥���������Ͽ����ޤ�����.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '���ξ��ʤ� %s ������ͽ��Ǥ���');

define('TEXT_EDIT_INTRO', 'ɬ�פ��ѹ���ä��Ƥ���������');
define('TEXT_EDIT_CATEGORIES_ID', '���ƥ���ID:');
define('TEXT_EDIT_CATEGORIES_NAME', '���ƥ���̾:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '���ƥ������:');
define('TEXT_EDIT_SORT_ORDER', '�����:');

define('TEXT_INFO_COPY_TO_INTRO', '���ξ��ʤ򥳥ԡ�������Υ��ƥ�������򤷤Ƥ���������');
define('TEXT_INFO_CURRENT_CATEGORIES', '���ߤΥ��ƥ���: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '���������ƥ���');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '���ƥ�����Խ�');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '���ƥ������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '���ƥ�����ư');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '���ʤ���');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '���ʤ��ư');
define('TEXT_INFO_HEADING_COPY_TO', '���ԡ���');

define('TEXT_DELETE_CATEGORY_INTRO', '���Υ��ƥ���������˺�����ޤ���?');
define('TEXT_DELETE_PRODUCT_INTRO', '���ξ��ʤ������˺�����ޤ���?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>�ٹ�:</b> ���Υ��ƥ���ˤ� %s �ĤΥ��֥��ƥ��꤬��Ͽ����Ƥ��ޤ�!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>�ٹ�:</b> ���Υ��ƥ���ˤ� %s �Ĥξ��ʤ���Ͽ����Ƥ��ޤ�!');

define('TEXT_MOVE_PRODUCTS_INTRO', '<b>%s</b>���ư������Υ��ƥ��������Ǥ���������');
define('TEXT_MOVE_CATEGORIES_INTRO', '<b>%s</b>���ư������Υ��ƥ��������Ǥ���������');
define('TEXT_MOVE', '<b>%s</b>�ΰ�ư��:');

define('TEXT_NEW_CATEGORY_INTRO', '���������ƥ���ξ�������Ϥ��Ƥ���������');
define('TEXT_CATEGORIES_NAME', '���������ƥ���:');
define('TEXT_CATEGORIES_IMAGE', '���ƥ������:');
define('TEXT_SORT_ORDER', '�����:');

define('TEXT_PRODUCTS_STATUS', '���ʥ��ơ�����:');
define('TEXT_PRODUCTS_VIRTUAL', '�С�����뾦��:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '������̵��:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '���ʤο����������ɽ��:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'ȯ����:');
define('TEXT_PRODUCT_AVAILABLE', '�߸ˤ���');
define('TEXT_PRODUCT_NOT_AVAILABLE', '���ڤ�');
define('TEXT_PRODUCT_IS_VIRTUAL', '�Ϥ���������λ�������פǤ���');
define('TEXT_PRODUCT_NOT_VIRTUAL', '��������������λ��꤬ɬ�פǤ�');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '�Ϥ���������̵���ˤ��ޤ���');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '���������̾�ɤ���������Ǥ���');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', '�Ϥ����߸˿���ɽ�����ޤ���');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', '���������߸˿���ɽ�����ޤ���');

define('TEXT_PRODUCTS_MANUFACTURER', '�᡼����:');
define('TEXT_PRODUCTS_NAME', '����̾:');
define('TEXT_PRODUCTS_DESCRIPTION', '���ʤ�����:');
define('TEXT_PRODUCTS_QUANTITY', '���ʤκ߸˿�:');
define('TEXT_PRODUCTS_MODEL', '���ʤη���:');
define('TEXT_PRODUCTS_IMAGE', '���ʤβ���:');
define('TEXT_PRODUCTS_IMAGE_DIR', '���åץ��ɤ���ǥ��쥯�ȥ�:');
define('TEXT_PRODUCTS_URL', '���ʤ�URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(\'http://\'�Ϥ���ޤ���)</small>');
define('TEXT_PRODUCTS_PRICE_NET', '���� (��ȴ��):');
define('TEXT_PRODUCTS_PRICE_GROSS', '���� (�ǹ���):');
define('TEXT_PRODUCTS_WEIGHT', '���ʤν���:');

define('EMPTY_CATEGORY', '���Υ��ƥ���');

define('TEXT_HOW_TO_COPY', '���ԡ�����ˡ:');
define('TEXT_COPY_AS_LINK', '��󥯤Υ��ԡ�(¾�Υ��ƥ����)');
define('TEXT_COPY_AS_DUPLICATE', '��ʣ���ԡ�(Ʊ��Υ��ƥ����)');

define('TEXT_RESTRICT_PRODUCT_TYPE', '���ʥ����פ�����');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', '���Υ��ƥ���Ϥ����ξ��ʥ����פ˸¤��Ƥ��ޤ���');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','��������Υ����פξ����Ϥ��Υ��ƥ��꡼�ˤ��ɲäǤ��ޤ��󡣥��ƥ��꡼�����»��������å����ƤߤƤ�������');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','���ʤ�ʣ�������˻��Ѥ���...');
  define('TEXT_COPY_ATTRIBUTES','���ʥ��ץ����򥳥ԡ�����ʣ�����ޤ���?');
  define('TEXT_COPY_ATTRIBUTES_YES','�Ϥ�');
  define('TEXT_COPY_ATTRIBUTES_NO','������');

  define('TEXT_INFO_CURRENT_PRODUCT', '���ߤξ���: ');
  define('TABLE_HEADING_MODEL', '����');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','���ʤΥ��ץ�����ѹ� ����ID:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','<strong>���Ƥ�</strong> ���ʥ��ץ�����������:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','�ʲ��ξ��ʤξ��ʥ��ץ�����¾�ξ��ʤޤ������Τ˥��ԡ�:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','�ʲ��ξ��ʤξ��ʥ��ץ�����<strong>¾�ξ���</strong>�˥��ԡ�:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','�ʲ��ξ��ʤξ��ʥ��ץ�����<strong>���ƥ���</strong>�˥��ԡ�:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>���ߤξ��ʥ��ץ�����ɤ����ޤ���?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>���</strong>�������������ץ����򥳥ԡ�����');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','����������/���ʤ�<strong>����</strong>������������Τ��ɲä���');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>̵��</strong>���ƿ��������ץ����������ɲä���');

  define('SUCCESS_ATTRIBUTES_DELETED','���ʤΥ��ץ����������ޤ�����');
  define('SUCCESS_ATTRIBUTES_UPDATE','���ʤΥ��ץ����򹹿����ޤ�����');

  define('ICON_ATTRIBUTES','���ʤΥ��ץ����');

  define('TEXT_CATEGORIES_IMAGE_DIR','���åץ�����Υǥ��쥯�ȥ�:');

  define('TEXT_VIRTUAL_PREVIEW','�ٹ�: �С�����뾦�ʤΤ������������򥹥��åפ��ޤ�');
  define('TEXT_VIRTUAL_EDIT','�ٹ�: �С�����뾦�ʤΤ������������򥹥��åפ��ޤ�');
  define('TEXT_FREE_SHIPPING_PREVIEW','�ٹ�: ������̵���ξ��ʤΤ��������轻�꤬ɬ�פǤ���');
  define('TEXT_FREE_SHIPPING_EDIT','�ٹ�: ������̵���ξ��ʤΤ��������轻�꤬ɬ�פǤ���');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','�ٹ�: �߸��̤�ɽ�����ޤ��󡣥ǥե���Ȥ�1�Ǥ���');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','�ٹ�: �߸��̤�ɽ�����ޤ��󡣥ǥե���Ȥ�1�Ǥ���');

  define('TEXT_PRODUCT_OPTIONS', '<strong>���򤷤Ƥ�������:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','���ʤΥ��ץ����:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','��������ɾ���: ');


  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','���ʥ��ץ������ղä���:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','�Ϥ�');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','������');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*ɽ�����ʤϺǤ���ʤ��㤤���ʤΥ��ץ�����ޤ᤿���ʤˤʤ�ޤ���');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*ɽ�����ʤϺǤ���ʤ��㤤���ʤΥ��ץ�����ޤ᤿���ʤˤʤ�ޤ���');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','�Ǿ��Ŀ�:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','����ñ��:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','����Ŀ�:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = ̵���¡�1 = ���̥ܥå������ä��ޤ�������ʾ�ξ��Ϥ��ο��ޤ���ʸ�Ǥ���褦�ˤʤ�ޤ���');

  define('TEXT_PRODUCTS_MIXED','����ñ�̤�Ǿ��Ŀ��Ȥ��ư���:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '���ʤ�̵��');
  define('TEXT_PRODUCT_IS_FREE','̵���ξ���:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*���ξ��ʤ�̵�������ꤵ��Ƥ��ޤ�');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*���ξ��ʤ�̵�������ꤵ��Ƥ��ޤ�');

  define('TEXT_PRODUCT_IS_CALL','���ʤ��䤤��碌���ʤˤ���:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*���ξ��ʤϲ��ʤ��䤤��碌���ʤ����ꤵ��Ƥ��ޤ���');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*���ξ��ʤϲ��ʤ��䤤��碌���ʤ����ꤵ��Ƥ��ޤ���');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>���������ץ����򥹥��åפ��ޤ���</strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>���������ץ������������ޤ���</strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>���ץ����򹹿����ޤ��� </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>�С�����뾦��</strong> �ϡ֥����ӥ��פ��' . TEXT_GV_NAMES . '�פΤ褦���������������轻���ɬ�פ�̵����ΤǤ���<br />' .
  '<strong>���������̵��</strong> ����������ɬ�פʤ����������轻�꤬ɬ�פʤ�ΤǤ���<br />' .
  '<strong>��������ɾ���</strong> �ϥС�����뾦�ʤǤ��Τǡ�ξ���Ȥ�ޡ�������ɬ�פϤ���ޤ���<br />'
  );

  define('TEXT_ANY_TYPE', '������Υ����פǤ�');
  define('TABLE_HEADING_PRODUCT_TYPES', '���ʥ�����');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', '�ʲ��Υ��ƥ���Υ��ơ��������Ѥ���:');
define('TEXT_CATEGORIES_STATUS_INTRO', '���ƥ���Υ��ơ�������ʲ����Ѥ���: ');
define('TEXT_CATEGORIES_STATUS_OFF', '����');
define('TEXT_CATEGORIES_STATUS_ON', '����');
define('TEXT_PRODUCTS_STATUS_INFO', '�����ʤΥ��ơ�������ʲ����Ѥ���: ');
define('TEXT_PRODUCTS_STATUS_OFF', '����');
define('TEXT_PRODUCTS_STATUS_ON', '����');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', '�ѹ��ʤ�');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>�ٹ�...</strong><br />���: ���ƥ����̵���ˤ���ȡ����Υ��ƥ����°���������ʤ�̵���ˤʤ�ޤ������Υ��ƥ�����ˤ��ꡢ¾�Υ��ƥ���˥�󥯤��Ƥ��뾦�ʤ�̵���ˤʤ�ޤ���');

define('TEXT_PRODUCTS_STATUS_ON_OF',' �� ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' �����ƥ��� ');

define('TEXT_CATEGORIES_DESCRIPTION', '���ƥ��������:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '�������䤤��碌�ξ���');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', '���ƥ���Υإå��������');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', '�إå�����Υ������ޥ���');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', '�����ȥ�:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Meta����(Keywords):');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Meta����(Description):');




?>