<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=create_account.<br />
 * Displays Create Account form.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_create_account.php 3777 2006-06-15 07:03:03Z drbyte $
 */
?>

<?php if ($messageStack->size('create_account') > 0) echo $messageStack->output('create_account'); ?>

<div class="alert forward"><?php echo FORM_REQUIRED_INFORMATION; ?></div>
<br class="clearBoth" />

<?php
  if (DISPLAY_PRIVACY_CONDITIONS == 'true') {
?>
<fieldset>
<legend><?php echo TABLE_HEADING_PRIVACY_CONDITIONS; ?></legend>
<div class="information"><?php echo TEXT_PRIVACY_CONDITIONS_DESCRIPTION;?></div>
<?php echo zen_draw_checkbox_field('privacy_conditions', '1', false, 'id="privacy"');?>
<label class="checkboxLabel" for="privacy"><?php echo TEXT_PRIVACY_CONDITIONS_CONFIRM;?></label>
</fieldset>
<?php
  }
?>
<?php
  if (ACCOUNT_COMPANY == 'true') {
?>
<fieldset>
<legend><?php echo CATEGORY_COMPANY; ?></legend>
<label class="inputLabel" for="company"><?php echo ENTRY_COMPANY; ?></label>
<?php echo zen_draw_input_field('company', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_company', '40') . ' id="company"') . (zen_not_null(ENTRY_COMPANY_TEXT) ? '<span class="alert">' . ENTRY_COMPANY_TEXT . '</span>': ''); ?>
</fieldset>
<?php
  }
?>

<fieldset>
<legend><?php echo TABLE_HEADING_ADDRESS_DETAILS; ?></legend>
<?php
  if (ACCOUNT_GENDER == 'true') {
?>
<?php echo zen_draw_radio_field('gender', 'm', '', 'id="gender-male"') . '<label class="radioButtonLabel" for="gender-male">' . MALE . '</label>' . zen_draw_radio_field('gender', 'f', '', 'id="gender-female"') . '<label class="radioButtonLabel" for="gender-female">' . FEMALE . '</label>' . (zen_not_null(ENTRY_GENDER_TEXT) ? '<span class="alert">' . ENTRY_GENDER_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php
  }
?>

<label class="inputLabel" for="firstname" ><?php echo ENTRY_FIRST_NAME; ?></label>
<?php echo zen_draw_input_field('firstname', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_firstname', '40') . ' id="firstname"') . (zen_not_null(ENTRY_FIRST_NAME_TEXT) ? '<span class="alert">' . ENTRY_FIRST_NAME_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<?php if (FURIKANA_NESESSARY) { ?>
<label class="inputLabel" for="firstname_kana" ><?php echo ENTRY_FIRST_NAME_KANA; ?></label>
<?php echo zen_draw_input_field('firstname_kana', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_firstname_kana', '40') . ' id="firstname_kana"') . (zen_not_null(ENTRY_FIRST_NAME_KANA_TEXT) ? '<span class="alert">' . ENTRY_FIRST_NAME_KANA_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php } ?>

<label class="inputLabel" for="lastname"><?php echo ENTRY_LAST_NAME; ?></label>
<?php echo zen_draw_input_field('lastname', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_lastname', '40') . ' id="lastname"') . (zen_not_null(ENTRY_LAST_NAME_TEXT) ? '<span class="alert">' . ENTRY_LAST_NAME_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<?php if (FURIKANA_NESESSARY) { ?>
<label class="inputLabel" for="lastname_kana" ><?php echo ENTRY_LAST_NAME_KANA; ?></label>
<?php echo zen_draw_input_field('lastname_kana', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_lastname_kana', '40') . ' id="lastname_kana"') . (zen_not_null(ENTRY_LAST_NAME_KANA_TEXT) ? '<span class="alert">' . ENTRY_LAST_NAME_KANA_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php } ?>

<label class="inputLabel" for="country"><?php echo ENTRY_COUNTRY; ?></label>
<?php
  $selected_country = ($_POST['country']) ? $country : SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY;
?>
<?php echo zen_get_country_list('country', $selected_country, 'id="country"') . (zen_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="alert">' . ENTRY_COUNTRY_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<label class="inputLabel" for="postcode"><?php echo ENTRY_POST_CODE; ?></label>
<?php echo zen_draw_input_field('postcode', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_postcode', '40') . ' id="postcode"') . (zen_not_null(ENTRY_POST_CODE_TEXT) ? '<span class="alert">' . ENTRY_POST_CODE_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<?php
  if (ACCOUNT_STATE == 'true') {
?>
<label class="inputLabel" for="state"><?php echo ENTRY_STATE; ?></label>

<?php
    if ($process == true || $entry_state_has_zones == true ) {
      if ($entry_state_has_zones == true) {
        echo zen_draw_pull_down_menu('state', $zones_array, $zone_name, ' id="state"');
      } else {
        echo zen_draw_input_field('state', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_state', '40') . ' id="state"');
      }
    } else {
      echo zen_draw_input_field('state', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_state', '40') . ' id="state"');
    }
    if (zen_not_null(ENTRY_STATE_TEXT)) echo '<span class="alert">' . ENTRY_STATE_TEXT . '</span>';?>
<br class="clearBoth" />
<?php
  }
?>

<label class="inputLabel" for="city"><?php echo ENTRY_CITY; ?></label>
<?php echo zen_draw_input_field('city', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_city', '40') . ' id="city"') . (zen_not_null(ENTRY_CITY_TEXT) ? '<span class="alert">' . ENTRY_CITY_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<label class="inputLabel" for="street-address"><?php echo ENTRY_STREET_ADDRESS; ?></label>
  <?php echo zen_draw_input_field('street_address', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_street_address', '40') . ' id="street-address"') . (zen_not_null(ENTRY_STREET_ADDRESS_TEXT) ? '<span class="alert">' . ENTRY_STREET_ADDRESS_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<?php
  if (ACCOUNT_SUBURB == 'true') {
?>
<label class="inputLabel" for="suburb"><?php echo ENTRY_SUBURB; ?></label>
<?php echo zen_draw_input_field('suburb', '', zen_set_field_length(TABLE_ADDRESS_BOOK, 'entry_suburb', '40') . ' id="suburb"') . (zen_not_null(ENTRY_SUBURB_TEXT) ? '<span class="alert">' . ENTRY_SUBURB_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php
  }
?>

</fieldset>

<fieldset>
<legend><?php echo TABLE_HEADING_PHONE_FAX_DETAILS; ?></legend>
<label class="inputLabel" for="telephone"><?php echo ENTRY_TELEPHONE_NUMBER; ?></label>
<?php echo zen_draw_input_field('telephone', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_telephone', '40') . ' id="telephone"') . (zen_not_null(ENTRY_TELEPHONE_NUMBER_TEXT) ? '<span class="alert">' . ENTRY_TELEPHONE_NUMBER_TEXT . '</span>': ''); ?>

<?php
  if (ACCOUNT_FAX_NUMBER == 'true') {
?>
<br class="clearBoth" />
<label class="inputLabel" for="fax"><?php echo ENTRY_FAX_NUMBER; ?></label>
<?php echo zen_draw_input_field('fax', $account->fields['customers_fax'], 'id="fax"') . (zen_not_null(ENTRY_FAX_NUMBER_TEXT) ? '<span class="alert">' . ENTRY_FAX_NUMBER_TEXT . '</span>': ''); ?>
<?php
  }
?>
</fieldset>

<?php
  if (ACCOUNT_DOB == 'true') {
?>
<fieldset>
<legend><?php echo TABLE_HEADING_DATE_OF_BIRTH; ?></legend>
<label class="inputLabel" for="dob"><?php echo ENTRY_DATE_OF_BIRTH; ?></label>
<?php echo zen_draw_input_field('dob','', 'id="dob"') . (zen_not_null(ENTRY_DATE_OF_BIRTH_TEXT) ? '<span class="alert">' . ENTRY_DATE_OF_BIRTH_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
</fieldset>
<?php
  }
?>

<fieldset>
<legend><?php echo TABLE_HEADING_LOGIN_DETAILS; ?></legend>
<label class="inputLabel" for="email-address"><?php echo ENTRY_EMAIL_ADDRESS; ?></label>
<?php echo zen_draw_input_field('email_address', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_email_address', '40') . ' id="email-address"') . (zen_not_null(ENTRY_EMAIL_ADDRESS_TEXT) ? '<span class="alert">' . ENTRY_EMAIL_ADDRESS_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<?php
  if ($phpBB->phpBB['installed'] == true) {
?>
<label class="inputLabel" for="nickname"><?php echo ENTRY_NICK; ?></label>
<?php echo zen_draw_input_field('nick','','id="nickname"') . (zen_not_null(ENTRY_NICK) ? '<span class="alert">' . ENTRY_NICK_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php
  }
?>

<label class="inputLabel" for="password-new"><?php echo ENTRY_PASSWORD; ?></label>
<?php echo zen_draw_password_field('password', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_password', '20') . ' id="password-new"') . (zen_not_null(ENTRY_PASSWORD_TEXT) ? '<span class="alert">' . ENTRY_PASSWORD_TEXT . '</span>': ''); ?>
<br class="clearBoth" />

<label class="inputLabel" for="password-confirm"><?php echo ENTRY_PASSWORD_CONFIRMATION; ?></label>
<?php echo zen_draw_password_field('confirmation', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_password', '20') . ' id="password-confirm"') . (zen_not_null(ENTRY_PASSWORD_CONFIRMATION_TEXT) ? '<span class="alert">' . ENTRY_PASSWORD_CONFIRMATION_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
</fieldset>

<fieldset>
<legend><?php echo ENTRY_EMAIL_PREFERENCE; ?></legend>
<?php
  if (ACCOUNT_NEWSLETTER_STATUS != 0) {
?>
<?php echo zen_draw_checkbox_field('newsletter', '1', (ACCOUNT_NEWSLETTER_STATUS == '1' ? false : true), 'id="newsletter-checkbox"') . '<label class="checkboxLabel" for="newsletter-checkbox">' . ENTRY_NEWSLETTER . '</label>' . (zen_not_null(ENTRY_NEWSLETTER_TEXT) ? '<span class="alert">' . ENTRY_NEWSLETTER_TEXT . '</span>': ''); ?>
<br class="clearBoth" />
<?php } ?>

<?php echo zen_draw_radio_field('email_format', 'HTML', (ACCOUNT_EMAIL_PREFERENCE == '1' ? true : false),'id="email-format-html"') . '<label class="radioButtonLabel" for="email-format-html">' . ENTRY_EMAIL_HTML_DISPLAY . '</label>' .  zen_draw_radio_field('email_format', 'TEXT', (ACCOUNT_EMAIL_PREFERENCE == '1' ? false : true), 'id="email-format-text"') . '<label class="radioButtonLabel" for="email-format-text">' . ENTRY_EMAIL_TEXT_DISPLAY . '</label>'; ?>
<br class="clearBoth" />
</fieldset>

<?php
  if (CUSTOMERS_REFERRAL_STATUS == 2) {
?>
<fieldset>

<legend><?php echo TABLE_HEADING_REFERRAL_DETAILS; ?></legend>
<label class="inputLabel" for="customers_referral"><?php echo ENTRY_CUSTOMERS_REFERRAL; ?></label>
<?php echo zen_draw_input_field('customers_referral', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_referral', '15') . ' id="customers_referral"'); ?>
<br class="clearBoth" />
</fieldset>
<?php } ?>
