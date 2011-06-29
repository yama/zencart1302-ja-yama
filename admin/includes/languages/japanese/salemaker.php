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
//  $Id: salemaker.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '������δ���(SALE Maker)');
define('TABLE_HEADING_SALE_NAME', '������̾');
define('TABLE_HEADING_SALE_DEDUCTION', '�Ͱ�����');
define('TABLE_HEADING_SALE_DATE_START', '������');
define('TABLE_HEADING_SALE_DATE_END', '��λ��');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_ACTION', '���');
define('TEXT_SALEMAKER_NAME', '������̾:');
define('TEXT_SALEMAKER_DEDUCTION', '�Ͱ�����:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;������:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', '������:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', '�ò����ʤξ��:');
define('TEXT_SALEMAKER_DATE_START', '������:');
define('TEXT_SALEMAKER_DATE_END', '��λ��:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>�ޤ���</b> �������оݤΥ��ƥ��������:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>���������(SALE Maker)�Υ���(Tips)�Ϥ�����</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(�ܺ�)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', '������');
define('TEXT_SALEMAKER_NEVER', '�ʤ�');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', '<b>���Ƥξ���</b>�˥������Ŭ�Ѥ�����Ϥ��Υ����å��ܥå���������å����Ƥ���������:');
define('TEXT_SALEMAKER_TOP', '���Ƥξ���');
define('TEXT_INFO_DATE_ADDED', '��Ͽ��:');
define('TEXT_INFO_DATE_MODIFIED', '������:');
define('TEXT_INFO_DATE_STATUS_CHANGE', '���ơ������ѹ���:');
define('TEXT_INFO_SPECIALS_CONDITION', '�ò����ʤؤ�Ŭ��:');
define('TEXT_INFO_DEDUCTION', '�Ͱ�����:');
define('TEXT_INFO_PRICERANGE_FROM', '������:');
define('TEXT_INFO_PRICERANGE_TO', ' ���� ');
define('TEXT_INFO_DATE_START', '������:');
define('TEXT_INFO_DATE_END', '��λ��:');
define('SPECIALS_CONDITION_DROPDOWN_0', '�ò����ʤβ��ʤ�̵�뤹�� - �쥮��顼���ʤ˥������Ŭ�Ѥ����ò����֤�������');
define('SPECIALS_CONDITION_DROPDOWN_1', '�������оݳ� - �ò����ʤϥ������Ŭ�Ѥ��ʤ�');
define('SPECIALS_CONDITION_DROPDOWN_2', '�ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');
*/
define('TEXT_INFO_HEADING_COPY_SALE', '������򥳥ԡ�');
define('TEXT_INFO_COPY_INTRO', '"%s"�Υ��ԡ�̾�����Ϥ��Ƥ�������');
define('TEXT_INFO_HEADING_DELETE_SALE', '���������');
define('TEXT_INFO_DELETE_INTRO', '���Υ�����������˺�����ޤ���?');
?>