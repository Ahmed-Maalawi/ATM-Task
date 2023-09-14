<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Customer\Entities\Account;
use Modules\Customer\Entities\Card;
use Modules\Customer\Entities\Transaction;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::factory()->count(5)->create();

        foreach ($customers as $customer)
        {

            $customer->assignRole('customer');

            Card::factory()->create([
                'user_id' => $customer['id']
            ]);

            $accounts = Account::factory()->count(3)->create([
                'user_id' => $customer['id']
            ]);

            foreach ($accounts as $account)
            {
                Transaction::factory()->count(7)->create([
                    'user_id' => $customer['id'],
                    'account_id' => $account['id'],
                    'type' => (random_int(1,100) % 2)? 'deposit' : 'withdraw'
                ]);
            }
        }
    }
}
