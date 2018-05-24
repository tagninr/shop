<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BillDetail
 *
 * @property int $id
 * @property int $id_bill
 * @property int $id_product
 * @property int $quantity số lượng
 * @property float $unit_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereIdBill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereIdProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BillDetail extends Model
{
    protected $table = 'bill_detail';

    public function product()
    {
    	return $this -> belongsTo('App\Products', 'id_product', 'id');
    }

    public function bill()
    {
    	return $this -> belongsTo('App\Bills', 'id_bill', 'id');
    }
}
