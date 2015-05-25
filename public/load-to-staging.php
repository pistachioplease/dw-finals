<?php
require_once('stda/parsecsv.lib.php');
require_once('stda/MysqliDb.php');

// parse CSV
$csv = new parseCSV();
$csv->delimiter = "~";
$csv->linefeed = "\r\n";
$ret = $csv->parse('crm/accounts-accounts-tbl-data.csv');
//print_r($csv->data);

// save to DB
$db = new MysqliDb ('localhost', 'root', 'secretpassword', 'sunworks_staging');

foreach ($csv->data as $data)
	$id = $db->insert ('accounts', $data);
