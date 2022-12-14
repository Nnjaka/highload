<?php

namespace App\Http\Controllers;

use App\Modules\Order\Order;
use App\Modules\Order\OrderStorageInterface;
use Illuminate\Routing\Controller as BaseController;

class OrderStorageController extends BaseController
{
    public function __construct(private OrderStorageInterface $orderStorage)
    {
    }

    public function insertValueToShard()
    {
        $someOrder = new Order('order1', date('Ymd'), 1, 100);
        $this->orderStorage->insert($someOrder);
    }
}
