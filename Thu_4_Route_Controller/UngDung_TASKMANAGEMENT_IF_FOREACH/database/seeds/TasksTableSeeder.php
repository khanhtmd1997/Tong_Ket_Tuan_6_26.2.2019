<?php

use Illuminate\Database\Seeder;
use App\Task;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id = 1;
        $task->title = 'dfjkdsjfdksfjsk';
        $task->content = 'đạkhádhuqưeyquycduiáyd7qư6e7qưe7wq6e7wq';
        $task->save();
    }
}
