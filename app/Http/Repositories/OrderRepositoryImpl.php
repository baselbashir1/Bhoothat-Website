<?php

namespace App\Http\Repositories;

use App\Models\Order;

class OrderRepositoryImpl implements OrderRepository
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($id)
    {
        return Order::findOrFail($id);
    }

    public function createOrder(array $data)
    {
        return Order::create($data);
    }

    public function updateOrder(array $data, $id)
    {
        return Order::whereId($id)->update($data);
    }

    public function deleteOrder($id)
    {
        return Order::destroy($id);
    }
}
