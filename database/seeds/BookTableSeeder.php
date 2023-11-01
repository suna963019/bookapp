<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
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
            'other'=>'ルイス・キャロル',
            'price'=>'4000',
        ];
        DB::table('booklist')->insert($param);
    }
}
