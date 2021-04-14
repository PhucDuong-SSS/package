<?php
function testconnection($value1, $value2, $value3)
{
    global $db, $statements;
    

//Insert query
    $insertExample = $db->executeRow($statements['insertexample'], [$value1, $value2, $value3]);

}
echo ("hello");