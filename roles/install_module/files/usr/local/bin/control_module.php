#!/usr/bin/env php
<?PHP
//
// Usage:
// $ ./control_module.php --data_root=/var/www/erp --module=modAdherents --action=activate


// This is a CLI script
if (! defined('STDIN')) exit(1);
echo count($argv);
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

// Action
switch ($param['action']) {
    case 'deactivate':
        unActivateModule($param['module']);
        break;
    case 'activate':
        activateModule($param['module']);
        break;
    default:
        exit(3);
}

exit(0);

?>
