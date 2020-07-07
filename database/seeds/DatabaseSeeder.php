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
        // $this->call('UsersTableSeeder');
        if(app()->environment() === 'production'){
            exit('this is a bad idea. be carefull!!');
        }

        $tables = [
            'products',
            'status',
            'carts',
            'products_carts'
        ];

        foreach( $tables as $table ){
            DB::table($table)->truncate();
        }

        $this->call('StatusTableSeeder');
        $this->call('ProductsTableSeeder');
    }
}
