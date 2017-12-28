<?php
// created: 2016-03-29 17:16:59
$dictionary["tms_TraineeProgrammeCourses"]["fields"]["tms_traineeprogrammes_tms_traineeprogrammecourses_1"] = array (
  'name' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1',
  'type' => 'link',
  'relationship' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1',
  'source' => 'non-db',
  'module' => 'tms_TraineeProgrammes',
  'bean_name' => 'tms_TraineeProgrammes',
  'vname' => 'LBL_TMS_TRAINEEPROGRAMMES_TMS_TRAINEEPROGRAMMECOURSES_1_FROM_TMS_TRAINEEPROGRAMMES_TITLE',
  'id_name' => 'tms_traine8f5egrammes_ida',
);
$dictionary["tms_TraineeProgrammeCourses"]["fields"]["tms_traineeprogrammes_tms_traineeprogrammecourses_1_name"] = array (
  'name' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TMS_TRAINEEPROGRAMMES_TMS_TRAINEEPROGRAMMECOURSES_1_FROM_TMS_TRAINEEPROGRAMMES_TITLE',
  'save' => true,
  'id_name' => 'tms_traine8f5egrammes_ida',
  'link' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1',
  'table' => 'tms_traineeprogrammes',
  'module' => 'tms_TraineeProgrammes',
  'rname' => 'name',
);
$dictionary["tms_TraineeProgrammeCourses"]["fields"]["tms_traine8f5egrammes_ida"] = array (
  'name' => 'tms_traine8f5egrammes_ida',
  'type' => 'link',
  'relationship' => 'tms_traineeprogrammes_tms_traineeprogrammecourses_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TMS_TRAINEEPROGRAMMES_TMS_TRAINEEPROGRAMMECOURSES_1_FROM_TMS_TRAINEEPROGRAMMECOURSES_TITLE',
);
