<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(AppStatusSeeder::class);
        $this->call(PaymentTypeSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(EmployeeServiceSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(TransactionStatusSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(TransactionDetailSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
