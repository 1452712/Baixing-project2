<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('AdminTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ProblemTableSeeder');
        $this->call('SubmissionTableSeeder');
        $this->call('TopicTableSeeder');

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};

class AdminTableSeeder extends Seeder
{
    public function run(){
        App\Models\Admin::truncate();
        factory(App\Models\Admin::class,10)->create();
    }
}

class UserTableSeeder extends Seeder
{
    public function run(){
        App\Models\User::truncate();
        factory(App\Models\User::class,10)->create();
    }
}

class ProblemTableSeeder extends Seeder
{
    public function run(){
        App\Models\Problem::truncate();
        factory(App\Models\Problem::class,20)->create();
    }
}
class SubmissionTableSeeder extends Seeder
{
    public function run(){
        App\Models\Submission::truncate();
        factory(App\Models\Submission::class,30)->create();
    }
}
class TopicTableSeeder extends Seeder
{
    public function run(){
        App\Models\Topic::truncate();
        factory(App\Models\Topic::class,6)->create();
    }
}