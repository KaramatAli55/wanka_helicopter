<?php
$module_name = 'tms_Programme';
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
  'NZQACATEGORY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NZQACATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'NZQACLASS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NZQACLASS',
    'width' => '10%',
    'default' => true,
  ),
  'NZQAINSTITUTE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NZQAINSTITUTE',
    'width' => '10%',
    'default' => true,
  ),
  'NZQASCHEDULE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NZQASCHEDULE',
    'width' => '10%',
    'default' => true,
  ),
  'NZQATYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NZQATYPE',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NZQACODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NZQACODE',
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
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
