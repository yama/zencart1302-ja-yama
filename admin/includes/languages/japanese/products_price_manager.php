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
//  $Id: products_price_manager.php 543 2004-11-13 19:19:29Z wilt $
//

define('HEADING_TITLE', '���ʲ��ʤδ���');
define('HEADING_TITLE_PRODUCT_SELECT','���ʾ����ɽ�����������ʤ�����');

define('TABLE_HEADING_PRODUCTS', '����');
define('TABLE_HEADING_PRODUCTS_MODEL','����');
define('TABLE_HEADING_PRODUCTS_PRICE', '���ʲ���/���̲���/���������');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','���Ψ(%)');
define('TABLE_HEADING_AVAILABLE_DATE', '�󶡳��ϲ�ǽ��');
define('TABLE_HEADING_EXPIRES_DATE','�󶡽�λ��');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_ACTION', '���');

define('TEXT_PRODUCT_INFO', '���ʾ���:');
define('TEXT_PRODUCTS_PRICE_INFO', '���ʲ��ʤξ���:');
define('TEXT_PRODUCTS_MODEL','����:');
define('TEXT_PRICE', '����');
define('TEXT_PRODUCT_AVAILABLE_DATE', '�󶡲�ǽ��:');
define('TEXT_PRODUCTS_STATUS', '���ʤΥ��ơ�����:');
define('TEXT_PRODUCT_AVAILABLE', '�߸ˤ���');
define('TEXT_PRODUCT_NOT_AVAILABLE', '�߸��ڤ�');

define('TEXT_PRODUCT_INFO_NONE', '��Υꥹ�Ȥ��龦�ʤ����� ...');
  define('TEXT_PRODUCT_IS_FREE','̵���ξ���:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*��̵���ץޡ����դ��ξ���');
  define('TEXT_PRODUCT_IS_CALL','���ʤ��䤤��碌����:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*�ֲ��ʤ��䤤��碌�ץޡ����դ��ξ���');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','°���ˤ�äƲ��ʷ���:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Yes');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*ɽ�����ʤϺǤ�¤����롼��°���β��ʤ�ޤ�');
  define('TEXT_PRODUCTS_MIXED','�����̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ������:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', '���̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻���롣');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','��˥å���:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','�ǹ���:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= ̵����<br />1= ��������ɽ��');

define('TEXT_FEATURED_PRODUCT_INFO', '�������ᾦ�ʤξ���:');
define('TEXT_FEATURED_PRODUCT', '����:');
define('TEXT_FEATURED_EXPIRES_DATE', '�󶡽�λ��:');
define('TEXT_FEATURED_AVAILABLE_DATE', '�󶡳��ϲ�ǽ��:');
define('TEXT_FEATURED_PRODUCTS_STATUS', '�������ᾦ�ʤξ���:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', '�����ƥ���');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', '�󥢥��ƥ���');
define('TEXT_FEATURED_DISABLED', '<strong>���: </strong>');

define('TEXT_SPECIALS_PRODUCT', '����:');
define('TEXT_SPECIALS_SPECIAL_PRICE', '�ò�����:');
define('TEXT_SPECIALS_EXPIRES_DATE', '�󶡽�λ��:');
define('TEXT_SPECIALS_AVAILABLE_DATE', '�󶡳��ϲ�ǽ��:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>�ò����ʤ����:</b><ul><li>�ò����ʤβ�����˥ѡ�����ơ���(%)�����Ϥ����������ɽ���Ǥ��ޤ�����: <b>20%</b></li><li>�����ʤ����Ϥ���ݤϡ���������\'.\' �ˤ��Ƥ�����������: <b>49.99</b></li><li>�󶡽�λ����̤�����Τޤޤˤ���С��ò����ʤ��󶡤Ͻ�λ���ޤ���</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', '�ò����ʤξ���:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', '�ò����ʤΥ��ơ�����:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', '�����ƥ���');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', '�󥢥��ƥ���');
define('TEXT_SPECIALS_NO_GIFTS','���եȷ��ξ���ò���Ŭ�Ѥ��ʤ�');
define('TEXT_SPECIAL_DISABLED', '<strong>��ա��ò����ʤξ���ϡ�������ɽ�����󶡽�λ���ޤ��󶡳��ϤˤʤäƤ��ʤ����Τ����줫�Ǥ���</strong>');

define('TEXT_INFO_DATE_ADDED', '������:');
define('TEXT_INFO_LAST_MODIFIED', '������:');
define('TEXT_INFO_NEW_PRICE', '������:');
define('TEXT_INFO_ORIGINAL_PRICE', '������:');
define('TEXT_INFO_PERCENTAGE', '���Ψ(%):');
define('TEXT_INFO_AVAILABLE_DATE', '�󶡥�������:');
define('TEXT_INFO_EXPIRES_DATE', '�󶡽�λ:');
define('TEXT_INFO_STATUS_CHANGE', '���ơ������ѹ�:');
define('TEXT_IMAGE_NONEXISTENT', '�����ʤ�');

define('TEXT_INFO_HEADING_DELETE_FEATURED', '�������ᾦ�ʤκ��');
define('TEXT_INFO_DELETE_INTRO', '���Τ������ᾦ�ʤ������˺�����ޤ���?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>°�������ꤷ��������ץܥ���򲡤��Ƥ���������</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '°���ˤ�äƲ��ʤ����');
  define('TEXT_PRODUCTS_PRICE', '���ʲ���: ');
  define('TEXT_SPECIAL_PRICE', '���̲���: ');
  define('TEXT_SALE_PRICE', '���������: ');
  define('TEXT_FREE', '̵��');
  define('TEXT_CALL_FOR_PRICE', '���ʤ��䤤��碌');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', DISCOUNT_QTY_ADD . ' ��٥�γ����٥���ɲä���');
define('TEXT_BLANKS_INFO','���Ƥ�0 �γ����٥�Ϲ����κݤ˺������ޤ�');
define('TEXT_INFO_NO_DISCOUNTS', '���̳���Ϥޤ���������Ƥ��ޤ���');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', '�����٥�');
define('TEXT_PRODUCTS_DISCOUNT','���');
define('TEXT_PRODUCTS_DISCOUNT_QTY','�Ǿ��¤�ͭ������');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','�������');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','������');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','���ʤ�׻�:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','��ĥ���줿����Extended Price:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','���ʤ�<br />�׻�����: &nbsp; �ǹ���:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','��ĥ���줿<br />����: &nbsp; �ǹ���:');

define('TEXT_EACH','ea.');
define('TEXT_EXTENDED','�ȡ�����');

define('TEXT_DISCOUNT_TYPE_INFO', '�ǥ���������Ȳ��ʤξ���');
define('TEXT_DISCOUNT_TYPE','�ǥ���������ȥ�����:');
define('TEXT_DISCOUNT_TYPE_FROM', '���β��ʤ���ǥ����������:');

define('DISCOUNT_TYPE_DROPDOWN_0','�ʤ�');
define('DISCOUNT_TYPE_DROPDOWN_1','���Ψ(%)');
define('DISCOUNT_TYPE_DROPDOWN_2','����������');
define('DISCOUNT_TYPE_DROPDOWN_3','�����۳����');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','����');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','�ò�');

define('TEXT_UPDATE_COMMIT','����ɽ������Ƥ������Ƥ���ꤹ��');

define('TEXT_PRODUCTS_TAX_CLASS', '�Ǥμ���:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>�ٹ�</strong> ���ʤΥޥ��������ƥ���ID# %s �ϸ��ߤΥ��ƥ���ID# %s �Ȱ��פ��ʤ����ᡢ���ʤϥ�󥯤���ޤ���!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' ���ߤΥ��ƥ���ID# %s �ϥޥ��������ƥ���ID# %s�Ȱ���');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', '�ޥ��������ƥ���ID# %s�򸽺ߤΥ��ƥ���ID# %s�Ȱ��פ����뤿�ṹ��');

define('PRODUCT_WARNING_UPDATE', 'ɬ�פ��ѹ���Ԥä���ֹ����ץܥ���ǳ��ꤷ�Ƥ���������');
define('PRODUCT_UPDATE_SUCCESS', '���ʾ���ι���������!');
define('PRODUCT_WARNING_UPDATE_CANCEL', '�ѹ��ϥ���󥻥뤵�졢��¸����ޤ���Ǥ���...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>�Խ�����ˤϥ���å� ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', '����ϥץ�ӥ塼�Ǥ������ߤβ��ʥ��ơ�����');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>���ʾ�����ѹ������ֹ����ץܥ���ǳ��ꤷ�Ƥ���������</strong>');
?>
