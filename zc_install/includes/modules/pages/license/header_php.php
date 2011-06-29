<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 2342 2005-11-13 01:07:55Z drbyte $
 */

  $zc_install->error = false;
  $zc_install->fatal_error = false;
  $zc_install->error_list = array();
  
  if (isset($_POST['submit'])) {
    if (isset($_POST['license_consent']) && $_POST['license_consent'] == 'agree') {
      header('location: index.php?main_page=inspect&language=' . $language);
      exit;
    }
    if (isset($_POST['license_consent']) && $_POST['license_consent'] == 'disagree') {
      header('location: index.php');
      exit;
    }
  }
?>