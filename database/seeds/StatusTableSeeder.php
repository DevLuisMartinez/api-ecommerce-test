<?php

use Illuminate\Database\Seeder;
use App\Models\Status;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $current_date = Carbon::now()->format('Y-m-d H:i:s');
        $status = [
            [ 
                'id'  => 1, 
                'description' => 'pending', 
                'is_active' => true, 
                'created_at' => $current_date, 
                'updated_at' => $current_date 
            ],
            [ 
                'id'  => 2, 
                'description' => 'completed', 
                'is_active' => true,
                'created_at' => $current_date, 
                'updated_at' => $current_date 
            ]
        ];

        
        DB::table('status')->insert($status);
    }
}
