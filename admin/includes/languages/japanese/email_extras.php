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
// $Id: email_extras.php 2081 2005-10-03 05:34:18Z ajeh $
//

// office use only
  define('OFFICE_FROM','���п�:');
  define('OFFICE_EMAIL','�᡼�륢�ɥ쥹:');

  define('OFFICE_SENT_TO','������:');
  define('OFFICE_EMAIL_TO','�᡼�륢�ɥ쥹:');
  define('OFFICE_USE','��ҤǤ����ѤΤ�:');
  define('OFFICE_LOGIN_NAME','������̾:');
  define('OFFICE_LOGIN_EMAIL','������᡼�륢�ɥ쥹:');
  define('OFFICE_LOGIN_PHONE','<strong>����:</strong>');
  define('OFFICE_IP_ADDRESS','IP���ɥ쥹:');
  define('OFFICE_HOST_ADDRESS','�ۥ���̾:');
  define('OFFICE_DATE_TIME','���ա�����:');

  define('EMAIL_GREET', '��');

// email disclaimer
  define('EMAIL_DISCLAIMER', '���Υ᡼�륢�ɥ쥹�ϡ����ʤ��⤷���Ϥ��ʤ��Τ����ͤ��餤����������ΤǤ������Υ᡼��˿������꤬�ʤ����ϡ�������Ǥ��� %s �ޤǤ��Τ餻����������');
  define('EMAIL_SPAM_DISCLAIMER','���Υ᡼��ϡ�US CAN-SPAM Law in effect 01/01/2004�˽�򤷤���������ޤ��������ɺ�����˾�������ϡ����пͥ��ɥ쥹�˥ꥯ�����Ȥ����������®�䤫���н褤�����ޤ���');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright &copy; 2004 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[���եȷ�]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[�����ݥ��]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[����ʸ����]');
  define('TEXT_UNSUBSCRIBE', "\n\n���Υ᡼��ޥ�����ȥ���åפ���Τ��Τ餻����ɲ������ˤϰʲ��Υ�󥯤򥯥�å�: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '�Բ�ǽ');
?>