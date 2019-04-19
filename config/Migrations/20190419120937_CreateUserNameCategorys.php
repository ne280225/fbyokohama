<?php
use Migrations\AbstractMigration;

class CreateUserNameCategorys extends AbstractMigration
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
        $table = $this->table('user_name_categorys');
        $table->addColumn('user_name_category_name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->create();
    }
}
