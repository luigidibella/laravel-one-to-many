<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_item = new User();
        $new_item->name = 'Jiji';
        $new_item->email = 'jiji@admin.it';
        $new_item->password = '$2y$10$/8gvf8w.Ui3YaGIUke5c5.qKYHz1IW2lIR1jb/psOE9u3Sj.9zVuS';
        $new_item->save();
    }
}
