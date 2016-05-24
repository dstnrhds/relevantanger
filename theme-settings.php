<?php
/**
<<<<<<< HEAD
 * @file
 * Contains the theme's settings form.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function RelevantAnger_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
=======
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function relevantanger_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
>>>>>>> 7ac2e7ea2e3a668eebd93e029d65a42280aff5e7
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
<<<<<<< HEAD
  $form['Relevant Anger_example'] = array(
  '#type'          => 'checkbox',
  '#title'         => t('Relevant Anger sample setting'),
  '#default_value' => theme_get_setting('Relevant Anger_example'),
  '#description'   => t("This example option doesn't do anything."),
  );
  // */

  /* -- Delete this line if you want to remove this base theme setting.
  // We don't need breadcrumbs to be configurable on this site.
  unset($form['breadcrumb']);
=======
  $form['relevantanger_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('relevantanger sample setting'),
    '#default_value' => theme_get_setting('relevantanger_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
>>>>>>> 7ac2e7ea2e3a668eebd93e029d65a42280aff5e7
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
