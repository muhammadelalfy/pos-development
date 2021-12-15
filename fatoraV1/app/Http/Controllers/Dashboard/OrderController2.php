<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Items;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Models\User;
use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;


class OrderController2 extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Orders::get();
        // dd($data );
        return view('fatora.billDetails' , compact('data'));
    }

    public function bounceOreders()
    {
        $data = Orders::where('type' , 'bounce')->get();
        // dd($data );
        $hidden = 0;
        return view('fatora.billDetails' , compact('data' , 'hidden'));
    }



    public function Add_index()
    {
        
        // dd($data );
        return view('fatora.add' );
    }
    public function add(){

        return view('fatora.add2');
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data1 = new Orders;
$data = $request->all();
// $data1->user_id = Auth::user()->id;
// $data->customer_name = $request->customer_name;
// $data->emp_name = $request->emp_name;
// $data->customer_phone = $request->customer_phone;
// $data->item_total = $request->item_total;
// $data->items_total_befor = $request->items_total_befor;
// $data->items_total_after = $request->items_total_after;
// $data->notes = $request->notes;
// $data->pay_method = $request->pay_method;
// $data->paid = $request->paid;
// $data->rest = $request->rest;
// $data->created_at = $request->created_at;
// $data->updated_at = $request->updated_at;
// $data1 -> save();



        $lastid=Orders::create($data)->id;
        if(count($request->product_name) > 0)
        {
        foreach($request->product_name as $item=>$v){
            $data2=array(
                'orders_id'=>$lastid,
                'product_name'=>$request->product_name[$item],
                'brand'=>$request->brand[$item],
                'quantity'=>$request->quantity[$item],
                'budget'=>$request->budget[$item],
                'amount'=>$request->amount[$item]
            );
        Items::insert($data2);
      }
        }
        $random = Str::random(5);
        

        return redirect('orders/'.$lastid.'/'.$random );

        // return redirect()->back()->with('success','تم اضافة الفاتورة بنجاح');
    }

   public function orders($id){

        $Itemsdata = Items::where('orders_id' , '=' , $id) -> get();
        $ItemsdataArr = Items::find($id);
        $setting = Setting::find(1);
        $Ordersdata = Orders::find($id);
        $emp_name = $Ordersdata -> user->name;
        $emp_num = $Ordersdata -> user->user_num;
        $date = Orders::find($id)->created_at->format('d.m.Y');
        $time = Orders::find($id)->created_at->format('H:i:s');
         // $user = User::find(Auth::user()->id);
        $hidden = 0;

      // data:image/png;base64, .........
        $displayQR = GenerateQrCode::fromArray([
            new Seller($setting->name), // seller name        
            new TaxNumber($setting->tax_num), // seller tax number
            new InvoiceDate($Ordersdata->created_at), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
            new InvoiceTotalAmount(number_format($Ordersdata->items_total_after, 2)), // invoice total amount
            new InvoiceTaxAmount(number_format($Ordersdata->items_total_after - $Ordersdata->items_total_befor, 2)), // invoice tax amount
            // TODO :: Support others tags
        ])->render();

        return view('fatora.billDetailsCustomer' , compact(['displayQR','Itemsdata' , 'Ordersdata' , 'date' , 'time' , 'ItemsdataArr' , 'setting' , 'emp_name' , 'emp_num' , 'hidden' ]));

   }
}
