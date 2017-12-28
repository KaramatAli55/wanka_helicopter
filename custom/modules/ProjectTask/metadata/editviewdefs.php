<?php
$viewdefs ['ProjectTask'] = 
array (
  'EditView' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/ProjectTask/ProjectTask.js',
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
        'LBL_PANEL_TIMELINE' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'status',
            'customCode' => '<select name="{$fields.status.name}" id="{$fields.status.name}" title="" tabindex="s" onchange="update_percent_complete(this.value);">{if isset($fields.status.value) && $fields.status.value != ""}{html_options options=$fields.status.options selected=$fields.status.value}{else}{html_options options=$fields.status.options selected=$fields.status.default}{/if}</select>',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
          ),
          1 => 
          array (
            'name' => 'date_finish',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_due',
            'label' => 'LBL_DATE_DUE',
          ),
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
          1 => 
          array (
            'name' => 'project_name',
            'label' => 'LBL_PROJECT_NAME',
          ),
        ),
        4 => 
        array (
          0 => 'task_number',
          1 => 
          array (
            'name' => 'smsarea_c',
            'studio' => 'visible',
            'label' => 'LBL_SMSAREA',
          ),
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'duration_unit',
            'label' => 'LBL_DURATION_UNIT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
      ),
      'LBL_PANEL_TIMELINE' => 
      array (
        0 => 
        array (
          0 => 'estimated_effort',
          1 => 
          array (
            'name' => 'actual_effort',
            'label' => 'LBL_ACTUAL_EFFORT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'relationship_type',
            'studio' => 'visible',
            'label' => 'LBL_RELATIONSHIP_TYPE',
          ),
          1 => 'utilization',
        ),
        2 => 
        array (
          0 => 'order_number',
          1 => 'milestone_flag',
        ),
      ),
    ),
  ),
);
?>
