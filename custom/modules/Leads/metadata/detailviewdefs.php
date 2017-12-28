<?php
$viewdefs ['Leads'] = 
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
          3 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 'status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 'title',
          1 => 'phone_mobile',
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
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nationality_c',
            'studio' => 'visible',
            'label' => 'LBL_NATIONALITY',
          ),
          1 => 
          array (
            'name' => 'username_c',
            'label' => 'LBL_USERNAME',
          ),
        ),
        5 => 
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
          ),
        ),
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'econtactname_c',
            'label' => 'LBL_ECONTACTNAME',
          ),
          1 => 
          array (
            'name' => 'econtactnumber_c',
            'label' => 'LBL_ECONTACTNUMBER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'industry_c',
            'studio' => 'visible',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
        10 => 
        array (
          0 => 'email1',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'lead_source',
        ),
        1 => 
        array (
          0 => 'status_description',
          1 => 'lead_source_description',
        ),
        2 => 
        array (
          0 => 'opportunity_amount',
          1 => 'refered_by',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'programmetype_c',
            'studio' => 'visible',
            'label' => 'LBL_PROGRAMMETYPE',
          ),
          1 => 
          array (
            'name' => 'passport_c',
            'label' => 'LBL_PASSPORT',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'visa_c',
            'studio' => 'visible',
            'label' => 'LBL_VISA',
          ),
          1 => 
          array (
            'name' => 'cohort_c',
            'studio' => 'visible',
            'label' => 'LBL_COHORT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'insurance_c',
            'label' => 'LBL_INSURANCE',
          ),
          1 => 
          array (
            'name' => 'nsn_c',
            'label' => 'LBL_NSN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'adapt_c',
            'label' => 'LBL_ADAPT',
          ),
          1 => 
          array (
            'name' => 'ielts_c',
            'label' => 'LBL_IELTS',
          ),
        ),
        6 => 
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
        7 => 
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
        8 => 
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
        9 => 
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
      'LBL_PANEL_ASSIGNMENT' => 
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
            'name' => 'citizenship_c',
            'studio' => 'visible',
            'label' => 'LBL_CITIZENSHIP',
          ),
          1 => 
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
    ),
  ),
);
?>
