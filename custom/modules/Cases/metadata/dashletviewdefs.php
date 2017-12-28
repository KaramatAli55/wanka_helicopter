<?php
$dashletData['CasesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'state' => 
  array (
    'default' => '',
  ),
  'smsarea_c' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['CasesDashlet']['columns'] = array (
  'case_number' => 
  array (
    'width' => '6%',
    'label' => 'LBL_NUMBER',
    'default' => true,
    'name' => 'case_number',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'priority' => 
  array (
    'width' => '15%',
    'label' => 'LBL_PRIORITY',
    'default' => true,
    'name' => 'priority',
  ),
  'duedate_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DUEDATE',
    'width' => '10%',
    'name' => 'duedate_c',
  ),
  'smsarea_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SMSAREA',
    'width' => '10%',
    'name' => 'smsarea_c',
  ),
  'state' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATE',
    'width' => '10%',
    'name' => 'state',
  ),
  'account_name' => 
  array (
    'width' => '29%',
    'link' => true,
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'ACLTag' => 'ACCOUNT',
    'label' => 'LBL_ACCOUNT_NAME',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
    'name' => 'account_name',
    'default' => false,
  ),
  'resolution' => 
  array (
    'width' => '8%',
    'label' => 'LBL_RESOLUTION',
    'name' => 'resolution',
    'default' => false,
  ),
  'qifnumber_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_QIFNUMBER',
    'width' => '10%',
    'name' => 'qifnumber_c',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => false,
    'name' => 'status',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
