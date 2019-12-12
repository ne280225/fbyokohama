<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('user_name', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_role_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_name_category_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
