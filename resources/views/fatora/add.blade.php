@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fatora form</title>
    <link href="{{ asset('fatora/img/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{ asset('fatora/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('fatora/css/hover.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/fonts/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/style-ar.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/d10920a460.js"></script>
</head>

<body class="home-page">
     
    <div class="container">

        <br>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        <form action="/orders2" class="fatora__form">
            @csrf
            <h3 class="main_title">فاتورة جديدة</h3>
            <div class="row form-row">
                <div class="form-group col-12">
                    <label for="employeename">اسم الموظف / الرقم الوظيفي</label>
                    <input type="text" class="form-control bk__grey" id="employeename" value = " {{{ Auth::user()->name}}} ">
                </div>
            </div>
            <div class="row form-row">
                <div class="form-group col-6">
                    <label for="date" class="text-center" >التاريخ</label>
                    <input type="text" class="form-control bk__grey" value="{{ date('Y-m-d') }}"  id="date">

                </div>

                <div class="form-group col-6">
                    <label for="hour" class="text-center">الساعة</label>
                    <input type="text" class="form-control bk__grey" value="{{ date('H:i:s') }}" id="hour">
                </div>
            </div>
            <div class="row form-row">
                <div class="form-group col-12 col-md-4 mb_sm">
                    <label for="username" class="text-center">اسم العميل</label>
                    <input type="text" class="form-control" id="username"  name = "customer_name">
                </div>
                <div class="form-group col-12 col-md-4 mb_sm">
                    <label for="userphone" class="text-center" >رقم جوال العميل</label>
                    <input type="text" class="form-control" id="userphone"  name = "customer_phone">
                </div>
                <div class="form-group col-12 col-md-4 mb_sm">
                    <label for="usermail" class="text-center">البريد الالكتروني الخاص بالعميل</label>
                    <input type="email" class="form-control" id="usermail"  name = "customer_email">
                </div>
            </div>





            <div class="panel panel-footer" >
                <div class="form-row">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>اسم الصنف / المنتج</th>
                            <th>وصف المنتج</th>
                            <th>سعر القطعة</th>
                            <th>الكمية</th>
                            <th>الاجمالي</th>
                            <th><a class="addRow"><i class="fas fa-plus"></i></a></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                         <tr>
                         <td><input type="text" name="product_name" class="form-control" required=""></td>
                         <td><input type="text" name="brand" class="form-control"></td>   
                           <td><input type="text" name="quantity" class="form-control quantity" required=""></td>
                           <td><input type="text" name="budget" class="form-control budget"></td>
                           <td><input type="text" name="amount" class="form-control amount"></td>
                         <td><a 
                             class="btn btn-danger remove"><i class="fas fa-minus"></i></a></td>
                         </tr>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            
                        </tr>
                    </tfoot>
                
                    
                </div>
            </div>

            <div class="form-row">
              
                
                </div>
               
            <div class="row form-row">
                <div class="form-group col-12 col-md-6 mb_sm">
                    <label for="notes">ملاحظات اختيارية</label>
                    <textarea name="customer_notes" id="notes" class="form-control"></textarea>
                </div>
                <div class="form-group col-12 col-md-6 mb_sm">
                    <div class="d-flex justify-content-between mb-2">
                        <label for="fattotal">المجموع الكلي للفاتورة</label>
                        <input type="text" class="sm-control bk__grey" id="total_befor_tax" name = "total_befor_tax">
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <label for="tax">قيمة الضريبة المضافة</label>
                        <input type="text" class="sm-control bk__grey" id="tax" value = '15%'>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <label for="total" class="font-weight-bold">الاجمالي</label>
                        <input type="text" class="md-control bk__grey" id="total_after_tax" name="total_after_tax">
                    </div>
                </div>
            </div>
            <div class="row form-row border-0">
                <div class="form-group col-12 col-md-6 mb_sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="pay">طريقة الدفع</label>
                        <input type="text" class="md-control" id="pay">
                    </div>
                </div>
                <div class="form-group col-6 col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="paid">المدفوع</label>
                        <input type="text" class="md-control paid" id="paid" name="paid" >
                    </div>
                </div>
                <div class="form-group col-6 col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="sum">المتبقي</label>
                        <input type="text" class="md-control bk__grey" id="rest" name = "rest"> 
                    </div>
                </div>
            </div>
        </div>
        </table>
            <div class="btns__wrapper d-flex justify-content-between">
                <button class="main_btn cancel_btn">الغاء</button>
                <button class="main_btn save_btn btn-submit">حفظ</button>
            </div>
        </form>
    


   

@endsection


@section('content2')
    <div class="container">
       <div class="check_wrapper">
           <div class="check__body">
            <div class="check_header">
                <div>
                    <h5>اسم المحل</h5>
                    <h5>السجل التجاري</h5>
                </div>
                <div class="check_title">
                     <h3>فاتورة الكترونية</h3>
                </div>
                <div class="check_logo">
                     <img src="img/logo.png" alt="">
                </div>
            </div>
            <div class="check_subheader">
                 <div>
                     <h5>اسم العميل</h5>
                     <h5>رقم جوال العميل</h5>
                     <h5>client@gmail.com</h5>
                 </div>
                 <div class="check_code">
                     <img src="img/img.png" alt="">
                 </div>
                 <div>
                     <h5>00/00/0000</h5>
                     <h5>00:00 Pm</h5>
                     <h5>رقم الفاتورة <span>001</span></h5>
                 </div>
            </div>
            <table class="table table-striped">
                 <thead>
                 <tr>
                     <th scope="col">رقم</th>
                     <th scope="col">اسم المنتج</th>
                     <th scope="col">وصف المنتج</th>
                     <th scope="col">سعر القطعة</th>
                     <th scope="col">العدد</th>
                     <th scope="col">الاجمالي</th>
                 </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <th scope="row">1</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">2</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">3</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">4</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">5</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">6</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">7</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">8</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">9</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                     <tr>
                         <th scope="row">10</th>
                         <td>lorem impsum</td>
                         <td>lorem impsum</td>
                         <td>10$</td>
                         <td>1</td>
                         <td>10.00$</td>
                     </tr>
                 </tbody>
           </table>
 
           <div class="check__total__wrapper">
               <div class="notes_wrap">
                   <h3>ملاحظات</h3>
                   <p>لا يوجد ملاحظات</p>
               </div>
               <div class="total__table">
                     <div class="total_row">
                         <div class="w-50">مجموع الفاتورة</div>
                         <div class="w-50">100$</div>
                     </div>
                     <div class="total_row">
                         <div class="w-50">
                             <small>قيمة الضريبة المضافة</small>
                         </div>
                         <div class="w-50">0%</div>
                     </div>
                     <div class="total_row all__total">
                         <div class="w-50">الاجمالي</div>
                         <div class="w-50">100.00$</div>
                     </div>
                     <div class="total_row">
                         <div class="w-50">
                             المدفوع
                             <small> 100$</small>
                         </div>
                         <div class="w-50">
                             المتبقي 
                             <small>00.00$</small>
                         </div>
                     </div>
                     <div class="total_row">
                         <div class="w-50">
                             <strong>طريقة الدفع</strong>
                         </div>
                         <div class="w-50">
                             <strong>كاش</strong>
                         </div>
                     </div>
               </div>
           </div>
           </div>

          <div class="check__footer">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h5 class="terms_title">الشروط والأحكام</h5>
                        <p class="footer_des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Dolores veritatis hic nesciunt accusamus tempore accusantium ipsa, explicabo quidem, atque consectetur ipsam doloribus inventore eveniet, dolor itaque minima porro 
                            labore! Tenetur vel, soluta ex eius iusto incidunt! In voluptatibus explicabo unde.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <h3 class="footer_title">بيانات التواصل</h3>
                        <div class="footer_links">
                            <div class="contact_info">
                                <i class="fa fa-phone"></i>
                                <span>000055551</span>
                            </div>
                            <div class="contact_info">
                                <i class="fa fa-envelope"></i>
                                <span>my@email.com</span>
                            </div>
                            <div class="contact_info">
                                <i class="fa fa-map-marker"></i>
                                <span>حي الشاطيء - مكة المكرمة</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h3 class="footer_title">بيانات الموظف</h3>
                        <div class="footer_links">
                            <div class="contact_info">
                                <i class="fa fa-user"></i>
                                <span>اسم الموظف</span>
                            </div>
                            <div class="contact_info">
                                <i class="fa fa-arrow-circle-left"></i>
                                <span>الرقم الوظيفي</span>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
       </div>
    </div>
    @endsection