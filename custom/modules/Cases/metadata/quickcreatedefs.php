<?php
$viewdefs ['Cases'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'smsarea_c',
            'studio' => 'visible',
            'label' => 'LBL_SMSAREA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => 'The type of issue (ex: issue, feature)',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'duedate_c',
            'label' => 'LBL_DUEDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'qifdomain_c',
            'studio' => 'visible',
            'label' => 'LBL_QIFDOMAIN',
          ),
          1 => 
          array (
            'name' => 'qifnumber_c',
            'label' => 'LBL_QIFNUMBER',
          ),
        ),
        4 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'aircraft_c',
            'studio' => 'visible',
            'label' => 'LBL_AIRCRAFT',
          ),
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
