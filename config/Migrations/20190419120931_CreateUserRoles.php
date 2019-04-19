<?php
use Migrations\AbstractMigration;

class CreateUserRoles extends AbstractMigration
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
        $table = $this->table('user_roles');
        $table->addColumn('user_role_name', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->create();
    }
}
