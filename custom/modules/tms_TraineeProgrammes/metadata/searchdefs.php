<?php
$module_name = 'tms_TraineeProgrammes';
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
      'programme' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROGRAMME',
        'id' => 'TMS_PROGRAMME_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'programme',
      ),
      'plannedstartdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PLANNEDSTARTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'plannedstartdate',
      ),
      'contact' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CONTACT',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'contact',
      ),
      'cohort' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_COHORT',
        'width' => '10%',
        'default' => true,
        'name' => 'cohort',
      ),
      'strand_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STRAND',
        'width' => '10%',
        'name' => 'strand_c',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status_c',
      ),
      'totalefts' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_TOTALEFTS',
        'width' => '10%',
        'default' => true,
        'name' => 'totalefts',
      ),
      'eftsconsumed' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_EFTSCONSUMED',
        'width' => '10%',
        'default' => true,
        'name' => 'eftsconsumed',
      ),
      'studyoption_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STUDYOPTION',
        'width' => '10%',
        'name' => 'studyoption_c',
      ),
      'actualstartdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ACTUALSTARTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'actualstartdate',
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
