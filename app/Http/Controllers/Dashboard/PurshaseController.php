<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purshase;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Setting;
use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;

class PurshaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $setting = Setting::find(1);
        return view('purshase.add',compact('setting'));
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

        $data = $request->all();
        $lastid=purshase::create($data)->id;

        foreach($request->including_vat as $item=>$v){
            $data2=[
                'purshase_id'=>$lastid,
                'including_vat'=>$request->including_vat[$item],
                'tax_amount'=>$request->tax_amount[$item],
                'tax_rate'=>$request->tax_rate[$item],
                'discount'=>$request->discount[$item],
                'taxable_amount'=>$request->taxable_amount[$item],
                'quantity'=>$request->quantity[$item],
                'details_goods'=>$request->details_goods[$item],
                'price'=>$request->price[$item],
                ];
                

            Product::create($data2);
        }
        
         $random = Str::random(20);

         return redirect('purshase/show/'.$lastid.'/'. $random );

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        return view('purshase.view' , compact(['products', 'purshase','displayQR','setting']));
    }

    public function showAllPurshase()
    {
        $purshase = Purshase::all();

      return view('purshase.list' , compact('purshase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
