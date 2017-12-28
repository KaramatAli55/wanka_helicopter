<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['tms_TraineeProgrammeCourses'] = array(
	'table'=>'tms_traineeprogrammecourses',
	'audited'=>true,
    'inline_edit'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'tms_traineeprogrammes_id_c' => 
  array (
    'required' => false,
    'name' => 'tms_traineeprogrammes_id_c',
    'vname' => 'LBL_TRAINEEPROGRAMME_TMS_TRAINEEPROGRAMMES_ID',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'traineeprogramme' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'traineeprogramme',
    'vname' => 'LBL_TRAINEEPROGRAMME',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'tms_traineeprogrammes_id_c',
    'ext2' => 'tms_TraineeProgrammes',
    'module' => 'tms_TraineeProgrammes',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'plannedstartdate' => 
  array (
    'required' => false,
    'name' => 'plannedstartdate',
    'vname' => 'LBL_PLANNEDSTARTDATE',
    'type' => 'date',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'plannedenddate' => 
  array (
    'required' => false,
    'name' => 'plannedenddate',
    'vname' => 'LBL_PLANNEDENDDATE',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'actualstartdate' => 
  array (
    'required' => false,
    'name' => 'actualstartdate',
    'vname' => 'LBL_ACTUALSTARTDATE',
    'type' => 'date',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'actualenddate' => 
  array (
    'required' => false,
    'name' => 'actualenddate',
    'vname' => 'LBL_ACTUALENDDATE',
    'type' => 'date',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'completehours' => 
  array (
    'required' => false,
    'name' => 'completehours',
    'vname' => 'LBL_COMPLETEHOURS',
    'type' => 'decimal',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'Aggregates total hour',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '5',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '1',
  ),
  'competenthours' => 
  array (
    'required' => false,
    'name' => 'competenthours',
    'vname' => 'LBL_COMPETENTHOURS',
    'type' => 'decimal',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'Aggregates until competent',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '5',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '1',
  ),
  'efts' => 
  array (
    'required' => false,
    'name' => 'efts',
    'vname' => 'LBL_EFTS',
    'type' => 'decimal',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => 'May be less due to RPL',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '6',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '4',
  ),
  'result' => 
  array (
    'required' => false,
    'name' => 'result',
    'vname' => 'LBL_RESULT',
    'type' => 'enum',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => 'NZQA RoA Result',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'roa_result_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'percentrpl' => 
  array (
    'required' => false,
    'name' => 'percentrpl',
    'vname' => 'LBL_PERCENTRPL',
    'type' => 'int',
    'massupdate' => 0,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '3',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '1',
    'min' => 0,
    'max' => 100,
    'validation' => 
    array (
      'type' => 'range',
      'min' => 0,
      'max' => 100,
    ),
  ),
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('tms_TraineeProgrammeCourses','tms_TraineeProgrammeCourses', array('basic','assignable'));