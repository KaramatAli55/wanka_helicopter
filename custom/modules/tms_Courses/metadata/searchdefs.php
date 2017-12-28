<?php
$module_name = 'tms_Courses';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'weeknumber' => 
      array (
        'type' => 'int',
        'label' => 'LBL_WEEKNUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'weeknumber',
      ),
      'weekstart' => 
      array (
        'type' => 'int',
        'label' => 'LBL_WEEKSTART',
        'width' => '10%',
        'default' => true,
        'name' => 'weekstart',
      ),
      'ccosts' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CCOSTS',
        'width' => '10%',
        'default' => true,
        'name' => 'ccosts',
      ),
      'nzqalevel' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_NZQALEVEL',
        'width' => '10%',
        'default' => true,
        'name' => 'nzqalevel',
      ),
      'nzqacredits' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NZQACREDITS',
        'width' => '10%',
        'default' => true,
        'name' => 'nzqacredits',
      ),
      'totalfees' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_TOTALFEES',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'totalfees',
      ),
      'nzqaversion' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_NZQAVERSION',
        'width' => '10%',
        'default' => true,
        'name' => 'nzqaversion',
      ),
      'caaflighthours' => 
      array (
        'type' => 'int',
        'label' => 'LBL_CAAFLIGHTHOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'caaflighthours',
      ),
      'nzqaunitstandard' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NZQAUNITSTANDARD',
        'width' => '10%',
        'default' => true,
        'name' => 'nzqaunitstandard',
      ),
      'strand' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STRAND',
        'width' => '10%',
        'default' => true,
        'name' => 'strand',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
