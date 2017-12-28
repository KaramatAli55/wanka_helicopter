<?php
$module_name = 'tms_Programme';
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
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nzqatype',
            'studio' => 'visible',
            'label' => 'LBL_NZQATYPE',
          ),
          1 => 
          array (
            'name' => 'nzqainstitute',
            'label' => 'LBL_NZQAINSTITUTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nzqacategory',
            'label' => 'LBL_NZQACATEGORY',
          ),
          1 => 
          array (
            'name' => 'nzqaclass',
            'label' => 'LBL_NZQACLASS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nzqacode',
            'label' => 'LBL_NZQACODE',
          ),
          1 => 
          array (
            'name' => 'nzqaschedule',
            'label' => 'LBL_NZQASCHEDULE',
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
          1 => 'date_entered',
        ),
        1 => 
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
