<?php
$module_name = 'tms_TraineeProgrammes';
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
          'panelDefault' => 'collapsed',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contact',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
          1 => 
          array (
            'name' => 'programme',
            'studio' => 'visible',
            'label' => 'LBL_PROGRAMME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cohort',
            'label' => 'LBL_COHORT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'plannedenddate',
            'label' => 'LBL_PLANNEDENDDATE',
          ),
          1 => 
          array (
            'name' => 'plannedstartdate',
            'label' => 'LBL_PLANNEDSTARTDATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'eftsconsumed',
            'label' => 'LBL_EFTSCONSUMED',
          ),
          1 => 
          array (
            'name' => 'totalefts',
            'label' => 'LBL_TOTALEFTS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'totalfundspaid',
            'label' => 'LBL_TOTALFUNDSPAID',
          ),
          1 => 
          array (
            'name' => 'totalfundsavailable',
            'label' => 'LBL_TOTALFUNDSAVAILABLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'traineecontribution',
            'label' => 'LBL_TRAINEECONTRIBUTION',
          ),
          1 => 
          array (
            'name' => 'paymentoption',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTOPTION',
          ),
        ),
        7 => 
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
        8 => 
        array (
          0 => 
          array (
            'name' => 'rplflighthours_c',
            'label' => 'LBL_RPLFLIGHTHOURS',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'studyoption_c',
            'studio' => 'visible',
            'label' => 'LBL_STUDYOPTION',
          ),
          1 => 
          array (
            'name' => 'totalfees_c',
            'label' => 'LBL_TOTALFEES',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'sdrsubmitdate_c',
            'label' => 'LBL_SDRSUBMITDATE',
          ),
          1 => 
          array (
            'name' => 'strand_c',
            'studio' => 'visible',
            'label' => 'LBL_STRAND',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'hoursconsumed_c',
            'label' => 'LBL_HOURSCONSUMED',
          ),
          1 => 
          array (
            'name' => 'flighthoursperweek_c',
            'label' => 'LBL_FLIGHTHOURSPERWEEK',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
