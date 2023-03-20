<?php

use Illuminate\Database\Seeder;
use App\Models\Orders\Order;
use App\Models\Member;
use App\Models\Products;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++){
            $member = Member::inRandomOrder()->first();
            $products = Products::whereStatus(1)->whereType(Products::TYPE_ACCOUNT)->inRandomOrder()->take(rand(3, 5))->get();
            $order = Order::create([
                'code' => Order::getCode(),
                'member_id' => $member->id,
                'status' => Order::STATUS_COMPLETE,
            ]);
            $total = 0;
            $totalQty = 0;
            foreach ($products as $product){
                $pQty = rand(1, 4);
                $pTotal = $product->price * $pQty;
                $order->orderItem()->create([
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'total' => $pTotal,
                    'qty' => $pQty,
                    'status' => \App\Models\Orders\OrderItem::STATUS_COMPLETE,
                ]);
                $total = $total + $pTotal;
                $totalQty = $totalQty + $pQty;
            }
            $order->sub_total = $total;
            $order->total = $total;
            $order->total_item = $totalQty;
            $order->save();
        }
    }
}
