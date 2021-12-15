@extends('layouts.fatora')

@section('content')

<form action="{{route('purshase.store')}}" method="POST">
        @csrf
    <!----- start title - -->
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
                                   <input type="text" value="" disabled>
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
                                <input type="text" value="{{ date('Y-m-d') }}" name="Invoice_Issue_Data" disabled>
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
                                            <input type="text" value="" name="date_of_supply">
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
                                        <input type="text" value="" name="name">
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
                                    <input type="text" value="{{$setting -> name}}" disabled>
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
                                        <input type="text" value="" name="building_no">
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
                                   <input type="text" value="{{$setting -> build_no}}" disabled>
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
                                        <input type="text" value="" name="street">
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
                                    <input type="text" value="{{$setting -> street}}" disabled>
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
                                        <input type="text" value="" name="district">
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
                                   <input type="text" value="{{$setting -> neboor}}" name="District_seller" disabled>
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
                                        <input type="text" value="" name="city">
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
                                    <input type="text" value="{{$setting -> city}}" disabled>
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
                                        <input type="text" value="" name="country">
                                        
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
                                    <input type="text" value="{{$setting -> country}}" disabled>
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
                                        <input type="text" value="" name="plus_number_address">
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
                                    <input type="text" value="{{$setting -> plus_number_address}}" disabled>
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
                                        <input type="text" value="" name="postal_code">
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
                                     <input type="text" value="{{$setting -> postal_code}}" disabled>
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
                                        <input type="text" value= "" name ="vat_no">
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
                                     <input type="text" value="{{$setting -> tax_num}}" disabled>
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
                                        <input type="text" value="" name="other_id">
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
                                    <input type="text" value="" name="other_id_client">
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
                <h5>توصيف السلعة أو الخدمة</h5>
                <h5>Line Items</h5>

            </div>

          <div class="form-row">

            <div class="panel panel-footer" >


                <table class="table-bordered" id="tab_logic">
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
                    <tr id='addr0'>
                        <td><input type="number" name="including_vat[]" class="form-control tvat" readonly></td>
                        <td><input type="number" name="tax_amount[]" class="form-control amounttx" readonly></td>
                        <td><input type="number" name="tax_rate[]" class="form-control tax"></td>
                        <td><input type="number" name="discount[]" class="form-control discount" required=""></td>
                        <td><input type="number" name="taxable_amount[]" class="form-control amount"></td>
                        <td><input type="number" name="quantity[]" class="form-control qty"></td>
                        <td><input type="number" name="price[]" class="form-control price"></td>
                        <td><input type="text"   name="details_goods[]" class="form-control" required=""></td>
                        
                        <td><input type="hidden" name="totall[]" class="form-control totall"></td>
                    </tr>
                    <tr id='addr1'></tr>
                    
                </tbody>

                </table>
         </div>
         

    <div class="col-md-12">
      <a id="add_row" class="btn btn-primary pull-left"><i class="fas fa-plus"></i></a>
      <a id='delete_row' class="btn btn-danger"><i class="fas fa-remove"></i></a>
    </div>

        </div>


        </div>
</div>

    <!------------------------- start Total ------------------>
    <div class="total">
        <div class="container">
            <div class="body-title d-flex tit">
                <h5> اجمالى المبلغ </h5>
                <h5>Total Amount</h5>
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
                            <input type="text" value="" name="total_without_tax" id="sub_total" readonly>
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
                                مجموع الخصومات
                            </h6>
                        </div>
                        <div class="col-6">
                                <input type="text" value="" name="discount_total" id="discount_total" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Discount 
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
                                <input type="text" value="" name="excluding_vat" id="amount_total" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en" style="font-size: 12px;">
                                Total Taxable Amount(Excluding VAT)
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
                                <input type="text" value="" name="total_vat" id="amounttx_total" readonly>
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
                                <input type="text" value="" name="total_amount_due" id="Total_Amount_Due" readonly>
                        </div>
                        <div class="col-3">
                            <h6 class=" total-en">
                                Total Amount Due
                            </h6>
                        </div>
                    </div>
                </div>


            </div>
            <br>
            <button type="submit" class="btn btn-primary mb-2"><b> حفظ</b></button>
               <a href="#" class="btn btn-danger pull-left"><b> الغاء</b></a>
        </div>

    </div>
    <!------------------------- End Total ------------------>
    <!--------------------- js -------------------------->

</form>

@endsection
