<?php
$module_name = 'SDR_SDR';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'EFTSJAN' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSJAN',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSFEB' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSFEB',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSMAR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSMAR',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSAPR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSAPR',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSMAY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSMAY',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSJUN' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSJUN',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSJUL' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSJUL',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSAUG' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSAUG',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSSEP' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSSEP',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSOCT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSOCT',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSNOV' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSNOV',
    'width' => '10%',
    'default' => true,
  ),
  'EFTSDEC' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSDEC',
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
  'EFTSPERMONTH' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSPERMONTH',
    'width' => '10%',
    'default' => false,
  ),
  'SDRYEAR' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SDRYEAR',
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
  'SDRSUBMITDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SDRSUBMITDATE',
    'width' => '10%',
    'default' => false,
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => false,
  ),
  'ENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'EFTSLASTMONTH' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSLASTMONTH',
    'width' => '10%',
    'default' => false,
  ),
);
?>
