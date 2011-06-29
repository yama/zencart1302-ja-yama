<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 3166 2006-03-11 02:45:51Z drbyte $
 */

// office use only
  define('OFFICE_FROM','<strong>���п�:</strong>');
  define('OFFICE_EMAIL','<strong>�᡼��:</strong>');

  define('OFFICE_SENT_TO','<strong>����:</strong>');
  define('OFFICE_EMAIL_TO','<strong>�᡼��:</strong>');

  define('OFFICE_USE','<strong>��̳��:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>������̾:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>�������ѥ᡼�륢�ɥ쥹:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>�����ֹ�:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP���ɥ쥹:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>�ۥ��ȥ��ɥ쥹:</strong>');
  define('OFFICE_DATE_TIME','<strong>����:</strong>');
//  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', '���Υ᡼���������åפ���Ͽ���줿�����ͤ��Ф��Ƥ����ꤷ�Ƥ��ޤ������������̵꤬���褦�Ǥ��������Ѥ�����Ǥ����᡼��ˤ� %s �ޤǤ�Ϣ����������');
  define('EMAIL_SPAM_DISCLAIMER','���Υ᡼���������åפ���Ͽ���졢���ɤ��˾���줿���ˤ��Ϥ����Ƥ��ޤ����ۿ���ߤ��˾��������ϡ�������Ǥ���������Υ᡼�륢�ɥ쥹�ޤǤ�Ϣ��������');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) 2003-2006 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '��<strong>����:</strong>
�����ͤθĿ;����ݸ��������ǹ԰��ɻߤΤ����' . "\n" . '
������åפ��ͳ�������������᡼��ϥ���å״����Ԥ�' . "\n" . '
�̿���Ͽ�Ȥ�����¸���Ƥ��ޤ���' . "\n" . '
�⤷���Υ᡼��ˤ��������꤬�ʤ��褦�Ǥ����顢' . "\n" . '
���Ѥ�����Ǥ����᡼��ˤ�' . STORE_OWNER_EMAIL_ADDRESS . "\n" .'
�ޤǤ�Ϣ���������ޤ��褦���ꤤ�������ޤ�����' . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>���Υ����Ȥ��ͳ����������������Ƥ�E�᡼��������˰ʲ��Υ�å��������ղä���ޤ�:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[��������Ⱥ���]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT','[ͧã�˶�����]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[���եȷ���£��]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[������ʸ]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA CC ORDER INFO] #');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[EXTRA CC ORDER info] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','�ٹ�: �߸ˤ����ʤ��ʤ�ޤ���');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','�߸˷ٹ��ݡ���: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '̵��');
?>