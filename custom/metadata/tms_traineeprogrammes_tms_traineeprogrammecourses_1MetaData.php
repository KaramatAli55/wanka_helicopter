<?php
// created: 2016-03-29 17:16:59
$dictionary["tms_traineeprogrammes_tms_traineeprogrammecourses_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tms_traineeprogrammes_tms_traineeprogrammecourses_1' => 
    array (
      'lhs_module' => 'tms_TraineeProgrammes',
      'lhs_table' => 'tms_traineeprogrammes',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_TraineeProgrammeCourses',
      'rhs_table' => 'tms_traineeprogrammecourses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1_c',
      'join_key_lhs' => 'tms_traine8f5egrammes_ida',
      'join_key_rhs' => 'tms_traine90eccourses_idb',
    ),
  ),
  'table' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tms_traine8f5egrammes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tms_traine90eccourses_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tms_traine8f5egrammes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tms_traine90eccourses_idb',
      ),
    ),
  ),
);