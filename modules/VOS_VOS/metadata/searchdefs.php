<?php
$module_name = 'VOS_VOS';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'startdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_STARTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'startdate',
      ),
      'enddate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ENDDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'enddate',
      ),
      'submitdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_SUBMITDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'submitdate',
      ),
      'vosstatus' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VOSSTATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'vosstatus',
      ),
      'vosperiod' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VOSPERIOD',
        'width' => '10%',
        'default' => true,
        'name' => 'vosperiod',
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