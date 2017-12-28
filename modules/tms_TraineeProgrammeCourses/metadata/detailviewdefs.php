<?php
$module_name = 'tms_TraineeProgrammeCourses';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 
          array (
            'name' => 'result',
            'studio' => 'visible',
            'label' => 'LBL_RESULT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'traineeprogramme',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEEPROGRAMME',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'actualenddate',
            'label' => 'LBL_ACTUALENDDATE',
          ),
          1 => 
          array (
            'name' => 'actualstartdate',
            'label' => 'LBL_ACTUALSTARTDATE',
          ),
        ),
        4 => 
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
        5 => 
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
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
