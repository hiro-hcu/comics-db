<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateAdmUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        echo'upの方だよ<br/>';

        $table = $this->table('adm_admin_users');
        $table->addColumn('mail_address', 'string', ['limit' =>255, 'null'=>false])
              ->addColumn('password', 'string', ['limit' =>255, 'null'=>false])
              ->addColumn('created_at', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addColumn('updated_at', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP'
            ])
              ->create();
    }
    public function down()
    {
        echo 'downの方だよ<br/>';
        $table = $this->table('adm_admin_users');
        $table->drop()
        ->save();

    }
}
