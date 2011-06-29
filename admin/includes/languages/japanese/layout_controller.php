<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', '�����ɥܥå�����ɽ������');

define('TABLE_HEADING_LAYOUT_BOX_NAME', '�ܥå����ե�����̾');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'ɽ��������(��/��) <br />���ơ�����');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', '���󥰥�ܥå���<br />���ơ�����');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'ɽ��������<br />�� �ޤ��� ��');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', '��/�� ������<br />�����');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', '���󥰥�ܥå���<br />�����');
define('TABLE_HEADING_ACTION', '���');

define('TEXT_INFO_EDIT_INTRO', 'ɬ�פ��ѹ���ԤäƤ���������');
define('TEXT_INFO_LAYOUT_BOX','������Υܥå���: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', '�ܥå���̾:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','ɽ��������: (���󥰥�ܥå����ˤʤäƤ������̵�뤵��ޤ�)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', '��/�� �ܥå��� ���ơ�����: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', '���󥰥�ܥå��� ���ơ�����: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','ON= 1 OFF=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', '��/�� �����Ƚ�:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', '���󥰥�ܥå��� �����Ƚ�:');
define('TEXT_INFO_INSERT_INTRO', '�������ܥå����Υǡ��������Ϥ��Ƥ���������');
define('TEXT_INFO_DELETE_INTRO', '���Υܥå����������˺�����ޤ���?');
define('TEXT_INFO_HEADING_NEW_BOX', '�������ܥå���');
define('TEXT_INFO_HEADING_EDIT_BOX', '�ܥå������Խ�');
define('TEXT_INFO_HEADING_DELETE_BOX', '�ܥå�������');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','�ƥ�ץ졼�ȥꥹ�Ȥ��������Υܥå�������: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','�Ρ���: �ե����뼫�ΤϺ������ޤ��󡣥ե������ǥ��쥯�ȥ���ɲä���ȥܥå���������ɲä��뤳�Ȥ��Ǥ��ޤ���<br /><br /><strong>�������ܥå���: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','���ƤΥܥå�����ɽ�����ǥե���ȥƥ�ץ졼�ȤΤ�Τ��᤹: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','(�ܥå����Ϻ������ޤ���ɽ���礬�ꥻ�åȤ��������Ǥ���)');
define('TEXT_INFO_BOX_DETAILS','�ܥå����ܺ�: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', '�����ȥƥ�ץ졼�ȥ쥤������');

define('TABLE_HEADING_LAYOUT_TITLE', '�����ȥ�');
define('TABLE_HEADING_LAYOUT_VALUE', '��');
define('TABLE_HEADING_ACTION', '���');


define('TEXT_MODULE_DIRECTORY', '�����ȥ쥤������ �ǥ��쥯�ȥ�:');
define('TEXT_INFO_DATE_ADDED', '��Ͽ��:');
define('TEXT_INFO_LAST_MODIFIED', '������:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', '�쥤������');
define('BOX_LAYOUT_COLUMNS', '�ܥå�������ȥ���');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>MISSING!!</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','�ܥå����ƥ�ץ졼�Ȥκ�����������ޤ�����: ');
define('SUCCESS_BOX_RESET','�ܥå����ƥ�ץ졼�Ȥ�ǥե���Ȥ�������ᤷ�ޤ�����: ');
define('SUCCESS_BOX_UPDATED','�ܥå�������ι������������ޤ�����: ');

define('TEXT_ON',' ON ');
define('TEXT_OFF',' OFF ');
define('TEXT_LEFT',' �� ');
define('TEXT_RIGHT',' �� ');

?>