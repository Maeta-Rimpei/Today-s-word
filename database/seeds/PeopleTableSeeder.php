<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            [
                'id' => '1',
                'name' => 'ヘンリー・フォード',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\ford.jpg'
            ],
            [
                'id' => '2',
                'name' => 'マハトマ・ガンジー',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\mahatma-gandhi-e1412603573647.jpg'
            ],
            [
                'id' => '3',
                'name' => 'ヘレン・ケラー',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\helen.jpg'
            ],
            [
                'id' => '4',
                'name' => 'アルベルト・アインシュタイン',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' =>  'storage\wordpic\A_Einstein-1.jpg'
            ],
            [
                'id' => '5',
                'name' => '松下幸之助',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\konosuke.jpg'
            ],
            [
                'id' => '6',
                'name' => 'ハンス・クリスチャン・アンデルセン',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\hans.jpg'
            ],
            [
                'id' => '7',
                'name' => 'トーマス・エジソン',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\thomas.jpg'
            ],
            [
                'id' => '8',
                'name' => 'アルフレッド・ノーベル',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\novel.jpg'
            ],
            [
                'id' => '9',
                'name' => 'ガリレオ・ガリレイ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\galileo.jpg'
            ],
            [
                'id' => '10',
                'name' => 'ウォルト・ディズニー',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'picture' => 'storage\wordpic\walt.png'
            ]
        ]);
    }
}
