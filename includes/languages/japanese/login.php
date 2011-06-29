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
// $Id: login.php 2471 2005-11-29 01:14:18Z drbyte $
//

define('NAVBAR_TITLE', '������');
define('HEADING_TITLE', '����ä��㤤�ޤ�<br />�����󥤥󤷤Ƥ�������');

define('HEADING_NEW_CUSTOMER', '�ڽ��ƤΤ���Ź��̤��Ͽ�����ϡ�<br /> �����ͤξ�������Ϥ�����������Ȥ�������Ƥ���������');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', '���ε����������Ͽ��������!<br />' . STORE_NAME . '�Ǥϡ����٥�������Ȥ�������Ƥ��������ޤ��ȰʹߤΤ����ѤǤϤ����;���ʤɤ����Ϥ�ʤ����Ȥ��Ǥ�����Ŭ�˥���åԥ󥰤�ڤ���Ǥ��������ޤ���');

define('HEADING_RETURNING_CUSTOMER', '�ڥ�������Ȥ򤪻��������ϡ�<br />����Ͽ���줿�᡼�륢�ɥ쥹���ѥ���ɤǥ����󤷤Ƥ���������');

define('TEXT_PASSWORD_FORGOTTEN', '�ѥ���ɤ�˺��Ǥ���?');

define('TEXT_LOGIN_ERROR', '���顼: �᡼�륢�ɥ쥹�ޤ��ϥѥ���ɤ����פ��ޤ���Ǥ�����');
define('TEXT_VISITORS_CART', '<strong>��:</strong>�����ͤ�&quot;�ӥ�������������&quot;�����Ƥϡ������󤵤���&quot;���С���������&quot;����˼�ưŪ������ޤ���<a href="javascript:session_win();">[�ܺ�]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">�Ŀ;����ݸ����ˤˤĤ���</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">�Ŀ;����ݸ����ˤ�Ʊ�դ������ϥ����å��ܥå����򥯥�å����Ƥ������������ƤϤ�����Ǥ������������ޤ���</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>�Ŀ;����ݸ�����</u></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">�Ŀ;����ݸ����ˤ�Ʊ�դ��ޤ���</span>');
?>