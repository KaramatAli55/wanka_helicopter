<?php
$module_name = 'tms_TraineeProgrammeCourses';
$viewdefs [$module_name] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'charged_c',
            'label' => 'LBL_CHARGED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'charged_date_c',
            'label' => 'LBL_CHARGED_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tec_completion_c',
            'studio' => 'visible',
            'label' => 'LBL_TEC_COMPLETION',
          ),
          1 => 
          array (
            'name' => 'result',
            'studio' => 'visible',
            'label' => 'LBL_RESULT',
          ),
        ),
        3 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'traineeprogramme',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEEPROGRAMME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'plannedstartdate',
            'label' => 'LBL_PLANNEDSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'plannedenddate',
            'label' => 'LBL_PLANNEDENDDATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'actualstartdate',
            'label' => 'LBL_ACTUALSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'actualenddate',
            'label' => 'LBL_ACTUALENDDATE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'competenthours',
            'label' => 'LBL_COMPETENTHOURS',
          ),
          1 => 
          array (
            'name' => 'completehours',
            'label' => 'LBL_COMPLETEHOURS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'efts',
            'label' => 'LBL_EFTS',
          ),
          1 => 
          array (
            'name' => 'percentrpl',
            'label' => 'LBL_PERCENTRPL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'sdrsubmitdate_c',
            'label' => 'LBL_SDRSUBMITDATE',
          ),
          1 => 
          array (
            'name' => 'vosperiod_c',
            'label' => 'LBL_VOSPERIOD',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'trainee_c',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEE',
          ),
          1 => 
          array (
            'name' => 'traineecourse_c',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEECOURSE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'cohort_c',
            'studio' => 'visible',
            'label' => 'LBL_COHORT',
          ),
          1 => 
          array (
            'name' => 'sdrcomplete_c',
            'label' => 'LBL_SDRCOMPLETE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'vosstartdate_c',
            'label' => 'LBL_VOSSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'vosenddate_c',
            'label' => 'LBL_VOSENDDATE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
