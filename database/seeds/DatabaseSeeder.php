<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	$this->call(AdminSeeder::class);

    }
}
class AdminSeeder extends Seeder 
{
	public function run()
	{
		DB::table('admins')->insert([
			[
				'name'=>'Nguyễn Bá Khiêm',
				'nameslug' => 'nguyenbakhiem',
				'email'=>'duoinhungconmuak@gmail.com',
				'dominion' => '1',
				'Password'=>bcrypt('adminndt'),
			],
			[
				'name'=>'Vũ Ngọc Trung',
				'nameslug' => 'vungoctrung',
				'email'=>'admin1@gmail.com',
				'dominion' => '0',
				'Password'=>bcrypt('adminndt'),
			],
			[
				'name'=>'Trần Huy Trinh',
				'nameslug' => 'tranhuytrinh',
				'email'=>'admin2@gmail.com',
				'dominion' => '0',
				'Password'=>bcrypt('adminndt'),
			],
			[
				'name'=>'Vũ Thanh Thảo',
				'nameslug' => 'vuthanhthao',
				'email'=>'admin3@gmail.com',
				'dominion' => '0',
				'Password'=>bcrypt('adminndt'),
			],
			[
				'name'=>'Vũ Hương Giang',
				'nameslug' => 'vuhuonggiang',
				'email'=>'admin4@gmail.com',
				'dominion' => '0',
				'Password'=>bcrypt('adminndt'),
			],
			[
				'name'=>'Vũ Thị Hoa',
				'nameslug' => 'vuthihoa',
				'email'=>'admin5@gmail.com',
				'dominion' => '0',
				'Password'=>bcrypt('adminndt'),
			],
		]);
	}
}
