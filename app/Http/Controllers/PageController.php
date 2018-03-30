<?php

namespace App\Http\Controllers;
use App\BillDetail;
use App\Bills;
use App\Cart;
use App\Customer;
use App\Products;
use App\Slide;
use App\TypeProducts;
use App\User;
use Auth;
use Hash;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide  = Slide::all();
    	// print_r($slide);
    	// exit;

    	$new_product = Products::where('new', 1) -> paginate(8);
    	//dd($new_product);

    	$top_product = Products::where('promotion_price', '<>', 0) -> paginate(8);

    	//return view('page.home', ['slide' => $slide]);
    	return view('page.home', compact('slide', 'new_product', 'top_product'));
    }

    public function ProductType($type){
    	$pro_with_type = Products::where('id_type', $type)->get();
    	$other_product = Products::where('id_type', '<>', $type)-> paginate(6);
    	$type_product = TypeProducts::where('id', $type)->get();
    	$list_type = TypeProducts::all();
    	// print_r($type_product);
    	// exit;
    	return view('page.product_type', compact('pro_with_type', 'other_product', 'type_product', 'list_type'));
    }

    public function ProductDetails(Request $req){
    	$product = Products::where('id', $req-> id)->first();
    	$related_product = Products::where('id_type', $product -> id_type)->paginate(6);
    	return view('page.product_details', compact('product', 'related_product'));
    }

    public function About(){
    	return view('page.about');
    }

    public function Contact(){
    	return view('page.contact');
    }

    public function AddToCart(Request $req, $id){
    	$product = Products::find($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart -> add($product, $id);
    	$req -> session() -> put('cart', $cart);

    	return redirect() -> back();
    }

    public function DelItemCart($id){
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart -> removeItem($id);
    	if(count($cart -> items) > 0){
    		Session::put('cart', $cart);
    	}
    	else{
    		Session::forget('cart');
    	}

    	return redirect() -> back();
    }

    public function getOrder(){
    	return view('page.order');
    }

    public function postOrder(Request $req){
        $this -> validate($req,
            [
                'email' => 'unique:customer',
                'phone_number' => 'min:10|max:11|numeric',               
            ],
            [
                'email.unique' => 'Email đã có người sử dụng!',
            ]
        );

    	$cart = Session::get('cart');
    	$customer = new Customer;
    	$customer -> name = $req -> name;
    	$customer -> gender = $req -> gender;
    	$customer -> email = $req -> email;
    	$customer -> address = $req -> address;
    	$customer -> phone_number = $req -> phone;
    	$customer -> note = $req -> notes;
    	$customer -> save();

    	$bill = new Bills;
    	$bill -> id_customer = $customer -> id;
    	$bill -> date_order = date('Y-m-d');
    	$bill -> total = $cart -> totalPrice;
    	$bill -> payment = $req -> payment_method;
    	$bill -> note = $req -> notes;
    	$bill -> save();

    	foreach ($cart -> items as $key => $value) {
    		$bill_detail = new BillDetail;
    		$bill_detail -> id_bill = $bill -> id;
    		$bill_detail -> id_product = $key;
    		$bill_detail -> quantity = $value['qty'];
    		$bill_detail -> unit_price = ($value['price']/$value['qty']);
    		$bill_detail -> save();
    	}
    	Session::forget('cart');
    	return redirect() -> back() -> with('notification', 'Đặt hàng thành công');
    }

    public function getSignup(){
        return view('page.signup');
    }

    public function postSignup(Request $req){
        $this -> validate($req,
            [
                'email' => 'unique:users',
                'phone' => 'numeric',
                'password' => 'min:8|max:32',
                're_password' => 'same:password'
            ],
            [
                'email.unique' => 'Email đã có người sử dụng!',
                'phone.numeric' => 'Điện thoại phải là một chuỗi số!',
                'password.min' => 'Mật khẩu ít nhất là 8 kí tự!',
                'password.max' => 'Mật khẩu nhiều nhất là 32 kí tự!',
                're_password.same' => 'Nhập lại mật khẩu không trùng khớp!'
            ]
        );
        $user = new User();
        $user -> email = $req -> email;
        $user -> full_name = $req -> fullname;
        $user -> address = $req -> address;
        $user -> address = $req -> address;
        $user -> phone = $req -> phone;
        $user -> password = Hash::make($req -> password);
        $user -> save();
        return redirect() -> back() -> with('thanhcong', 'Đăng kí thành công');
    }

    public function getLogin(){
        return view('page.login');
    }

    public function postLogin(Request $req){
        $credentails = array('email' => $req -> email, 'password' => $req -> password);
        if(Auth::attempt($credentails)){
            // return redirect() -> back() -> with(['flag' => 'success', 'message' => 'Đăng nhập thành công']);
            return redirect() -> route('home');
        }
        else{
            // return redirect() -> back() -> with(['flag' => 'danger', 'message' => 'Đăng nhập không thành công']);
            return redirect() -> back() -> with('message', 'Đăng nhập không thành công');            
        }
    }

    public function Logout(){
        Auth::logout();
        return redirect() -> route('home');
    }

    public function Search(Request $req){
        $product = Products::where('name', 'like', '%'.$req -> key.'%') -> orWhere('unit_price', $req -> key) -> get();
        return view('page.search', compact('product'));
    }
}

