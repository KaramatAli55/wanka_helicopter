<?php
$searchdefs ['Tasks'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
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
        'type' => 'datetimecombo',
        'studio' => 
        array (
          'required' => true,
          'no_duplicate' => true,
        ),
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_start',
      ),
      'date_due' => 
      array (
        'type' => 'datetimecombo',
        'studio' => 
        array (
          'required' => true,
          'no_duplicate' => true,
        ),
        'label' => 'LBL_DUE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_due',
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
      'priority' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_PRIORITY',
        'width' => '10%',
        'default' => true,
        'name' => 'priority',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
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
