<?php
$module_name = 'SDR_SDR';
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
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sdrsubmitdate',
            'label' => 'LBL_SDRSUBMITDATE',
          ),
          1 => 
          array (
            'name' => 'sdryear',
            'label' => 'LBL_SDRYEAR',
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
            'name' => 'efts',
            'label' => 'LBL_EFTS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'eftspermonth',
            'label' => 'LBL_EFTSPERMONTH',
          ),
          1 => 
          array (
            'name' => 'eftslastmonth',
            'label' => 'LBL_EFTSLASTMONTH',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'eftsjan',
            'label' => 'LBL_EFTSJAN',
          ),
          1 => 
          array (
            'name' => 'eftsfeb',
            'label' => 'LBL_EFTSFEB',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'eftsmar',
            'label' => 'LBL_EFTSMAR',
          ),
          1 => 
          array (
            'name' => 'eftsapr',
            'label' => 'LBL_EFTSAPR',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'eftsmay',
            'label' => 'LBL_EFTSMAY',
          ),
          1 => 
          array (
            'name' => 'eftsjun',
            'label' => 'LBL_EFTSJUN',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'eftsjul',
            'label' => 'LBL_EFTSJUL',
          ),
          1 => 
          array (
            'name' => 'eftsaug',
            'label' => 'LBL_EFTSAUG',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'eftssep',
            'label' => 'LBL_EFTSSEP',
          ),
          1 => 
          array (
            'name' => 'eftsoct',
            'label' => 'LBL_EFTSOCT',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'eftsnov',
            'label' => 'LBL_EFTSNOV',
          ),
          1 => 
          array (
            'name' => 'eftsdec',
            'label' => 'LBL_EFTSDEC',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'trainee',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEE',
          ),
          1 => 
          array (
            'name' => 'traineecourse',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEECOURSE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'traineeprogramme',
            'studio' => 'visible',
            'label' => 'LBL_TRAINEEPROGRAMME',
          ),
        ),
      ),
    ),
  ),
);
?>
