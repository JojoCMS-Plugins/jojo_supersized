<?php

$table = 'ssimage';
$query = "
    CREATE TABLE {ssimage} (
      `ssimageid` int(11) NOT NULL auto_increment,
      `name` varchar(255) NOT NULL default '',
      `caption` varchar(255) NOT NULL default '',
      `link` varchar(255) NOT NULL default '',
      `displayorder` int(3) NOT NULL default '0',
      `image` varchar(255) NOT NULL default '',
      PRIMARY KEY  (`ssimageid`),
      FULLTEXT KEY `caption` (`caption`)
    ) TYPE=MyISAM ;";

/* Check table structure */
$result = JOJO::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_ssimage: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_ssimage: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) JOJO::printTableDifference($table,$result['different']);
