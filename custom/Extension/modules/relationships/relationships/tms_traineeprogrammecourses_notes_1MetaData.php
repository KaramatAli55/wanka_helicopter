<?php
// created: 2017-04-15 22:08:46
$dictionary["tms_traineeprogrammecourses_notes_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tms_traineeprogrammecourses_notes_1' => 
    array (
      'lhs_module' => 'tms_TraineeProgrammeCourses',
      'lhs_table' => 'tms_traineeprogrammecourses',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tms_traineeprogrammecourses_notes_1_c',
      'join_key_lhs' => 'tms_traine7dd3courses_ida',
      'join_key_rhs' => 'tms_traineeprogrammecourses_notes_1notes_idb',
    ),
  ),
  'table' => 'tms_traineeprogrammecourses_notes_1_c',
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
      'name' => 'tms_traine7dd3courses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tms_traineeprogrammecourses_notes_1notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tms_traineeprogrammecourses_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tms_traineeprogrammecourses_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tms_traine7dd3courses_ida',
        1 => 'tms_traineeprogrammecourses_notes_1notes_idb',
      ),
    ),
  ),
);