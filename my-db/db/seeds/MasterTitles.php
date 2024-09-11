<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class MasterTitles extends AbstractSeed
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
	    $name = "takata";
	    $author_name = "yasuda";
        $summery = "これはテストです。";
	    $data = [
            [
                'name'    => $name,
                'author_name' => $author_name,
                'summary' => $summery
            ]
        ];

        $posts = $this->table('mst_titles');
        $posts->insert($data)
              ->save();
    }
}
