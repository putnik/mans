<?php
if (!defined(BASEPATH) ) die ('No direct access allowed!');

define('BASEDIR', dirname(__FILE__));
include(BASEDIR . '/config.php');


// ADODB
include(BASEDIR . '/libs/adodb5/adodb.inc.php');

$DB = NewADOConnection('mysql');
$DB->Connect($db_config['server'], $db_config['user'], $db_config['pass'], $db_config['name']);
unset($db_config);

$type = $_GET['type'];
switch ($type){
    case "last":
        return json_encode(getLastMessages());
        break;
    case "issues":
        return json_encode(getIssues());
        break;
    case "institutions":
        return json_encode(getInstitutions());
        break;
    default:
        return "";
}

function getLastMessages($num_messages=10){
    $ret = Array();
    $sql = "select r.id, r.description, i.name " .
        "from request r join document_meta d on r.id=d.request_id " .
        "join inststution i on r.institution_id=i.id ".
        " order by d.own.date desc limit $num_messages"; 
    $res = $DB->execute($sql);

    while (!$res->EOF) {
        $i = [];
        $i['req_id'] = $res->FetchField(1);
        $i['req_descr'] = $res->FetchField(2);
        $i['inst_name'] = $res->FetchField(3);
        $ret[] = $i;
        $rs->MoveNext();
    }
    return $ret;
}

function getInstitutions(){
    $sql = "select id, name from institution order by name";
    $ret = Array();
    $res = $DB->execute($sql);

    while (!$res->EOF) {
        $i['id'] = $res->FetchField(1);
        $i['name'] = $res->FetchField(2);
        $ret[] = $i;
        $rs->MoveNext();
    }
    return $ret;
}

function getIssues(){
    $sql = "select id, name from issues order by name";
    $ret = Array();
    $res = $DB->execute($sql);

    while (!$res->EOF) {
        $i['id'] = $res->FetchField(1);
        $i['name'] = $res->FetchField(2);
        $ret[] = $i;
        $rs->MoveNext();
    }
    return $ret;
   
}

function getYears(){
    $sql = "select distinct extract(year from own_date) from documents_meta ";
    $ret = Array();
    $res = $DB->execute($sql);

    while (!$res->EOF) {
        $ret[] = $res->FetchField(1);
        $rs->MoveNext();
    }
    sort($ret);
    return $ret;
}

/**
 * Get list of filtered messages. 
 * param $filter array that contains filters in form "field name" > "field value". Arraye keys 
 * are joined by 'and' logic.
 * param $num_messages max number messages, that should be returned, default is 10
 * param $start_from number of messages? that should be skipped, default is 0
 **/
function getFilteredMessages($filter, $num_messages=10, $start_from=0){
     
    $where = ['1=1'];
    foreach ($filter as $f => $v){
        $where[]  = "$f=$v";
    }

    $sql_where = implode(" AND ", $where);
   
   $sql = "select r.id, r.description, i.name " .
        "from request r join document_meta d on r.id=d.request_id " .
        "join inststution i on r.institution_id=i.id " .
        $sql_where .
        " order by d.own.date desc limit $num_messages"; 
    $res = $DB->execute($sql);

    while (!$res->EOF) {
        $r_id = $res->FetchField(1);
        $r_descr = $res->FetchField(2);
        $i_name = $res->FetchField(3);
        
        $rs->MoveNext();
    } 
}
?>
