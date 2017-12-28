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
  'BREAKSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BREAKSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
);
?>
