<?php
$listViewDefs ['Contacts'] = 
array (
  'COHORT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COHORT',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'CLIENT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT',
    'width' => '10%',
  ),
  'USERNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_USERNAME',
    'width' => '10%',
  ),
  'NATIONALITY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_NATIONALITY',
    'width' => '10%',
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'ECONTACTNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ECONTACTNAME',
    'width' => '10%',
  ),
  'ECONTACT_NUMBER_C' => 
  array (
    'type' => 'phone',
    'default' => true,
    'label' => 'LBL_ECONTACT_NUMBER',
    'width' => '10%',
  ),
  'QUALIFICATION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_QUALIFICATION',
    'width' => '10%',
  ),
  'ASPEQPASSWORD_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ASPEQPASSWORD',
    'width' => '10%',
  ),
  'ASPEQUSERNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ASPEQUSERNAME',
    'width' => '10%',
  ),
  'PROGRAMMETYPE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROGRAMMETYPE',
    'width' => '10%',
  ),
  'PRIORACTIVITY_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRIORACTIVITY',
    'width' => '10%',
  ),
  'SECONDARYYEAR_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_SECONDARYYEAR',
    'width' => '10%',
  ),
  'EMAIL_OPT_OUT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_OPT_OUT',
    'default' => false,
  ),
  'IWI_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_IWI',
    'width' => '10%',
  ),
  'DESTDATA_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DESTDATA',
    'width' => '10%',
  ),
  'IELTS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_IELTS',
    'width' => '10%',
  ),
  'INSURANCE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_INSURANCE',
    'width' => '10%',
  ),
  'POSTCODE12_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_POSTCODE12',
    'width' => '10%',
  ),
  'SECQUAL_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SECQUAL',
    'width' => '10%',
  ),
  'CURRENTLICENCE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CURRENTLICENCE',
    'width' => '10%',
  ),
  'JJWG_MAPS_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_JJWG_MAPS_ADDRESS',
    'width' => '10%',
  ),
  'WEIGHT_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_WEIGHT',
    'width' => '10%',
  ),
  'RESIDENT_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RESIDENT',
    'width' => '10%',
  ),
  'INDUSTRY_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
  ),
  'TERTIARYYEAR_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TERTIARYYEAR',
    'width' => '10%',
  ),
  'CITIZENSHIP_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CITIZENSHIP',
    'width' => '10%',
  ),
  'SECONDARYSCHOOL_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SECONDARYSCHOOL',
    'width' => '10%',
  ),
  'VISA_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_VISA',
    'width' => '10%',
  ),
  'IRD_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_IRD',
    'width' => '10%',
  ),
  'PORTAL_USER_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PORTAL_USER_TYPE',
    'width' => '10%',
  ),
  'EVENT_STATUS_ID' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_LIST_ACCEPT_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'EVENT_INVITE_ID' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_LIST_INVITE_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'ACCEPT_STATUS_ID' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_LIST_ACCEPT_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'CAMPAIGN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => '10%',
    'default' => false,
  ),
  'REPORT_TO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REPORTS_TO',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY_ROLE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_OPPORTUNITY_ROLE',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY_ROLE_ID' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_OPPORTUNITY_ROLE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'EMAIL_AND_NAME1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'ASSISTANT_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_ASSISTANT_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'ASSISTANT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASSISTANT',
    'width' => '10%',
    'default' => false,
  ),
  'ALT_ADDRESS_STREET_3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_STREET_3',
    'width' => '10%',
    'default' => false,
  ),
  'ALT_ADDRESS_STREET_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALT_ADDRESS_STREET_2',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET_3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET_3',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET_2',
    'width' => '10%',
    'default' => false,
  ),
  'FULL_NAME' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'SALUTATION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SALUTATION',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'DEPARTMENT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DEPARTMENT',
    'default' => false,
  ),
  'ETHNICITY_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ETHNICITY',
    'width' => '10%',
  ),
  'NSN_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_NSN',
    'width' => '10%',
  ),
  'PAYMENTOPTION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTOPTION',
    'width' => '10%',
  ),
  'LEARNINGOPTION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_LEARNINGOPTION',
    'width' => '10%',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => false,
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => false,
  ),
  'GENDER_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GENDER',
    'width' => '10%',
  ),
  'STUDYLINKCLIENT_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_STUDYLINKCLIENT',
    'width' => '10%',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => false,
  ),
  'COMPLETION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COMPLETION',
    'width' => '10%',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '34%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'default' => false,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FAX_PHONE',
    'default' => false,
  ),
  'EMAIL2' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL2_LINK}{$EMAIL2}</a>',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'default' => false,
  ),
  'PROGRAMMESTART_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_PROGRAMMESTART',
    'width' => '10%',
  ),
  'PASSPORT_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PASSPORT',
    'width' => '10%',
  ),
  'ADAPT_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ADAPT',
    'width' => '10%',
  ),
  'FPP_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FPP',
    'width' => '10%',
  ),
  'MEDICAL_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MEDICAL',
    'width' => '10%',
  ),
  'PROGRAMME_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROGRAMME',
    'width' => '10%',
  ),
  'PRIMARY_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'ALT_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'ALT_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STREET',
    'default' => false,
  ),
  'ALT_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_CITY',
    'default' => false,
  ),
  'ALT_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STATE',
    'default' => false,
  ),
  'ALT_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'SYNC_CONTACT' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SYNC_CONTACT',
    'width' => '10%',
    'default' => false,
    'sortable' => false,
  ),
);
?>
