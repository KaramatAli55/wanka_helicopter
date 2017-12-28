<?php
$module_name = 'tms_TraineeProgrammes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'COHORT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COHORT',
    'width' => '10%',
    'default' => true,
  ),
  'TRAINEECONTRIBUTION' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TRAINEECONTRIBUTION',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFUNDSPAID' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFUNDSPAID',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFUNDSAVAILABLE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALFUNDSAVAILABLE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PLANNEDSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDSTARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'PLANNEDENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PLANNEDENDDATE',
    'width' => '10%',
    'default' => true,
  ),
  'TOTALFEES_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_TOTALFEES',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TOTALEFTS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTALEFTS',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ACTUALSTARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALSTARTDATE',
    'width' => '10%',
    'default' => false,
  ),
  'RPLFLIGHTHOURS_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_RPLFLIGHTHOURS',
    'width' => '10%',
  ),
  'HOURSCONSUMED_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_HOURSCONSUMED',
    'width' => '10%',
  ),
  'EFTSCONSUMED' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_EFTSCONSUMED',
    'width' => '10%',
    'default' => false,
  ),
  'PROGRAMME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROGRAMME',
    'id' => 'TMS_PROGRAMME_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'FLIGHTHOURSPERWEEK_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_FLIGHTHOURSPERWEEK',
    'width' => '10%',
  ),
  'STUDYOPTION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_STUDYOPTION',
    'width' => '10%',
  ),
  'STRAND_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_STRAND',
    'width' => '10%',
  ),
  'SDRSUBMITDATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_SDRSUBMITDATE',
    'width' => '10%',
  ),
  'ACTUALENDDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTUALENDDATE',
    'width' => '10%',
    'default' => false,
  ),
  'PAYMENTOPTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTOPTION',
    'width' => '10%',
    'default' => false,
  ),
);
?>
