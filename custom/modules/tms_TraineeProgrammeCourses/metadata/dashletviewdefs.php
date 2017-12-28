<?php
$dashletData['tms_TraineeProgrammeCoursesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'trainee_c' => 
  array (
    'default' => '',
  ),
  'cohort_c' => 
  array (
    'default' => '',
  ),
  'plannedstartdate' => 
  array (
    'default' => '',
  ),
  'plannedenddate' => 
  array (
    'default' => '',
  ),
  'actualstartdate' => 
  array (
    'default' => '',
  ),
  'actualenddate' => 
  array (
    'default' => '',
  ),
  'vosstartdate_c' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['tms_TraineeProgrammeCoursesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'traineecourse_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TRAINEECOURSE',
    'id' => 'TMS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'plannedstartdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDSTARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'plannedenddate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDENDDATE',
    'width' => '10%',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'percentrpl' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PERCENTRPL',
    'width' => '10%',
  ),
  'trainee_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TRAINEE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'cohort_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COHORT',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'vosperiod_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_VOSPERIOD',
    'width' => '10%',
  ),
  'efts' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTS',
    'width' => '10%',
    'default' => false,
  ),
  'actualenddate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'actualstartdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
  'traineeprogramme' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TRAINEEPROGRAMME',
    'id' => 'TMS_TRAINEEPROGRAMMES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
