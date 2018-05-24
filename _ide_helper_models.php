<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class BillDetail extends \Eloquent {}
}

namespace App{
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
	class Bills extends \Eloquent {}
}

namespace App{
/**
 * App\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $email
 * @property string $address
 * @property string $phone_number
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Customer extends \Eloquent {}
}

namespace App{
/**
 * App\News
 *
 * @property int $id
 * @property string $title tiêu đề
 * @property string $content nội dung
 * @property string $image hình
 * @property string $create_at
 * @property string $update_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdateAt($value)
 */
	class News extends \Eloquent {}
}

namespace App{
/**
 * App\Products
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $id_type
 * @property string|null $description
 * @property float|null $unit_price
 * @property float|null $promotion_price
 * @property string|null $image
 * @property string|null $unit
 * @property int|null $new
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereIdType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products wherePromotionPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Products whereUpdatedAt($value)
 */
	class Products extends \Eloquent {}
}

namespace App{
/**
 * App\Slide
 *
 * @property int $id
 * @property string $link
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereLink($value)
 */
	class Slide extends \Eloquent {}
}

namespace App{
/**
 * App\TypeProducts
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProducts whereUpdatedAt($value)
 */
	class TypeProducts extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

