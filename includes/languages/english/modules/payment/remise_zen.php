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
// | This source file is subject to version 2.0 of the GPL license,       |
// +----------------------------------------------------------------------+
// | Remise.jp Payment Module V.1.0.2                                    |
// | includes/languages/japanese/modules/payment/remise_zen.php           |
// | Module created by REMISE(www.remise.jp) - 11/28/2006                 |
// | Released under GPL                                                   |
// +----------------------------------------------------------------------+

	define('MODULE_PAYMENT_REMISE_TEXT_TITLE', 'REMISE���쥸�åȥ����ɷ��');
	define('MODULE_PAYMENT_REMISE_TEXT_DESCRIPTION', 'REMISE(www.remise.jp)');
	define('MODULE_PAYMENT_REMISE_TEXT_EXPLAIN','REMISE���쥸�åȥ����ɷ�ѥ����ƥ����Ѥ��ޤ�����³���κǽ����̤ǥ��쥸�åȥ����ɾ�������Ϥ��ޤ���');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_CARD_OWNER', '���쥸�åȥ����ɽ�ͭ��:');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_CARD_OWNER_ROMA', '���쥸�åȥ����ɽ�ͭ��(Ⱦ�ѱѿ����޻�):');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_CARD_NUMBER', '���쥸�åȥ������ֹ�:');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_CARD_EXPIRES', '���쥸�åȥ�����ͭ������:');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_METHOD', '��ʧ����ˡ:');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_METHOD_REVO', '���ʧ��');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_METHOD_ESPAY', 'ʬ��ʧ���ʣ���ʧ����');
	define('MODULE_PAYMENT_REMISE_TEXT_CREDIT_METHOD_ONE', '���ʧ��'); 
	define('MODULE_PAYMENT_REMISE_TEXT_TYPE', '������:');
	define('MODULE_PAYMENT_REMISE_TEXT_JS_CC_NUMBER', '* ���쥸�åȥ������ֹ�Ͼ��ʤ��Ƥ� ' . CC_NUMBER_MIN_LENGTH . ' ʸ���ʾ�ɬ�פǤ���');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_MESSAGE', '���쥸�åȥ����ɤν�����˥��顼��ȯ�����ޤ���. �������Ƥ��������⤦���ٻ�Ƥ�����������');
	define('MODULE_PAYMENT_REMISE_TEXT_CC_NAME', '���쥸�åȥ����ɽ�ͭ��̾�ϡ�Ⱦ�ѱѿ���ʸ���ʾ�����Ϥ��Ƥ�����������');
	define('MODULE_PAYMENT_REMISE_TEXT_CC_INVALID_DATE', '���쥸�åȥ����ɤ�ͭ�����¤�����������ޤ��󡣤���ǧ��⤦�������Ϥ��Ƥ�����������');
	define('MODULE_PAYMENT_REMISE_TEXT_CC_INVALID_NUMBER', '���쥸�åȥ������ֹ椬ͭ���ǤϤ���ޤ��󡣤���ǧ��⤦�������Ϥ��Ƥ�����������');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR', '���쥸�åȥ����� ���顼!');
	define('MODULE_PAYMENT_REMISE_TEXT_EMAIL_FOOTER', '');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_C14', '��갷���Բġʥ����ɲ�Ҥؤ��䤤��碌����������');	
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G03', '���ٳۥ����С��ʥ����ɲ�Ҥؤ��䤤��碌����������');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G12', '��갷���Բġʥ����ɲ�Ҥؤ��䤤��碌����������');  
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G30', '���Υ����ɤϸ��߻��ѤǤ��ޤ���ʥ����ɲ�Ҥؤ��䤤��碌����������');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G54', '��갷���Բġʥ����ɲ�Ҥؤ��䤤��碌����������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G55', '���ٳۥ����С��ʥ����ɲ�Ҥؤ��䤤��碌����������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G56', '���ѽ���ʤ������ɲ�ҤǤ�');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G60', '���ѽ���ʤ������ɤǤ�');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G65', '�������ֹ�ǥ��顼�ˤʤ�ޤ������������ֹ��Τ���ƺ��٤���³���򤪴ꤤ���ޤ���');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G78', '��ʧ����ˡ�ǥ��顼�ˤʤ�ޤ�����¾�λ�ʧ����ˡ�����򤷤Ƥ���������');  
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G83', 'ͭ�����¥��顼');
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G97', '��갷���Բġʥ����ɲ�Ҥؤ��䤤��碌����������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_G99', '��갷���Բġʥ����ɲ�Ҥؤ��䤤��碌����������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H12_31003', '�������ֹ�˸�꤬����ޤ����������ֹ��Τ���ƺ��٤���³���򤪴ꤤ���ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H12_31005', '�������ֹ�˸�꤬����ޤ������Υ����ɤϤ���갷���Ǥ��ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H12_32006', '�������ֹ�˸�꤬����ޤ����������ֹ��Τ���ƺ��٤���³���򤪴ꤤ���ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H97_22001', '���ѤǤ��ʤ������ɲ�ҤǤ��������Ԥؤ��䤤��碌��������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H97_42101', '����奨�顼�ʲ����ʤ��ˡ��������벾��夬����ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H97_45003', '��å��顼�����򤬤���ޤ����'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H97_45004', '��å��顼����ż��ä��ˡ������ǡ����ϴ��˼��ä��ѤߤǤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_H97_45005', ''); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_P90', '���ѤǤ��ʤ������ɲ�ҤǤ��������Ԥؤ��䤤��碌��������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_S01', '�����ɲ�ҤΥۥ��ȥ��顼�Ǥ������Ф餯���Ƥ�����٤�������³���򤷤Ƥ���������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_S99_9910', '���å�����ͭ�������ڤ�Ǥ������٤�������³���򤪴ꤤ���ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_S99_9940', '��ʣ�������դǤ����֥饦�����Ĥ��ƺ��٤�������³���򤪴ꤤ���ޤ���'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_X51', '�����ɲ�ҤΥ����ƥ२�顼�Ǥ������Ф餯���Ƥ�����٤�������³���򤷤Ƥ���������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_X53', '�����ɲ�ҤΥ����ƥ२�顼�Ǥ������Ф餯���Ƥ�����٤�������³���򤷤Ƥ���������'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_X65', '�����ɲ�ҤΥ����ƥ२�顼�Ǥ������Ф餯���Ƥ�����٤�������³���򤷤Ƥ���������'); 
	define('MODULE_PAYMENT_REMISE_MAIL_FUTEIKANN', '�����ξ��ʤ�����Ӿ��ʤȤʤ�ޤ�'); 
	define('MODULE_PAYMENT_REMISE_TEXT_ERROR_LOW', '���ζ�ۤǤϥ��쥸�åȥ����ɷ�ѤϤ����ѤǤ��ޤ���¾�η����ˡ�����򤷤Ƥ���������'); 
?>