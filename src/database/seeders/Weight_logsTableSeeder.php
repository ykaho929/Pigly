<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Weight_logsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'user_id' => '6',
        'date' => '2025/1/1',
        'weight' => '70.0',
        'calories' =>'2500',
        'exercise_time' =>'00:30',
        'exercise_content' =>'ジョギング',
        ];
    DB::table('weight_logs')->insert($param);
    }
}
