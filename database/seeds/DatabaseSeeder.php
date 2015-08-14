<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'Niels',
                'last_name' => 'Vanhorenbeeck',
                'email' => 'nielsvhb@hotmail.com',
                'password' => bcrypt('secret'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }

}