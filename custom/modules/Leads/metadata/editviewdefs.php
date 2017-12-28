<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'last_name',
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
            'type' => 'varchar',
            'validateDependency' => false,
            'customCode' => '<input name="account_name" id="EditView_account_name" {if ($fields.converted.value == 1)}disabled="true"{/if} size="30" maxlength="255" type="text" value="{$fields.account_name.value}">',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
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
          0 => 
          array (
            'name' => 'status_description',
          ),
          1 => 
          array (
            'name' => 'lead_source_description',
          ),
        ),
        2 => 
        array (
          0 => 'opportunity_amount',
          1 => 'refered_by',
        ),
        3 => 
        array (
          0 => 'campaign_name',
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
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
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
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
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