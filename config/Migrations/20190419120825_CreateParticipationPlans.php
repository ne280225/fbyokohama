<?php
use Migrations\AbstractMigration;

class CreateParticipationPlans extends AbstractMigration
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
        $table = $this->table('participation_plans');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('event_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('participation_start_time', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('participation_end_time', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
