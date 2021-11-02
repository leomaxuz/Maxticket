<?php

namespace App\Models;

    /*
      xbayt.uz   - Event Management & Ticketing
     */

/**
 * Description of OrderItems.
 *
 * @author Dave
 */
class OrderItem extends MyBaseModel
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool $timestamps
     */
    public $timestamps = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'title',
        'quantity',
        'order_id',
        'unit_price',
    ];
}
