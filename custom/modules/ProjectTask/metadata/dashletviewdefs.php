<?php
$dashletData['ProjectTaskDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'project_name' => 
  array (
    'default' => '',
  ),
  'date_finish' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ProjectTaskDashlet']['columns'] = array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'project_task_id' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PROJECT_TASK_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'project_task_id',
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
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
    'name' => 'status',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'priority' => 
    array (
      'default' => '',
    ),
    'date_start' => 
    array (
      'default' => '',
    ),
    'date_finish' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'label' => 'LBL_ASSIGNED_TO',
      'default' => 'Paul Johnson',
    ),
    'width' => '10%',
    'default' => false,
    'name' => 'searchfields',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'time_start' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TIME_START',
    'width' => '10%',
    'default' => false,
    'name' => 'time_start',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
    'name' => 'date_entered',
  ),
);
