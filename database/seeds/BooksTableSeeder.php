<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'name'=>'不思議の国のアリス',
            'author'=>'ルイス・キャロル',
            'price'=>4000,
        ];
        DB::table('books')->insert($param);
        $param=[
            'name'=>'人魚姫',
            'author'=>'ハンス・クリスチャン・アンデルセン',
            'price'=>300,
        ];
        DB::table('books')->insert($param);
        $param=[
            'name'=>'test',
            'author'=>'tester',
            'price'=>1000,
        ];
        DB::table('books')->insert($param);
    }
}
