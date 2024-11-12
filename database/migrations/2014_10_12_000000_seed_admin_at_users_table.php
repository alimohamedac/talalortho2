<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;

class SeedAdminAtUsersTable extends Migration
{
    public function up()
    {
        $admin = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }

    public function down()
    {
        //
    }
}
