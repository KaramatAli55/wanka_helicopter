<?php
$module_name = 'tms_Courses';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'WHLFLIGHTHOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_WHLFLIGHTHOURS',
    'width' => '10%',
    'default' => true,
  ),
  'CCOSTS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CCOSTS',
    'width' => '10%',
    'default' => true,
  ),
  'NZQACREDITS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NZQACREDITS',
    'width' => '10%',
    'default' => true,
  ),
  'NZQAUNITSTANDARD' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NZQAUNITSTANDARD',
    'width' => '10%',
    'default' => true,
  ),
  'WEEKSTART' => 
  array (
    'type' => 'int',
    'label' => 'LBL_WEEKSTART',
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
  'NZQAVERSION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NZQAVERSION',
    'width' => '10%',
    'default' => true,
  ),
  'FEES' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_FEES',
    'currency_format' => true,
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
  'COURSENOTES_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COURSENOTES',
    'sortable' => false,
    'width' => '10%',
  ),
  'STRAND' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STRAND',
    'width' => '10%',
    'default' => false,
  ),
  'CAAFLIGHTHOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CAAFLIGHTHOURS',
    'width' => '10%',
    'default' => false,
  ),
  'FOREIGNFEES' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_FOREIGNFEES',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'NZQADOMAIN' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NZQADOMAIN',
    'width' => '10%',
    'default' => false,
  ),
  'NZQALEVEL' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NZQALEVEL',
    'width' => '10%',
    'default' => false,
  ),
  'TOTALFEES' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFEES',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'SELFSTUDYHOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SELFSTUDYHOURS',
    'width' => '10%',
    'default' => false,
  ),
  'CLASSHOURS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CLASSHOURS',
    'width' => '10%',
    'default' => false,
  ),
  'WEEKNUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_WEEKNUMBER',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
);
?>
