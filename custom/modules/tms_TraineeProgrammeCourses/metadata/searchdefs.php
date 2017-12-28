<?php
$module_name = 'tms_TraineeProgrammeCourses';
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
      'cohort_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COHORT',
        'width' => '10%',
        'name' => 'cohort_c',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'plannedstartdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PLANNEDSTARTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'plannedstartdate',
      ),
      'plannedenddate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PLANNEDENDDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'plannedenddate',
      ),
      'result' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RESULT',
        'width' => '10%',
        'default' => true,
        'name' => 'result',
      ),
      'sdrsubmitdate_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_SDRSUBMITDATE',
        'width' => '10%',
        'name' => 'sdrsubmitdate_c',
      ),
      'percentrpl' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PERCENTRPL',
        'width' => '10%',
        'name' => 'percentrpl',
      ),
      'trainee_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TRAINEE',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'trainee_c',
      ),
      'competenthours' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_COMPETENTHOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'competenthours',
      ),
      'completehours' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_COMPLETEHOURS',
        'width' => '10%',
        'default' => true,
        'name' => 'completehours',
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
        'name' => 'traineecourse_c',
      ),
      'vosperiod_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_VOSPERIOD',
        'width' => '10%',
        'name' => 'vosperiod_c',
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
