<?php
use Migrations\AbstractMigration;

class DropUserNameCategorys extends AbstractMigration
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
        $table->drop();
    }
}
