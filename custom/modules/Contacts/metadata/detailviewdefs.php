<?php
$viewdefs ['Contacts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
          'AOP_CREATE' => 
          array (
            'customCode' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'createPortalUser\';" value="{$MOD.LBL_CREATE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'createPortalUser\';',
                'name' => 'buttonCreatePortalUser',
                'id' => 'createPortalUser_button',
              ),
              'template' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_DISABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'disablePortalUser\';" value="{$MOD.LBL_DISABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'disablePortalUser\';',
                'name' => 'buttonDisablePortalUser',
                'id' => 'disablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_ENABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'enablePortalUser\';" value="{$MOD.LBL_ENABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'enablePortalUser\';',
                'name' => 'buttonENablePortalUser',
                'id' => 'enablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'username_c',
            'label' => 'LBL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'cohort_c',
            'studio' => 'visible',
            'label' => 'LBL_COHORT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'nationality_c',
            'studio' => 'visible',
            'label' => 'LBL_NATIONALITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'client_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT',
          ),
          1 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'econtactname_c',
            'label' => 'LBL_ECONTACTNAME',
          ),
          1 => 
          array (
            'name' => 'econtact_number_c',
            'label' => 'LBL_ECONTACT_NUMBER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'aspequsername_c',
            'label' => 'LBL_ASPEQUSERNAME',
          ),
          1 => 
          array (
            'name' => 'aspeqpassword_c',
            'label' => 'LBL_ASPEQPASSWORD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'passport_c',
            'label' => 'LBL_PASSPORT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'weight_c',
            'label' => 'LBL_WEIGHT',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nsn_c',
            'label' => 'LBL_NSN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'studylinkclient_c',
            'label' => 'LBL_STUDYLINKCLIENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'programme_c',
            'studio' => 'visible',
            'label' => 'LBL_PROGRAMME',
          ),
          1 => 
          array (
            'name' => 'programmestart_c',
            'label' => 'LBL_PROGRAMMESTART',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'programmetype_c',
            'studio' => 'visible',
            'label' => 'LBL_PROGRAMMETYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'resident_c',
            'label' => 'LBL_RESIDENT',
          ),
          1 => 
          array (
            'name' => 'ethnicity_c',
            'studio' => 'visible',
            'label' => 'LBL_ETHNICITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'visa_c',
            'studio' => 'visible',
            'label' => 'LBL_VISA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'insurance_c',
            'label' => 'LBL_INSURANCE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ielts_c',
            'label' => 'LBL_IELTS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'qualification_c',
            'studio' => 'visible',
            'label' => 'LBL_QUALIFICATION',
          ),
          1 => 
          array (
            'name' => 'fpp_c',
            'label' => 'LBL_FPP',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'medical_c',
            'studio' => 'visible',
            'label' => 'LBL_MEDICAL',
          ),
          1 => 
          array (
            'name' => 'accommodation_c',
            'label' => 'LBL_ACCOMMODATION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'learningoption_c',
            'studio' => 'visible',
            'label' => 'LBL_LEARNINGOPTION',
          ),
          1 => 
          array (
            'name' => 'paymentoption_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTOPTION',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'currentlicence_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENTLICENCE',
          ),
          1 => 
          array (
            'name' => 'ird_c',
            'label' => 'LBL_IRD',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'secondaryschool_c',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARYSCHOOL',
          ),
          1 => 
          array (
            'name' => 'secondaryyear_c',
            'label' => 'LBL_SECONDARYYEAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prioractivity_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORACTIVITY',
          ),
          1 => 
          array (
            'name' => 'tertiaryyear_c',
            'label' => 'LBL_TERTIARYYEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'iwi_c',
            'studio' => 'visible',
            'label' => 'LBL_IWI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'secqual_c',
            'studio' => 'visible',
            'label' => 'LBL_SECQUAL',
          ),
          1 => 
          array (
            'name' => 'postcode12_c',
            'label' => 'LBL_POSTCODE12',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'comment' => 'How did the contact come about',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'industry_c',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'photo',
            'label' => 'LBL_PHOTO',
            'tabindex' => '19',
          ),
        ),
      ),
    ),
  ),
);
?>
