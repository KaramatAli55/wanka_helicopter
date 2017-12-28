<?php
$module_name = 'tms_TraineeProgrammeCourses';
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
  'TRAINEECOURSE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TRAINEECOURSE',
    'id' => 'TMS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PLANNEDSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDSTARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'PLANNEDENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDENDDATE',
    'width' => '10%',
    'default' => true,
  ),
  'SDRSUBMITDATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_SDRSUBMITDATE',
    'width' => '10%',
  ),
  'RESULT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RESULT',
    'width' => '10%',
    'default' => true,
  ),
  'TEC_COMPLETION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TEC_COMPLETION',
    'width' => '10%',
  ),
  'PERCENTRPL' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PERCENTRPL',
    'width' => '10%',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CHARGED_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CHARGED',
    'width' => '10%',
  ),
  'CHARGED_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_CHARGED_DATE',
    'width' => '10%',
  ),
  'COMPLETEHOURS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_COMPLETEHOURS',
    'width' => '10%',
    'default' => false,
  ),
  'VOSSTARTDATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_VOSSTARTDATE',
    'width' => '10%',
  ),
  'VOSPERIOD_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_VOSPERIOD',
    'width' => '10%',
  ),
  'SDRCOMPLETE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SDRCOMPLETE',
    'width' => '10%',
  ),
  'VOSENDDATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_VOSENDDATE',
    'width' => '10%',
  ),
  'TRAINEE_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TRAINEE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'COHORT_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COHORT',
    'width' => '10%',
  ),
  'EFTS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTS',
    'width' => '10%',
    'default' => false,
  ),
  'COMPETENTHOURS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_COMPETENTHOURS',
    'width' => '10%',
    'default' => false,
  ),
  'ACTUALENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'ACTUALSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
  'TRAINEEPROGRAMME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TRAINEEPROGRAMME',
    'id' => 'TMS_TRAINEEPROGRAMMES_ID_C',
    'link' => true,
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
