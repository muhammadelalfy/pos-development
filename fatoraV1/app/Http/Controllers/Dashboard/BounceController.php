<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBounce;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Orders;
use App\Models\Setting;
use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;
use App\Models\Purshase;
use App\Models\Product;

class BounceController extends Controller
{
    public function index()
    {
        // $data = Orders::all();
        // dd($data );
        return view('fatora.billDetailsBounce' , compact('data'));
    }

    public function MakeBounce(StoreBounce $request)
    {
       $bo = Orders::where('type' , 'bounce')->count();
       
       $bounce = Orders::Where('id',$request->invoice_id)->first();
       $bounce->update([
        'type'=>'bounce',
        'bou_number' => $bo + 1
       ]);
       return redirect()->back()->with('bounced','تم الاسترجاع بنجاح ');
    }
    
     public function MakeBouncePurshase(StoreBounce $request)
    {
       $bo = Purshase::where('type' , 'bounce')->count();
       
       $bounce = Purshase::Where('id',$request->invoice_id)->first();
       $bounce->update([
        'type'=>'bounce',
        'bou_number' => $bo + 1
       ]);
       return redirect()->back()->with('bounced','تم الاسترجاع بنجاح ');
    }

    public function AllBounce()
    {
         $data = Orders::where('type' , 'bounce')->get();
        return view('fatora.billDetailsBounce' , compact('data'));
    }
    
        public function AllBouncePurshase()
    {
         $purshase = Purshase::where('type' , 'bounce')->get();
        return view('purshase.listbounce' , compact('purshase'));
    }
    
    
    public function purshaseBounce($id)
    {
          $products = Product::where('purshase_id' , '=' , $id) -> get();
        $purshase =  Purshase::find($id);
    $setting = Setting::find(1);
        // data:image/png;base64, .........
        $displayQR = GenerateQrCode::fromArray([
            new Seller($setting->name), // seller name        
            new TaxNumber($setting->tax_num), // seller tax number
            new InvoiceDate($purshase->created_at), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
             new InvoiceTotalAmount($purshase->total_amount_due), // invoice total amount
             new InvoiceTaxAmount($purshase->total_vat), // invoice tax amount
            // TODO :: Support others tags
        ])->render();

        toastr()->success('تم اضافة الفاتورة بنجاح');
        return view('purshase.viewbounce' , compact(['products', 'purshase','displayQR','setting']));
    }
    
    
    
    public function ordersbounce($id){

    $Itemsdata = Items::where('orders_id' , '=' , $id) -> get();
    $ItemsdataArr = Items::find($id);
    $setting = Setting::find(1);
    $Ordersdata = Orders::find($id);
    $emp_name = $Ordersdata -> user->name;
    $emp_num = $Ordersdata -> user->user_num;
    $date = Orders::find($id)->created_at->format('d.m.Y');
    $time = Orders::find($id)->created_at->format('H:i:s');
    $date2 = Orders::find($id)->updated_at->format('d.m.Y');
    $time2 = Orders::find($id)->updated_at->format('H:i:s');
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
  
    return view('fatora.billDetailsCustomerbounce' , compact(['displayQR','Itemsdata' , 'Ordersdata' , 'date' , 'time' , 'date2' , 'time2', 'ItemsdataArr' , 'setting' , 'emp_name' , 'emp_num' , 'hidden' ]));

    }
}
