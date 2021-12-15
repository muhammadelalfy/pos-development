@extends('layouts.fatora')

@section('content')

<style>
   @media print {
  #printPageButton {
    display: none;
  }
    #main {
    display: none;
  }
    #new {
    display: none;
  }
}
</style>
    <!----- start title - -->
    
    <button  style="floating:right" id="printPageButton" class="btn btn-primary hidden-print" onclick="window.print();"><span class="bi bi-printer" aria-hidden="true"></span>
            Print</button>

    <a href="{{  url('').'/'.'home' }}" id="main" type="submit" class="btn btn-outline-success pull-left" > <b> الرئيسية </b></a>

    <a href="{{url('purshase/add')}}" id="new" type="submit" class="btn btn-outline-primary pull-left" > <b> فاتورة جديدة </b></a>
    @toastr_css
    <div class="title">

        <div class="container">

            <h3 class="ar">فاتورة ضريبية</h1>
                <h3 class="en">Tax Invoice</h1>
        </div>
        <!----- End title - -->

        <!-- start Invoice -->
        <div class="invoice-num">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 qr-num">
                        
                    
                     <img src = "{{$displayQR}}" alt="QR Code"/>
                    
                    </div>
                    <div class="col-md-6">
                        <div class="num-invoice-content">
                            <div class="tittle-invoice-num">
                                <h5 class="ar-num">
                                    رقم الفاتورة
                                </h5>
                                <h5 class="en-num">
                                    Invoice Number
                                </h5>
                            </div>
                            <div class="number">
                                   <input type="text" value="{{$purshase->id}}" readonly>
                            </div>
                        </div>
                        <div class="Data-invoice-content">
                            <div class="tittle-invoice-data">
                                <h5 class="ar-num">
                                    التاريخ
                                </h5>
                                <h5 class="en-data">
                                    Date
                                </h5>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-4">
                                        <h6 class="ar-data">
                                            تاريخ اصدار الفاتورة
                                        </h6>
                                    </div>
                                    <div class="col-4">
                                            <input type="text" value="{{ date('Y-m-d') }}" name="Invoice_Issue_Data" style="padding-bottom: 3px;padding-top: -6px;margin-top: -8px;" readonly>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="en-data-t">
                                            Invoice Issue Data
                                        </h6>
                                    </div>

                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-4">
                                        <h6 class="ar-data">
                                            تاريخ التوريد
                                        </h6>
                                    </div>
                                    <div class="col-4">

                                            <input type="text" value="{{$purshase->date_of_supply}}" style="margin-top: -10px;" readonly>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="en-data-t">
                                            Date of Supply
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoice -->
    </div>


    <!-- start  body of invoice -->

    <div class="body-invoice">
        <div class="container">
            <div class="body-title">
                <div class="row">
                    <div class="col-md-6 d-flex tit">
                        <h5>عميل</h5>
                        <h5>Buyer</h5>
                    </div>
                    <div class="col-md-6 d-flex tit">
                        <h5>مورد</h5>
                        <h5>Seller</h5>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        الاسم
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->name}}" name="">
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Name
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    الاسم
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> name}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Name
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        رقم المبني
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->building_no}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Building No
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    رقم المبني
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> build_no}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Building No
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        اسم الشارع
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->street}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Street Name
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    اسم الشارع
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text"  value="{{$setting -> street}}" name="">
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Street Name
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        الحي
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->district}}" name="">
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        District
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    الحي
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text"value="{{$setting -> neboor}}" name="">
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    District
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        المدينة
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->city}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        City
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    المدينة
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> city}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    City
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        البلد
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->country}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Country
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    البلد
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> country}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Country
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        الرقم الاضافي للعنوان
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->plus_number_address}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Additional
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    الرقم الاضافي للعنوان
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> plus_number_address}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Additional
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        الرمز البريدي
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->postal_code}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Postal Code
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    الرمز البريدي
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> postal_code}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Postal Code
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        رقم تسجيل ضريبة
                                        القيمة المضافة
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->vat_no}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        VAT No.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    رقم تسجيل ضريبة
                                    القيمة المضافة
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$setting -> tax_num}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    VAT No.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 right">
                    <div class="body-invoice">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <h6 class="ar-body">
                                        معرف اخر
                                    </h6>
                                </div>
                                <div class="col-6">
                                        <input type="text" value="{{$purshase->other_id}}" readonly>
                                </div>
                                <div class="col-3">
                                    <h6 class="en-body-t">
                                        Other ID
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 left">
                    <div class="body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="ar-body">
                                    معرف اخر
                                </h6>
                            </div>
                            <div class="col-6">
                                    <input type="text" value="{{$purshase->other_id_client}}" readonly>
                            </div>
                            <div class="col-3">
                                <h6 class="en-body-t">
                                    Other ID
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- End body of invoice  -->


    <!-- start Description of the good or service -->
    <div class="desc">
        <div class="container">
            <div class="body-title d-flex tit">
                <h5> توصيف السلعة او الخدمة </h5>
                <h5> Line Items</h5>

            </div>





          <div class="form-row">

            <div class="panel panel-footer" >


                <table class="table-bordered">
                <thead>
                    <tr>
                        <th>
                            Item Subtotal including VAT


                            المجموع (شامل ضريبة القيمة المضافة)</th>
                        <th>Tax Amount
                            مبلغ الضريبة</th>
                        <th>
                            Tax Rate


                            نسبة الضريبة </th>
                        <th>
                            Discount
                            الخصومات</th>
                        <th>
                            Taxable Amount
                            المبلغ الخاضع للضريبة</th>
                        <th>
                            Quantity
                            الكمية</th>
                        <th>
                            Unite Price
                            سعر الوحدة</th>
                        <th>
                            Details of goods or service
                            تفاصيل السلع أو الخدمات</th>

                    </tr>
                </thead>
                <tbody>

                  @foreach($products as $key => $value)
                    <tr>
                        <td>{{$value->including_vat}}</td>
                        <td>{{$value->tax_amount}}</td>
                        <td>{{$value->tax_rate}}</td>
                        <td>{{$value->discount}}</td>
                        <td>{{$value->taxable_amount}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->details_goods}}</td>
                        </tr>
                    @endforeach

                </tbody>

                </table>
         </div>
        </div>


        </div>
</div>





    <!------------------------- start Total ------------------>
    <div class="total">
        <div class="container">
            <div class="body-title d-flex tit">
                <h5> اجمالى المبلغ    </h5>
                <h5>Total Amount </h5>
            </div>

            <div class="body-invoice total-last">
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="ar-body total-ar">
                                الإجمالي (غير شامل ضريبة القيمة المضافة)
                            </h6>
                        </div>
                        <div class="col-6">
                            <input type="text" value="{{$purshase->total_without_tax}}" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Discount Without Total
                            </h6>
                        </div>
                    </div>
                </div>


            </div>

            <div class="body-invoice total-last">
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="ar-body total-ar">
                                مجموع الخصومات
                            </h6>
                        </div>
                        <div class="col-6">
                                <input type="text" value="{{$purshase->discount_total}}" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Discount Total
                            </h6>
                        </div>
                    </div>
                </div>


            </div>
            <div class="body-invoice total-last">
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="ar-body total-ar">
                              الإجمالي الخاضع للضربية (غير شامل القيمة المضافة )
                            </h6>
                        </div>
                        <div class="col-6">
                                <input type="text" value="{{$purshase->excluding_vat}}" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Total (Excluding VAT)
                            </h6>
                        </div>
                    </div>
                </div>


            </div>

            <div class="body-invoice total-last">
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="ar-body total-ar">
                                مجموع ضريبة القيمة المضافة
                            </h6>
                        </div>
                        <div class="col-6">
                                <input type="text" value="{{$purshase->total_vat}}" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Total VAT
                            </h6>
                        </div>
                    </div>
                </div>


            </div>
            <div class="body-invoice total-last">
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="ar-body total-ar">
                                اجمالي المبلغ المستحق
                            </h6>
                        </div>
                        <div class="col-6">
                                <input type="text" value="{{$purshase->total_amount_due }}" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Total Amount Due
                            </h6>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!------------------------- End Total ------------------>
    <!--------------------- js -------------------------->



@endsection
