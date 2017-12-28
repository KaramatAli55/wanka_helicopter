<?php
$module_name = 'tms_TraineeProgrammes';
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
          'panelDefault' => 'collapsed',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cohort',
            'label' => 'LBL_COHORT',
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
            'name' => 'eftsconsumed',
            'label' => 'LBL_EFTSCONSUMED',
          ),
          1 => 
          array (
            'name' => 'totalefts',
            'label' => 'LBL_TOTALEFTS',
          ),
        ),
        4 => 
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
        5 => 
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
