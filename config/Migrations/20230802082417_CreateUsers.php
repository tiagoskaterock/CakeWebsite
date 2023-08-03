<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{

    function up(): void
    {
        $table = $this->table('users');

        $table
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('email', 'string', ['limit' => 255])
            ->addColumn('username', 'string', ['limit' => 255])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
            
    }

    function down()
    {
        $this->table('users')->drop()->save();
    }
    
}