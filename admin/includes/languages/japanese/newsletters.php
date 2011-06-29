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
//  $Id: newsletters.php 3020 2006-02-13 04:24:58Z ajeh $
//

define('HEADING_TITLE', '�᡼��ޥ�����δ���');

define('TABLE_HEADING_NEWSLETTERS', '�᡼��ޥ�����');
define('TABLE_HEADING_SIZE', '������');
define('TABLE_HEADING_MODULE', '����');
define('TABLE_HEADING_SENT', '��������');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_ACTION', '���');

define('TEXT_NEWSLETTER_MODULE', '���������:');
define('TEXT_NEWSLETTER_TITLE', '�᡼��ޥ�����η�̾:');
define('TEXT_NEWSLETTER_CONTENT', '�ƥ����ȷ��� <br />����:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'HTML(��å��ƥ�����)���� <br />����:');

define('TEXT_NEWSLETTER_DATE_ADDED', '��Ͽ��:');
define('TEXT_NEWSLETTER_DATE_SENT', '������:');

define('TEXT_INFO_DELETE_INTRO', '���Υ᡼��ޥ�����������˺�����ޤ�����');

define('TEXT_PLEASE_WAIT', '���Ф餯���Ԥ������������᡼����������Ƥ��ޤ�.....<br /><br />���ν��������Ǥ��ʤ��Ǥ�������!');
define('TEXT_FINISHED_SENDING_EMAILS', '�᡼��������λ���ޤ���!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s��� email��������Ǥ��� <br /><br /><UL><LI>a)�Х��󥹤��줿�᡼��</LI><LI>b) ̵���ˤʤäƤ���᡼�륢�ɥ쥹</LI><LI>c) ���������ݤΰ���</LI></UL>�����ʤ��Υ᡼��ܥå������ǧ���Ƥ������� ('.EMAIL_FROM.') �᡼��κ���ϴ�������/�ܵҥ�˥塼�θܵҤε�Ͽ���Խ����뤳�Ȥǲ�ǽ�ˤʤ�ޤ�');

define('ERROR_NEWSLETTER_TITLE', '���顼: �᡼��ޥ�����η�̾��ɬ�פǤ���');
define('ERROR_NEWSLETTER_MODULE', '���顼: ����ǥ᡼��ޥ���������򤷤Ƥ���������');
define('ERROR_PLEASE_SELECT_AUDIENCE','���顼: ����Υ˥塼���쥿����������ܵҷ������򤷤Ƥ�������');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', '���顼: �������ˤϥ᡼��ޥ�����Υ�å���ɬ�פǤ���');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', '���顼: �Խ�����ˤϥ᡼��ޥ�����Υ�å���ɬ�פǤ���');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', '���顼: ��������ˤϥ᡼��ޥ�����Υ�å���ɬ�פǤ���');
?>
