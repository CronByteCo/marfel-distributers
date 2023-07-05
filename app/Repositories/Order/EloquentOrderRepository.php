<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\AbstractEloquentRepository;
use App\Services\CartService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EloquentOrderRepository extends AbstractEloquentRepository implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        $cartService = resolve(CartService::class);
        return tap(
            Order::create([
                'user_id' => Auth::user()->id,
                'ordered_date' => Carbon::now(),
            ] + $data),
            function (Order $order) use ($cartService) {

                $date = Carbon::now();
                foreach ($cartService->content() as $item) {
                    $order->products()->attach(
                        $item['id'],
                        [
                            'quantity' => $item['quantity'],
                            'price' => $item['price'],
                            'created_at' => $date,
                            'updated_at' => $date
                        ]
                    );
                }
            }
        );
    }
    public function update(array $data, Order $user)
    {
    }
    public function delete(Order $user)
    {
    }
}
