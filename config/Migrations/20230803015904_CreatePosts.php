<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{

    public function up(): void
    {
        $table = $this->table('posts');

        $table
            ->addColumn('image', 'string', ['limit' => 255])
            ->addColumn('title', 'string', ['limit' => 255])
            ->addColumn('content', 'text')
            ->create();
    }

    function down()
    {
        $this->table('posts')->drop()->save();
    }
    
}
