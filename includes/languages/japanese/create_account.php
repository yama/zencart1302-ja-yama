<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', '��������Ⱥ���');

define('HEADING_TITLE', '��������Ⱥ���');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">���:</strong>���Ǥ�������åפǤΥ�������Ȥ򤪻����ξ��ϡ�<a href="%s">������</a>��������󤷤Ƥ���������');

// greeting salutation
define('EMAIL_SUBJECT', STORE_NAME . '�ؤ褦����');
define('EMAIL_GREET_MR', '%s ��' . "\n\n");
define('EMAIL_GREET_MS', '%s ��' . "\n\n");
define('EMAIL_GREET_NONE', '%s ��' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', '�෼�������٤�<strong>' . STORE_NAME . '�ˤ���Ͽ�����������꤬�Ȥ��������ޤ�����</strong>');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '����Ͽ��������������˼���<strong>' . STORE_NAME . '</strong>�����Ѥκݤˤ��Ȥ�' . "\n" .'����������ֳ�������ݥ�פ����ꤷ�ޤ�!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', '�����ݥ󥳡��ɡ� <strong>%s</strong>' . "\n\n" . '���γ�������ݥ�򤪻Ȥ��ˤʤ�ˤϡ����㤤ʪ' . "\n" . '���������˾嵭�����ɤ����Ϥ��Ƥ���������' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', '�����˸¤� %s��' . TEXT_GV_NAME . '�����ꤷ�ޤ�!' . "\n");
define('EMAIL_GV_REDEEM', 'The ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' ��: %s ' . "\n\n" . '�����ͤ�������åפǾ��ʤ����Ӥˤʤä��塢�������ˡ�' . TEXT_GV_REDEEM . '�����Ϥ��Ƥ����������ȤǤ��Ȥ����������ޤ���');
define('EMAIL_GV_LINK', '�����Υ�󥯤��麣�������������뤳�Ȥ�Ǥ��ޤ���: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','�����ͤ����ȤΥ�������Ȥ�' . TEXT_GV_NAME . '���ɲä��Ƥ����С�����ʬ��' . TEXT_GV_NAME . '�򤪻Ȥ����������ޤ����ޤ����Τ�礤�����˥ץ쥼��Ȥ��뤳�Ȥ�Ǥ��ޤ���' . "\n\n");

define('EMAIL_TEXT', 
 '������åפˤ���Ͽ������������������Ȥǡ������ͤϤ��줫��ʲ���<strong>������' . "\n" . 
 '�����ӥ�</strong>�����Ѥ��������ޤ���' . "\n" . 
 "\n" . 
 '��<strong>����åԥ󥰥�����</strong>' . "\n" . 
 '����åԥ󥰥����Ȥ����줿���ʤϡ�����ޤ�����������ޤ�' . "\n" . 
 '�ݻ����Ƥ������Ȥ��Ǥ��ޤ���' . "\n" . 
 "\n" . 
 '��<strong>���ɥ쥹Ģ</strong>' . "\n" . 
 ' £��ʪ�ʤɤκݤ������ʤ褦�ˡ��������¾�ˤ⤪�Ϥ����5��ޤ�' . "\n" . 
 '��Ͽ���뤳�Ȥ��Ǥ��ޤ���' . "\n" . 
 "\n" . 
 '��<strong>��ʸ����</strong>' . "\n" . 
 '�ޥ��ڡ������顢��Ź�Ǥ���ʸ�������������ʤΰ���' . "\n" . 
 '���ǧ���뤳�Ȥ��Ǥ��ޤ���' . "\n" .  
 "\n" . 
 '��<strong>���ʤΥ�ӥ塼</strong>' . "\n" . 
 '������åפξ��ʤˤĤ��ƤΥ�ӥ塼(����)��񤭹���Ǥ����������Ȥ��Ǥ��ޤ���' . "\n" . 
 '����¾�Τ����ͤ˴��ۤ���������������' . "\n\n");
define('EMAIL_CONTACT', '������åפΥ���饤�󥵡��ӥ��ǲ����������������������ޤ����顢E�᡼��ˤƤ����ڤˤ��䤤��碌������: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','����' . "\n\nŹĹ " . STORE_OWNER . "\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', '���Υ᡼�륢�ɥ쥹�ϡ������ͤ����Ȥˤ�ä�������åפ���Ͽ����ޤ������⤷�����������Ͽ�򤵤줿�Ф����ʤ����ˤϡ�������Ǥ��� %s �ޤǤ�Ϣ����������');

//moved definitions to english.php
//define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacy Statement');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'I have read and agreed to your privacy statement.');
//define('TABLE_HEADING_ADDRESS_DETAILS', 'Address Details');
//define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Additional Contact Details');
//define('TABLE_HEADING_DATE_OF_BIRTH', 'Verify Your Age');
//define('TABLE_HEADING_LOGIN_DETAILS', 'Login Details');
//define('TABLE_HEADING_REFERRAL_DETAILS', 'Were You Referred to Us?');
?>
