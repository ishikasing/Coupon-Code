<?php
namespace Coupon\Code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Coupon\Code\Models\coupon;

class couponcontroller extends Controller{

 public function insert(Request $req){
    $data = new  coupon ;
    $data->discount_amount=$req->discount_amount;
    $data->coupon_type=$req->coupon_type;
    $data->coupon_name=$req->coupon_name;
    $data->exprie_date=$req->exprie_date;
    $data->discription=$req->discription;
    $data->coupon_code=$req->coupon_code;
    $data->save();

return redirect('show');

 }
 public function show(){
    $data=coupon::all();

return view('Code::show',compact('data'));
}
public function delete($id){
    $data=coupon::find($id);
    $data->delete();
    return redirect('show');
}

    public function generateCouponCode(Request $request)
    {
        $couponType = $request->input('coupon_type');
        $discount_amount = $request->input('discount_amount');

        // Generate the coupon code based on the coupon type and value
        switch ($couponType) {
            case 'Mobile':
                $couponCode = 'MBL' . substr(md5($discount_amount), 0, 6);
                break;
            case 'Laptop':
                $couponCode = 'LC' . substr(md5($discount_amount), 0, 6);
                break;
            case 'Tablet':
                $couponCode = 'TAB' . substr(md5($discount_amount), 0, 6);
                break;
            case 'Smart watch':
                $couponCode = 'STW' . substr(md5($discount_amount), 0, 6);
                break;
            default:
                $couponCode = '';
        }

        // Return the generated coupon code as a JSON response
        return response()->json([
            'coupon_code' => $couponCode,

        ]);
    }


}
