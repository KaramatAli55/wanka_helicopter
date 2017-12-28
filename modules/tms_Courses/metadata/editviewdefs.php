<?php
$module_name = 'tms_Courses';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fees',
            'label' => 'LBL_FEES',
          ),
          1 => 
          array (
            'name' => 'ccosts',
            'label' => 'LBL_CCOSTS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'totalfees',
            'label' => 'LBL_TOTALFEES',
          ),
          1 => 
          array (
            'name' => 'foreignfees',
            'label' => 'LBL_FOREIGNFEES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'efts',
            'label' => 'LBL_EFTS',
          ),
          1 => 
          array (
            'name' => 'nzqacredits',
            'label' => 'LBL_NZQACREDITS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'classhours',
            'label' => 'LBL_CLASSHOURS',
          ),
          1 => 
          array (
            'name' => 'selfstudyhours',
            'label' => 'LBL_SELFSTUDYHOURS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'caaflighthours',
            'label' => 'LBL_CAAFLIGHTHOURS',
          ),
          1 => 
          array (
            'name' => 'whlflighthours',
            'label' => 'LBL_WHLFLIGHTHOURS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'weekstart',
            'label' => 'LBL_WEEKSTART',
          ),
          1 => 
          array (
            'name' => 'weeknumber',
            'label' => 'LBL_WEEKNUMBER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'nzqaunitstandard',
            'label' => 'LBL_NZQAUNITSTANDARD',
          ),
          1 => 
          array (
            'name' => 'nzqalevel',
            'studio' => 'visible',
            'label' => 'LBL_NZQALEVEL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'nzqadomain',
            'studio' => 'visible',
            'label' => 'LBL_NZQADOMAIN',
          ),
          1 => 
          array (
            'name' => 'nzqaversion',
            'studio' => 'visible',
            'label' => 'LBL_NZQAVERSION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'tms_programme_tms_courses_name',
          ),
          1 => 
          array (
            'name' => 'strand',
            'studio' => 'visible',
            'label' => 'LBL_STRAND',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
      ),
    ),
  ),
);
?>
