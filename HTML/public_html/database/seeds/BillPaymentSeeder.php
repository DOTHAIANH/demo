<?php

use Illuminate\Database\Seeder;
use App\Models\BillPayments;
use App\Models\Member;

class BillPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 134; $i++){
            $member = Member::inRandomOrder()->first();
            $bill = BillPayments::create([
                'member_id' => $member->id,
                'amount' => rand(20000, 500000),
                'status' => BillPayments::STATUS_COMPLETE,
                'source' => BillPayments::SOURCE_TRANSFERS_VCB,
            ]);
            $bill->transaction_code = 'ZG'.$bill->id;
            $bill->save();
        }
    }
}
