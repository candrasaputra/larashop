<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@admin.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("password");

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
