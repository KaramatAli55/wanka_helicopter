<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
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
            'comment' => 'Mobile phone number of the contact',
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
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
        ),
        5 => 
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
          1 => 'campaign_name',
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
