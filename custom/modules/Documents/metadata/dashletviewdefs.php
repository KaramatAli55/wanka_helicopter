<?php
$dashletData['DocumentsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'document_name' => 
  array (
    'default' => '',
  ),
  'category_id' => 
  array (
    'default' => '',
  ),
  'subcategory_id' => 
  array (
    'default' => '',
  ),
  'status_id' => 
  array (
    'default' => '',
  ),
  'active_date' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['DocumentsDashlet']['columns'] = array (
  'document_name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'category_id' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CATEGORY',
    'default' => true,
    'name' => 'category_id',
  ),
  'template_type' => 
  array (
    'width' => '8%',
    'label' => 'LBL_TEMPLATE_TYPE',
    'default' => true,
    'name' => 'template_type',
  ),
  'status_id' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status_id',
  ),
  'is_template' => 
  array (
    'width' => '8%',
    'label' => 'LBL_IS_TEMPLATE',
    'default' => false,
    'name' => 'is_template',
  ),
  'filename' => 
  array (
    'width' => '20%',
    'label' => 'LBL_FILENAME',
    'link' => true,
    'default' => false,
    'bold' => false,
    'displayParams' => 
    array (
      'module' => 'Documents',
    ),
    'related_fields' => 
    array (
      0 => 'document_revision_id',
      1 => 'doc_id',
      2 => 'doc_type',
      3 => 'doc_url',
    ),
    'name' => 'filename',
  ),
  'exp_date' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EXPIRATION_DATE',
    'default' => false,
    'name' => 'exp_date',
  ),
  'subcategory_id' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SUBCATEGORY',
    'default' => false,
    'name' => 'subcategory_id',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'active_date' => 
  array (
    'width' => '8%',
    'label' => 'LBL_ACTIVE_DATE',
    'default' => false,
    'name' => 'active_date',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
