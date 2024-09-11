<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class FirstValue extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
	    $password = "hirotada";
	    $password_hash = hash("sha256", $password);
	    $data = [
            [
                'mail_address'    => 'hirotada.intern@gmail.com',
                'password' => $password_hash
            ]
        ];

        $posts = $this->table('adm_admin_users');
        $posts->insert($data)
              ->save();
    }
}
