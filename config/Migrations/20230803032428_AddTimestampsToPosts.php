<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddTimestampsToPosts extends AbstractMigration
{
    public function up(): void
    {
        $table = $this->table('posts');

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);

        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
 
        $table->update();
    }

    function down()
    {
        $table = $this->table('posts');

        $table
            ->dropColumn('created', 'datetime')
            ->dropColumn('modified', 'datetime')
            ->update();
    }
}
