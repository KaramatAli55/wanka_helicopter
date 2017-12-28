<?php
$module_name = 'tms_TraineeProgrammes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'TRAINEECONTRIBUTION' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TRAINEECONTRIBUTION',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFUNDSPAID' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFUNDSPAID',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFUNDSAVAILABLE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFUNDSAVAILABLE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PLANNEDSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDSTARTDATE',
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
  'ACTUALSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
  'PLANNEDENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'EFTSCONSUMED' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSCONSUMED',
    'width' => '10%',
    'default' => false,
  ),
  'PROGRAMME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROGRAMME',
    'id' => 'TMS_PROGRAMME_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'ACTUALENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'PAYMENTOPTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTOPTION',
    'width' => '10%',
    'default' => false,
  ),
  'TOTALEFTS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTALEFTS',
    'width' => '10%',
    'default' => false,
  ),
);
?>
