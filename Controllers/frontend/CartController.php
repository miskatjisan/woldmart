<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\Coupon;
use App\Models\ShipDivision;



class CartController extends Controller
{
   
    





    public function AddToCart(Request $request, $id){

		
    	$product = Product::findOrFail($id);

    	if ($product->discount_price_en == NULL) {
    		Cart::add([
    			'id' => $id, 
    			'name' => $request->product_name, 
    			'qty' => $request->quantity, 
    			'price' => $product->selling_price_en,
    			'weight' => 1, 
    			'options' => [
    				'image' => $product->product_thambnail_one,
					'product_code' => $product->product_code_en,
    				'color' => $request->color,
    				'size' => $request->size,
    			],
    		]);

    		return response()->json(['success' => 'Successfully Added on Your Cart']);

    	}else{

    		Cart::add([
    			'id' => $id, 
    			'name' => $request->product_name, 
    			'qty' => $request->quantity, 
    			'price' => $product->discount_price_en,
    			'weight' => 1, 
    			'options' => [
    				'image' => $product->product_thambnail_one,
					'product_code' => $product->product_code_en,
    				'color' => $request->color,
    				'size' => $request->size,
    			],
    		]);
    		return response()->json(['success' => 'Successfully Added on Your Cart']);
    	}

    } // end mehtod 




	// Mini Cart Section
    public function AddMiniCart(){
		 

    	$carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total();

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => round($cartTotal),

    	));
    } // end method 

    /// remove mini cart 
public function RemoveMiniCart($rowId){
	Cart::remove($rowId);


	return response()->json(['success' => 'Product Remove from Cart']);

} // end mehtod





public function CouponApply(Request $request){

			
	$carts = Cart::content()->first();
	$cart = $carts->options->product_code;


$coupon = Coupon::where('coupon_name',$request->coupon_name)->where('product_all',1)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();
if ($coupon) {

Session::put('coupon',[
	'coupon_name' => $coupon->coupon_name,
	'coupon_discount' => $coupon->coupon_discount,
	'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
	'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100),  
	]);

	return response()->json(array(

		'success' => 'Coupon Applied Successfully'
	));


}




else{


	$coupon = Coupon::where('coupon_name',$request->coupon_name)->where('product_code',$cart)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();

	if($coupon){
		Session::put('coupon',[
			'coupon_name' => $coupon->coupon_name,
			'coupon_discount' => $coupon->coupon_discount,
			'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
			'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100),  
			]);

			return response()->json(array(

				'validity' => true,

				'success' => 'Coupon Applied Successfully'
			));


	}else{

		return response()->json(['error' => 'Invalid Coupon']);

	}




}


} // end method 


public function CouponCalculation(){

if (Session::has('coupon')) {
	return response()->json(array(
		'subtotal' => Cart::total(),
		'coupon_name' => session()->get('coupon')['coupon_name'],
		'coupon_discount' => session()->get('coupon')['coupon_discount'],
		'discount_amount' => session()->get('coupon')['discount_amount'],
		'total_amount' => session()->get('coupon')['total_amount'],
	));
}else{
	return response()->json(array(
		'total' => Cart::total(),
	));

}
} // end method 



// Remove Coupon 
public function CouponRemove(){
Session::forget('coupon');
return response()->json(['success' => 'Coupon Remove Successfully']);
}




// Checkout Method 
public function CheckoutCreate(){

	if (Auth::check()) {
		if (Cart::total() > 0) {

	$carts = Cart::content();
	$cartQty = Cart::count();
	$cartTotal = Cart::total();

	$divisions = ShipDivision::orderBy('division_name_en','ASC')->get();
	return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal','divisions'));

		}else{

		$notification = array(
		'message' => 'Shopping At list One Product',
		'alert-type' => 'error'
	);

	return redirect()->to('/')->with($notification);

		}


	}else{

		 $notification = array(
		'message' => 'You Need to Login First',
		'alert-type' => 'error'
	);

	return redirect()->route('login')->with($notification);

	}

} // end method 
















}
