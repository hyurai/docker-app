<?php

use Illuminate\Database\Seeder;

class InfomationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){ 
        DB::table('infomations')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $infomations = [
                  ['name' => 'tom',
                   'height' => 210,
                   'weight' => 100],
                  ['name' => 'jun',
                   'height' => 160,
                   'weight' => 50],
                  ['name' => 'gen',
                   'height' => 180,
                   'weight' => 70]
                 ];
    
        // 登録
        foreach($infomations as $infomation) {
          \App\Infomation::create($infomation);
        }
        //
    }
}
