<?php
$module_name = 'VOS_VOS';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'COHORT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COHORT',
    'width' => '10%',
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'ENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ENDDATE',
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFEES' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFEES',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'EFTS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTS',
    'width' => '10%',
    'default' => true,
  ),
  'VOSSTATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VOSSTATUS',
    'width' => '10%',
    'default' => true,
  ),
  'VOSPERIOD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VOSPERIOD',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'BREAKENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BREAKENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'TRAINEE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TRAINEE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'SUBMITDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SUBMITDATE',
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
  'TRAINEEPROGRAMME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TRAINEEPROGRAMME',
    'id' => 'TMS_TRAINEEPROGRAMMES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'REQUESTEDFEES_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_REQUESTEDFEES',
    'currency_format' => true,
    'width' => '10%',
  ),
  'BREAKSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BREAKSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
);
?>
