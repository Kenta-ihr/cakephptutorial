<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'parent_id' => NULL,
                'lft' => '1',
                'rght' => '8',
                'name' => '技術',
                'description' => '技術のこと',
                'created' => '2017-03-24 08:40:08',
                'modified' => '3/24/17, 8:40 AM',
            ],
            [
                'id' => '2',
                'parent_id' => NULL,
                'lft' => '9',
                'rght' => '12',
                'name' => '生活',
                'description' => '生活のこと',
                'created' => '2017-03-24 08:40:24',
                'modified' => '3/24/17, 8:40 AM',
            ],
            [
                'id' => '3',
                'parent_id' => '1',
                'lft' => '2',
                'rght' => '5',
                'name' => 'PHP',
                'description' => 'PHPのこと',
                'created' => '2017-03-24 08:40:38',
                'modified' => '3/24/17, 8:40 AM',
            ],
            [
                'id' => '4',
                'parent_id' => '2',
                'lft' => '10',
                'rght' => '11',
                'name' => '料理',
                'description' => '料理のこと',
                'created' => '2017-03-24 08:41:11',
                'modified' => '3/24/17, 8:41 AM',
            ],
            [
                'id' => '5',
                'parent_id' => '3',
                'lft' => '3',
                'rght' => '4',
                'name' => 'CakePHP',
                'description' => 'CakePHPのこと',
                'created' => '2017-03-24 08:41:26',
                'modified' => '3/24/17, 8:41 AM',
            ],
            [
                'id' => '6',
                'parent_id' => '1',
                'lft' => '6',
                'rght' => '7',
                'name' => 'Ruby',
                'description' => 'Rubyのこと',
                'created' => '2017-03-24 08:41:51',
                'modified' => '3/24/17, 8:41 AM',
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
