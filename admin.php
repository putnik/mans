<?php

define('BASEDIR', dirname(__FILE__));
include(BASEDIR . '/config.php');


// ADODB
include(BASEDIR . '/libs/adodb5/adodb.inc.php');

$DB = NewADOConnection('mysql');
$DB->Connect($db_config['server'], $db_config['user'], $db_config['pass'], $db_config['name']);
unset($db_config);


// Smarty
require(BASEDIR . '/libs/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->setTemplateDir(BASEDIR . '/templates/');
$smarty->setCompileDir(BASEDIR . '/templates_c/');
$smarty->setCacheDir(BASEDIR . '/cache/');

//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;


header("Content-Type: text/html; charset=utf-8");


/*$rs = $DB->Execute("
	select *
	from table
	where key=?",
	array($key));
	
while (!$rs->EOF) {
	print_r($rs->fields);
	$rs->MoveNext();
}


$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
$smarty->assign("FirstName",array("John","Mary","James","Henry"));
$smarty->assign("LastName",array("Doe","Smith","Johnson","Case"));
$smarty->assign("Class",array(array("A","B","C","D"), array("E", "F", "G", "H"),
	array("I", "J", "K", "L"), array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
	array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign("option_values", array("NY","NE","KS","IA","OK","TX"));
$smarty->assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
$smarty->assign("option_selected", "NE");
*/

$smarty->display('templates/admin/index.tpl');




