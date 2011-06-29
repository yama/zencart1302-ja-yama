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
//  $Id: products_to_categories.php 2909 2006-01-29 21:29:35Z ajeh $
//

define('HEADING_TITLE','ʣ�����ƥ��꡼���ʤΥ�󥯥ޥ͡����㡼');
define('HEADING_TITLE2','���ƥ��꡼ / ����');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', '��󥯤����Ѳ�ǽ�ʾ��ʥ��ƥ��꡼ ...');

define('TABLE_HEADING_PRODUCTS_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT', '����̾');
define('TABLE_HEADING_MODEL', '��ǥ�');
define('TABLE_HEADING_ACTION', '����');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', '���ʤΥ��ƥ��꡼������Խ����ޤ���');
define('TEXT_PRODUCTS_ID', '���� ID# ');
define('TEXT_PRODUCTS_NAME', '����: ');
define('TEXT_PRODUCTS_MODEL', '��ǥ�: ');
define('TEXT_PRODUCTS_PRICE', '����: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', '���åץǡ��ȥ��ƥ��꡼���');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', '��󥯤��뾦�ʤ����򤷤Ƥ���������');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', '��󥯤��륫�ƥ��꡼�˾��ʤ򥻥å�: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;�����ʤ���󥯤���Ƥ��륫�ƥ��꡼: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'���ƥ��꡼�ؤξ��ʤΥ�󥯤ϡ��ҤȤĤ⤷����ʣ���ؤΥ�󥯤���ǽ�Ǥ���<br />�ޤ������Ǥ˥�󥯤��Ƥ��륫�ƥ��꡼�����̤Υ��ƥ��꡼�ؤΰ�ư����ǽ�Ǥ���. (�ɲ����Ƥ˴ؤ��Ƥϡ��ʲ��򸫤Ƥ���������)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'���ʤ˲��ʤ�Ĥ��뤿��ˡ��ƾ��ʤϥޥ��������ƥ��꡼��ɬ�פȤ��ޤ���ʣ���Υ��ƥ��꡼�˥�󥯤���Ƥ��뤫�⤷��ޤ��󤬡��ޥ��������ƥ��꡼�Υɥ�åץ����󤫤顢�����������ѹ��ʤɤ��Ǥ��ޤ���.<br />
���ʤϸ��ߡ����ƥ��꡼�����ƥ��꡼��ˤƥ����å������󥯤���Ƥ��ޤ��� ���������ƥ��꡼�⤷���ϥ��ƥ��꡼��ˤơ����ƥ��꡼̾���٤ˤ�������å��ܥå����˥����å���ä���ˤϡ� ���Ǥ˥����å������äƤ�������å��ܥå������顢�����å��򳰤��Ƥ���������<br />
���ξ��ʤ򥫥ƥ��꡼��Τ��٤Ƥ˥�󥯥����å��������Ȥ��ϲ����Ƥ���������' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />');

define('HEADER_CATEGORIES_GLOBAL_CHANGES', '�����Х�ʥ��ƥ��꡼��󥯤��ѹ��ȥޥ��������ƥ��꡼ID�Υꥻ�å�');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>�ٹ�:</strong> ��󥯤��Ƥ��륫�ƥ��꡼���ѹ�����ˤϡ��ޥ��������ƥ��꡼ID��ɬ�פǤ���');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>�̤Υ��ƥ��꡼�إ�󥯤��Ƥ��뾦�ʤ�⤦��ĤΥ��ƥ��꡼�ؤ��٤ƥ��ԡ����롣</strong><br />��: ���٤Ƥ����ʤ����ƥ���8�ǥ��ƥ���22�˥�󥯤����Ǥ��礦��');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���ƥ���Ǥ��٤Ƥ����ʤ����򤷤Ƥ���������: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '���ƥ���˥�󥯤��Ƥ���������: ');
define('BUTTON_COPY_CATEGORY_LINKED', '��󥯤����褦�˾��ʤ򥳥ԡ����Ƥ��������� ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', '�ٹ�: ���ʤϥꥻ�åȤ���Ƥ��ꡢ�⤦���Υ��ƥ��꡼�ΰ����ǤϤ���ޤ����');
define('WARNING_COPY_LINKED', '�ٹ�: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���龦�ʤ��󥯤���Τ�̵���ʥ��ƥ��꡼�Ǥ�: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '�ؾ��ʤ��󥯤���Τ�̵���ʥ��ƥ��꡼�Ǥ�: ');
define('WARNING_NO_CATEGORIES_ID', '�ٹ�: ���ƥ��꡼�����򤵤�ޤ���Ǥ��� ... �ѹ��Ǥ��ޤ���Ǥ�����');
define('SUCCESS_COPY_LINKED', '��󥯤��Ƥ��뾦�ʤΥ��åץǡ��Ȥ��������ޤ����� ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���龦�ʤ��󥯤���Τ�ͭ���ʥ��ƥ��꡼: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '�ؾ��ʤ��󥯤���Τ�ͭ���ʥ��ƥ��꡼: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>�ٹ�: ���ʤϤޤ�����ѹ�������Ƥ��ޤ��� ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>�̤Υ��ƥ��꡼�ؤΥ�󥯤���Ƥ��뾦�ʤǤ��륫�ƥ��꡼�Τ��٤Ƥξ��ʤ������ޤ� ...</strong><br />��: 8��22����Ѥ��ơ����ƥ��꡼22���饫�ƥ��꡼8�Τ��٤Ƥξ��ʤΥ�󥯤��ڤ�Υ���ޤ���');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���ƥ��꡼�ξ��ʤ򤹤٤����򤷤ޤ�: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '���ƥ��꡼�˥�󥯤���Ƥ���Ȥ������ư���ޤ���: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', '��󥯤���Ƥ��뾦�ʤ��ư���Ƥ��������� ');

define('WARNING_REMOVE_LINKED', '�ٹ�: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '�����󥯾��ʤ������̵���Υ��ƥ��꡼: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '�إ�󥯾��ʤ������̵���Υ��ƥ��꡼: ');
define('SUCCESS_REMOVE_LINKED', '��󥯤���Ƥ��뾦�ʤΰ�ư���������ޤ��� ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '�����󥯤��줿���ʤ�ͭ���ʥ��ƥ��꡼�ذ�ư���ޤ���: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '�إ�󥯤��줿���ʤ�ͭ���ʥ��ƥ��꡼�ذ�ư���ޤ���: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>�ٹ�: ���ʤˤʤ�ʤ��ä��ѹ��ϥ�󥯤���ޤ���Ǥ���... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>�ٹ�: �ޥ��������ƥ��꡼ID�������Ƥ�������!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>�ޥ��������ƥ��꡼ID�Ǥ���: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', '���: �ޥ����������ƥ��꡼�ϡ����ʥ��ƥ��꡼����󥯤������ʾ�β��ʤ˱ƶ�����Ȥ���ǡ���Ū���ͤ�Ĥ��뤿��˻��Ѥ���ޤ���
, ��: �����륹<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', '����������褹�뤿���, ̵���ʾ��ʤ������֤إ�����쥯��
���ޤ����� ���줬��Ϥ侦�ʤǤʤ��褦�ˡ��ޥ����������ƥ��꡼����ID�������ޥ����������٥ޥ��������ƥ��꡼����ID����������ƻ�Ԥ��Ƥ��������� ̵���ʾ��ʤ��������줿��硢 ���θ塢�׵ᤷ������򽪤��뤳�Ȥ��Ǥ���Ǥ��礦��');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' ���ƥ��꡼������ͤ��뤳��: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' ���ƥ��꡼�ؾ��ͤ��뤳��: ');
define('SUCCESS_MASTER_CATEGORIES_ID', '��󥯤���Ƥ��뾦�ʤΥ��åץǡ��Ȥ��������ޤ��� ...');
define('WARNING_MASTER_CATEGORIES_ID', '�ٹ�: �ޥ��������ƥ��꡼�����åȤ���Ƥ��ޤ���!');

define('TEXT_PRODUCTS_ID_INVALID', '�ٹ�: ID�ޤ��Ͼ��ʤ����򤵤�Ƥ��ʤ�̵���ʾ���');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '���: ����ID�ϡ�1�ĤΥ��ƥ��꡼����⤦��ĤΥ��ƥ��꡼�ޤǤ��٤Ƥξ��ʤ��󥯤����Ѱդ���ɬ�פϤ���ޤ���ͭ���ʾ���ID�ϡ����Ѳ�ǽ�ʤ��٤ƤΥ��ƥ��꡼�Ȥ�����ID�ʥ�С���ɽ�������Ǥ��礦��');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>�������ޥ����������ƥ��꡼ID�Ȥ������򤵤줿���ƥ��꡼����Ѥ��뤿������򤵤줿���ƥ��꡼�Τ��٤Ƥξ��ʤ�ꥻ�åȤ��ޤ� ...</strong><br />��:���ƥ��꡼22�Υꥻ�åȤϡ����٤Ƥξ��ʤ˥ޥ����������ƥ��꡼ID�Ȥ��ƥ��ƥ��꡼22����ǥ��ƥ��꡼22�򥻥åȤǤ���Ǥ��礦��');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '���ƥ��꡼��Τ��٤Ƥξ����ѥޥ����������ƥ��꡼ID��ꥻ�åȤ��ޤ�: ');
define('BUTTON_RESET_CATEGORY_MASTER', '�ޥ��������ƥ��꡼ID��ꥻ�åȤ��ޤ���');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '�ٹ�: ̵���ʥ��ƥ��꡼�����򤵤�ޤ����� ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '�ޥ��������ƥ��꡼ID�ؤ������ʤΥ��åץǡ��Ȥ��������ޤ�����: ');

?>