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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'CVV�Ȥ�?');
define('TEXT_CVV_HELP1', 'Visa��Mastercard��Discover�����ɾȹ��ֹ�(CVV)<br /><br />
                    �����ͤξ����ݸ�Τ��ᡢ�����ɾȹ��ֹ�(CVV)�������Ƥ���������<br /><br />
                    �����ɾȹ��ֹ�(CVV)�ϥ����ɤ�΢�̤ν�̾��˵�������Ƥ���3��ο����Ǥ���
                    �������ֹ�β�3�夫�����θ�˵��ܤ���Ƥ��ޤ���<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express�����ɾȹ��ֹ�(CVV)<br /><br />
                    �����ͤξ����ݸ�Τ��ᡢ�����ɾȹ��ֹ�(CVV)�������Ƥ���������<br /><br />
                    American Express�Υ����ɾȹ��ֹ��ɽ�̤�4����ֹ�Ǥ���
                    �������ֹ�β�4�夫���θ�ˤ�������Ǥ���<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '������ɥ����Ĥ���[x]');
?>