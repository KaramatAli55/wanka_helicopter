<?php
$module_name='tms_TraineeProgrammes';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'tms_TraineeProgrammes',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'programme' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PROGRAMME',
      'id' => 'TMS_PROGRAMME_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'tms_Programme',
      'target_record_key' => 'tms_programme_id_c',
    ),
    'plannedstartdate' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PLANNEDSTARTDATE',
      'width' => '10%',
      'default' => true,
    ),
    'eftsconsumed' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_EFTSCONSUMED',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'tms_TraineeProgrammes',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'tms_TraineeProgrammes',
      'width' => '5%',
      'default' => true,
    ),
  ),
);