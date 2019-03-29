<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Order extends Model
{
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'order' => [
                'format' => function () {
                    return 'SO/' . date('Ymd') . '/?'; // autonumber format. '?' will be replaced with the generated number.
                },
                'length' => 5 // The number of digits in the autonumber
            ]
        ];
    }
}
