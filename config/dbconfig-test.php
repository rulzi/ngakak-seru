<?php

//pengaturan database

$dbconfig = New NgakakSeru\Database\Connection;

//Engine
$dbconfig->getEngine('mysql');
//host
$dbconfig->getHost('localhost');
//database
$dbconfig->getDatabase('ngakakseru');
//user
$dbconfig->getUser('root');
//pass
$dbconfig->getPassword('filryanaeka');
