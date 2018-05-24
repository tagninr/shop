<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bills
 *
 * @property int $id
 * @property int|null $id_customer
 * @property string|null $date_order
 * @property float|null $total tổng tiền
 * @property string|null $payment hình thức thanh toán
 * @property string|null $note
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereDateOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereIdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bills whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bills extends Model
{
    protected $table = 'bills';

    public function customer()
    {
    	return $this -> belongsTo('App\Customer', 'id_customer', 'id');
    }

    public function bill_detail()
    {
    	return $this -> hasMany('App\BillDetail', 'id_bill', 'id');
    }
}
