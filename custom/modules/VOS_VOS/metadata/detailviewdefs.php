<?php
$module_name = 'VOS_VOS';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'efts',
            'label' => 'LBL_EFTS',
          ),
          1 => 
          array (
            'name' => 'totalfees',
            'label' => 'LBL_TOTALFEES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'startdate',
            'label' => 'LBL_STARTDATE',
          ),
          1 => 
          array (
            'name' => 'enddate',
            'label' => 'LBL_ENDDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'breakstartdate',
            'label' => 'LBL_BREAKSTARTDATE',
          ),
          1 => 
          array (
            'name' => 'breakenddate',
            'label' => 'LBL_BREAKENDDATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'submitdate',
            'label' => 'LBL_SUBMITDATE',
          ),
          1 => 
          array (
            'name' => 'vosstatus',
            'studio' => 'visible',
            'label' => 'LBL_VOSSTATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'vosperiod',
            'studio' => 'visible',
            'label' => 'LBL_VOSPERIOD',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'trainee',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEE',
          ),
        ),
      ),
    ),
  ),
);
?>
