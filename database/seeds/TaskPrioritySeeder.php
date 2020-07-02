<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as DB;

class TaskPrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_priorities')->insert([
            ['type' => 'urgent'],
            ['type' => 'important'],
            ['type' => 'ignore'],
            ['type' => 'optional'],
        ]);
    }
}
