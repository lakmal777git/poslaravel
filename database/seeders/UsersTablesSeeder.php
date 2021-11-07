<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Eloquent\Model;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UsersTablesSeeder')
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
       {
           Eloquent::unguard();
           $this->call('UsersTablesSeeder')
       }
   }
