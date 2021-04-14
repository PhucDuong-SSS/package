<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Test\ConnectDatabase;


class ConnectDatabaseTest extends TestCase
{
    protected    $DatabaseTest;
    protected    $dbType = 'mysql';
    protected    $dbHost = 'moe-mysql-app';
    protected    $dbUser = 'root';
    protected    $dbPass = 'rootpassword';
    protected    $dbName = 'neo';
    protected    $dbPort = 3306;

    public function setUp()
    {
         $this->DatabaseTest = new ConnectDatabase($this->dbUser, $this->dbPort,$this->dbPass, $this->dbHost, $this->dbName, $this->dbType);
    }

  
    public function testSelectUsers()
    {
        
        $sql = 'SELECT * FROM neo.users LIMIT 10;';
        $expectResutl = $this->DatabaseTest->countAll($sql);
        $this->assertEquals($expectResutl, 10);

    }
}