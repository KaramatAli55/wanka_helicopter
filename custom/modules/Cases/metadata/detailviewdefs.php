<?php
$viewdefs ['Cases'] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'collapsed',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'priority',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'smsarea_c',
            'studio' => 'visible',
            'label' => 'LBL_SMSAREA',
          ),
          1 => 
          array (
            'name' => 'qifdomain_c',
            'studio' => 'visible',
            'label' => 'LBL_QIFDOMAIN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'qifnumber_c',
            'label' => 'LBL_QIFNUMBER',
          ),
          1 => 
          array (
            'name' => 'riskassessment_c',
            'label' => 'LBL_RISKASSESSMENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aircraft_c',
            'studio' => 'visible',
            'label' => 'LBL_AIRCRAFT',
          ),
          1 => 
          array (
            'name' => 'duedate_c',
            'label' => 'LBL_DUEDATE',
          ),
        ),
        5 => 
        array (
          0 => 'type',
          1 => 'account_name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
        8 => 
        array (
          0 => 'resolution',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
          1 => 
          array (
            'name' => 'internal',
            'studio' => 'visible',
            'label' => 'LBL_INTERNAL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'case_update_form',
            'studio' => 'visible',
            'label' => 'LBL_CASE_UPDATE_FORM',
          ),
        ),
        11 => 
        array (
          0 => 'status',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'aop_case_updates_threaded',
            'studio' => 'visible',
            'label' => 'LBL_AOP_CASE_UPDATES_THREADED',
          ),
          1 => 
          array (
            'name' => 'costcode_c',
            'studio' => 'visible',
            'label' => 'LBL_COSTCODE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'work_log',
            'comment' => 'Free-form text used to denote activities of interest',
            'label' => 'LBL_WORK_LOG',
          ),
        ),
      ),
    ),
  ),
);
?>
