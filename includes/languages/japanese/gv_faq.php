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
// $Id: gv_faq.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . '�ˤĤ��Ƥ褯������������');
define('HEADING_TITLE', TEXT_GV_NAME . '�ˤĤ��Ƥ褯������������');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">' . TEXT_GV_NAMES . '���������ˤ�</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">' . TEXT_GV_NAMES . '��£��ˤ�</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">' . TEXT_GV_NAMES . '�򥷥�åԥ󥰤˻Ȥ��ˤ�</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">' . TEXT_GV_NAMES . '��Ȥ��ˤ� [£��줿������]</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">���꤬�������Ȥ���</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE',TEXT_GV_NAMES . '���������ˤ�');
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . '��������åפ�¾�ξ��ʤ�Ʊ�ͤˤ���ᤤ�������ޤ���<br />������åפ��󶡤��Ƥ����̾����ˡ�Ǥ���ʧ�����Ǥ�������ᤤ��������' . TEXT_GV_NAME . '�ζ�ۤϤ����ͤ�' . TEXT_GV_NAME . '��������Ȥ��ɲä���ޤ���<br />�����ͤ�' . TEXT_GV_NAME . '��������Ȥ˻Ĺ⤬������ϥ���åԥ󥰥��������ɽ�����졢�᡼���' . TEXT_GV_NAME . '��£�뤿��Υ�󥯤�ɽ������ޤ���');
  break;
  case '2':
define('SUB_HEADING_TITLE',TEXT_GV_NAMES . '��£��ˤ�');
define('SUB_HEADING_TEXT',TEXT_GV_NAME . '��£�뤿��ˤϡ��ƥڡ����Υ���åԥ󥰥������󤫤��󥯤��줿' . TEXT_GV_NAME . '�����ڡ����˹Ԥ��������ι��ܤ������Ƥ��������ޤ���<br />
' . TEXT_GV_NAME . '�������������Τ�̾��<br />
' . TEXT_GV_NAME . '�������������Υ᡼�륢�ɥ쥹<br />
��£��ˤʤ��� (���: ' . TEXT_GV_NAME . ' ��������Ȥˤ������ۤ�£��ɬ�פϤ���ޤ���)<br />
�᡼���ź�����å�����<br /><br />
�ºݤ������������˳�ǧ���ѹ��Ǥ��ޤ��������Ƥξ�������Τˤ����Ϥ���������');
  break;
  case '3':
  define('SUB_HEADING_TITLE',TEXT_GV_NAMES . '�򥷥�åԥ󥰤˻Ȥ��ˤ�');
  define('SUB_HEADING_TEXT','�����ͤ�' . TEXT_GV_NAME . '��������Ȥ˻Ĺ⤬�����硢������åפǤΤ��㤤ʪ�ˤ��Ȥ��������ޤ���<br />����ʧ����ˡ�����򤹤�ݤ�' . TEXT_GV_NAME . '�ε�����ɽ������ޤ��Τǡ�' . TEXT_GV_NAME . '��������ȤλĹ⤫�餪�Ȥ��ˤʤ��ۤ����Ϥ��Ʋ���������������ȤλĹ⤬����ʸ��ۤ�­��ʤ����ϡ�¾�Τ���ʧ����ˡ�����򤷤Ƥ�������ɬ�פ�����ޤ��ΤǤ���դ���������<br />
����ʸ����ۤ���' . TEXT_GV_NAME . '��������ȤλĹ⤬¿�����ˤϡ���������Ȥ˺����Ĺ⤬ɽ������ޤ���');
  break;
  case '4':
  define('SUB_HEADING_TITLE',TEXT_GV_NAMES . '��Ȥ��ˤ� [£��줿������]');
  define('SUB_HEADING_TEXT','�᡼���' . TEXT_GV_NAME . '��������줿���ˤϡ��᡼�����' . TEXT_GV_NAME . '�������Ծ��󤬵��ܤ���Ƥ���Ǥ��礦���ޤ����᡼����ˤ�' . TEXT_GV_NAME . '' . TEXT_GV_REDEEM . '�����ܤ���Ƥ���Ϥ��Ǥ�����λ����Ѥ˥᡼���������Ƥ����Ȥ褤�Ǥ��礦��<br />
' . TEXT_GV_NAME . '�����������ˤ�2�Ĥ���ˡ������ޤ���<br /><br />
 1. �Ȥꤢ������������������Ǥ����顢�᡼��˵��ܤ���Ƥ����󥯤򥯥�å��������Ź��' . TEXT_GV_NAME . '���������ڡ��������Ӥޤ��������󤹤뤫��������åפΤ����Ѥ����Ƥξ���������åפΥ�������Ȥ򤪺�ꤤ����������ǡ�' . TEXT_GV_NAME . '��ͭ���ˤ��Ƥ������Ѥ�' . TEXT_GV_NAME . '��������Ȥ��Ѱդ����Ƥ��������ޤ���<br />
 2. ����åԥ󥰤������μ�³���桢����ʧ����ˡ�����򤹤�ڡ������' . TEXT_GV_REDEEM . '�����Ϥ����󤬤���ޤ���������' . TEXT_GV_REDEEM . '�����Ϥ��ư��������ܥ���򲡤��Ʋ������������ɤ�ͭ���ˤʤ�ȡ�' . TEXT_GV_NAME . '��������Ȥ����⤬�Ԥ��ޤ����Ĺ���ϰ���Ǥ���ͳ�ˤ��Ȥ����������ޤ���');
  break;
  case '5':
  define('SUB_HEADING_TITLE','���꤬�������Ȥ���');
  define('SUB_HEADING_TEXT','' . TEXT_GV_NAME . '�����ƥ��������˲������꤬�������ޤ����顢'. STORE_OWNER_EMAIL_ADDRESS . '�ޤǥ᡼��Ǥ�Ϣ���������� <br />
���κݤˤϡ���®��������Τ���ˤǤ�������ܤ���(�֤ɤβ��̤ǡס֤ɤ�����򤷤��פʤ�)�������Τ餻���������褦�ꤤ�������ޤ��� ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','��μ�����椫�餪���Ӥ�������');

  }
?>