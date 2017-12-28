<?php
$searchdefs ['ProjectTask'] = 
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
      'date_start' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_START',
        'width' => '10%',
        'default' => true,
        'name' => 'date_start',
      ),
      'date_due' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_DUE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_due',
      ),
      'date_finish' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_FINISH',
        'width' => '10%',
        'default' => true,
        'name' => 'date_finish',
      ),
      'project_name' => 
      array (
        'name' => 'project_name',
        'label' => 'LBL_PROJECT_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_PRIORITY',
        'width' => '10%',
        'default' => true,
        'name' => 'priority',
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
      'status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
