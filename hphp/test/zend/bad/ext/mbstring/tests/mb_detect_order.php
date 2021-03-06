<?php
//$debug = true;
ini_set('include_path', dirname(__FILE__));
include_once('common.inc');


// Set order to "auto"
$r = mb_detect_order('auto');
($r === TRUE) ? print "OK_AUTO\n" : print "NG_AUTO\n";
print implode(', ', mb_detect_order()) . "\n";


// Set order by string
$r = mb_detect_order('SJIS,EUC-JP,JIS,UTF-8');
($r === TRUE) ? print "OK_STR\n" : print "NG_STR\n";
print implode(', ', mb_detect_order()) . "\n";


// Set order by array
$a[] = 'ASCII';
$a[] = 'JIS';
$a[] = 'EUC-JP';
$a[] = 'UTF-8';
$r = mb_detect_order($a);
($r === TRUE) ? print "OK_ARRAY\n" : print "NG_ARRAY\n";
print implode(', ', mb_detect_order()) . "\n";

// Set invalid encoding. Should fail.
print "== INVALID PARAMETER ==\n";

$r = mb_detect_order('BAD_NAME');
($r === FALSE) ? print "OK_BAD_STR\n" : print "NG_BAD_STR\n";
print implode(', ', mb_detect_order()) . "\n";

$a[] = 'BAD_NAME';
$r = mb_detect_order($a);
($r ===	FALSE) ? print "OK_BAD_ARRAY\n" : print "NG_BAD_ARRAY\n";
print implode(', ', mb_detect_order()) . "\n";

?>

