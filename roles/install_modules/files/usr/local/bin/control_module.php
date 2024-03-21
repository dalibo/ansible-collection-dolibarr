#!/usr/bin/env php
<?PHP
//
// Usage:
// $ ./control_module.php --data_root=/var/www/erp --module=modAdherents --action=activate


// This is a CLI script
if (! defined('STDIN')) exit(1);
// all parameters are mandatory
if (count($argv) != 4) exit(2);

$opt=[
    "data_root:",  // path to the dolibarr environment
    "module:",     // module class name, i.e. 'modXXXX'
    "action:"      // 'set' or 'reset'

];
$param=getopt(null,$opt);

// Load
require_once ($param['data_root']."/master.inc.php");
dol_include_once('/core/lib/admin.lib.php');
$exit_code=3;
$count_change=0;
// Action
switch ($param['action']) {
    case 'activate':
        $ret=activateModule($param['module']);
        // because we currently don't deactivate dependencies nbmodules should
        // be equal to 1
        $exit_code = (count($ret['errors'])==0) ? 0 : $exit_code;
        $count_change = $ret['nbmodules'];
        break;
    case 'deactivate':
        $ret=unActivateModule($param['module']);
        if($ret===''){
                $exit_code=0;
                $count_change=1;
        }
        break;
}

print(json_encode(array("changed_modules"=> $count_change)));
exit($exit_code);
?>
