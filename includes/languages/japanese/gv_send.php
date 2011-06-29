<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3058 2006-02-21 09:40:07Z birdbrain $
 */

define('HEADING_TITLE', TEXT_GV_NAME . '����');
define('HEADING_TITLE_CONFIRM_SEND', TEXT_GV_NAME . '�����γ�ǧ');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . '���������ޤ���');
define('NAVBAR_TITLE', '' . TEXT_GV_NAME . '����');
define('EMAIL_SUBJECT', STORE_NAME . '����Υ�å�����');
define('HEADING_TEXT','<br />�ʲ��Υե������' . TEXT_GV_NAME . '�Τ�����;���ʤɤ򤴵�������������<br/>' . TEXT_GV_NAME . '�ˤĤ��Ƥξܤ��������<a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '</a>�Ǥ����ˤʤ�ޤ���<br />');
define('ENTRY_NAME', '������ͤΤ�̾��:');
define('ENTRY_EMAIL', '������ͤ�E�᡼�륢�ɥ쥹:');
define('ENTRY_MESSAGE', '��å�����:');
define('ENTRY_AMOUNT', '���:');
define('ERROR_ENTRY_TO_NAME_CHECK', '������ͤΤ�̾�������Ϥ���Ƥ��ޤ���');
define('ERROR_ENTRY_AMOUNT_CHECK', TEXT_GV_NAME . '�ζ�ۤ����������Ϥ���Ƥ��ޤ��󡣤⤦���٤��ľ���Ʋ�������');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'E�᡼�륢�ɥ쥹�����������Ϥ���Ƥ��ʤ��褦�Ǥ����⤦���٤��ľ���Ʋ�������');
define('MAIN_MESSAGE', TEXT_GV_NAME . ' %sʬ��%s��(%s)������ޤ���������ɬ�פʾ���<strong>�Խ�</strong>�ܥ���򥯥�å����Ƥ���������<br /><br />���������å�����:<br /><br />');
define('SECONDARY_MESSAGE', '%s ��<br /><br />' . '%s��' . TEXT_GV_NAME . '��%s�ͤ���£���ޤ�����');
define('PERSONAL_MESSAGE', '%s�ͤ���Υ�å�����:');
define('TEXT_SUCCESS', TEXT_GV_NAME . '���������������ޤ�����');
define('TEXT_SEND_ANOTHER', '¾��' . TEXT_GV_NAME . '��£��ޤ���?');
define('TEXT_AVAILABLE_BALANCE',  '���ߤλĹ�');

define('EMAIL_GV_TEXT_SUBJECT', '%s���󤫤�Υ��ե�');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', '' . TEXT_GV_NAME . '(%s)��');
define('EMAIL_GV_FROM', '%s�ͤ���' . TEXT_GV_NAME . '��£���ޤ�����');
define('EMAIL_GV_MESSAGE', '��å�������');
define('EMAIL_GV_SEND_TO', '%s�͡�����ˤ��ϡ�');
define('EMAIL_GV_REDEEM', '�ʲ���URL�򥯥�å�����ȡ�����' . TEXT_GV_NAME . '����������뤳�Ȥ��Ǥ��ޤ����ޤ���������åפ�ľ��' . TEXT_GV_REDEEM . ': %s �����Ϥ��Ƥ����������ȤǤ���������뤳�Ȥ�Ǥ��ޤ���' . "\n\n" . '');
define('EMAIL_GV_LINK', '����������URL�򥯥�å����Ƥ���������'."\n");
define('EMAIL_GV_VISIT', '�ޤ���');
define('EMAIL_GV_ENTER', '' . TEXT_GV_REDEEM . '��������åפ����Ϥ��Ƥ���������');
define('EMAIL_GV_FIXED_FOOTER', '�嵭��URL�򥯥�å����Ƥ⤦�ޤ�' . TEXT_GV_NAME . '�ΰ����������Ǥ��ʤ�����' . "\n" .
                                '������Ǥ�������' . TEXT_GV_NAME . '��' . TEXT_GV_REDEEM . '��������åפˤ����Ϥ��Ƥ���������');
define('EMAIL_GV_SHOP_FOOTER', '');
?>