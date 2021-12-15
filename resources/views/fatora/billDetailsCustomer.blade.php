
@extends('layouts.app')

@section('content')
<style>
   @media print {
  #printPageButton {
    display: none;
  }
}
</style>
    <div class="container">
        <button  style="floating:right" id="printPageButton" class="btn btn-primary hidden-print" onclick="window.print();"><span class="bi bi-printer" aria-hidden="true"></span>
            Print</button>
       <div class="check_wrapper">
           <div class="check__body">
            <div class="check_header">
                <div>
                    <h5> {{$setting -> name}}</h5>
                    <h5>{{$setting -> commercial}}</h5>
                    <h5>{{$setting -> tax_num}}</h5>
                </div>
                <div class="check_title">
                     <h3>فاتورة ضريبية مبسطة</h3>
                </div>
                   <div class="check_logo">
                     <img src="{{ !empty($setting-> image) ? url('upload/image/' . $setting-> image) : url('upload/no_image.jfif') }}" alt="">
                </div>
            </div>
            <div class="check_subheader">
                 <div>
                     <h5 >{{$Ordersdata -> customer_name}}</h5>
                     <h5>{{$Ordersdata -> customer_phone}}</h5>
                     <h5>{{$Ordersdata -> customer_email}}</h5>
                 </div>
                 <div >
                    {{-- .'/'.$hash) --}}
                  <?php $name = $setting->name; ?>
                    
                  <img src = "{{$displayQR}}" alt="QR Code" style="width: 280%;margin-left: -180px;"/>

               </div>
                
                 <div>
                     <h5>{{ $date }}</h5>
                     <h5>{{ $time }}</h5>
                     <h5> رقم الفاتورة : <span>
                        <strong>{{$Ordersdata -> id}}</strong>
                    </span></h5>
                 </div>
            </div>
            <table class="table table-striped">
                 <thead>
                <tr>
                     <th scope="col"  style="color:black">رقم</th>
                     <th scope="col"  style="color:black"> نوع الخدمة / المنتج</th>
                     <th scope="col"  style="color:black"> الوصف</th>
                     <th scope="col"  style="color:black">السعر </th>
                     <th scope="col"  style="color:black">العدد</th>
                     <th scope="col"  style="color:black">الاجمالي</th>
                 </tr>
                 </thead>
                 <tbody>
                 @foreach($Itemsdata as $key => $value)
                     <tr>

                         <td style="color:#000" scope="row">{{++$key}}</td>
                         <td style="color:#000">{{$value -> product_name}}</td>
                         <td style="color:#000">{{$value -> brand}}</td>
                         <td style="color:#000">{{$value -> budget}}</td>
                         <td style="color:#000">{{$value -> quantity}}</td>
                         <td style="color:#000">{{$value -> amount}}</td>

                        
                     </tr>
                    @endforeach
                
                    
                 </tbody>
           </table>
 
           <div class="check__total__wrapper">
               <div class="notes_wrap">
                   <h3>ملاحظات</h3>
                   <p>{{$Ordersdata -> notes}}</p>
               </div>
               <div class="total__table">
                     <div class="total_row">
                         <div class="w-50">مجموع الفاتورة</div>
                         <div class="w-50">{{$Ordersdata -> items_total_befor}}</div>
                     </div>
                     <div class="total_row">
                         <div class="w-50">
                             <small style="display: block ruby;">قيمة الضريبة المضافة :  {{$setting -> tax}} %</small>
                             
                         </div>
                     </div>
                            <div class="total_row">
                         <div class="w-50">
                             <small style="display: block ruby;"> مبلغ الضريبه المضافه : {{ number_format($Ordersdata->items_total_after - $Ordersdata->items_total_befor, 2) }}</small> 
                         </div>
                     </div>
                     <div class="total_row all__total">
                         <div class="w-50">الاجمالي</div>
                         <div class="w-50">{{ number_format($Ordersdata->items_total_after, 2) }} ريال</div>
                     </div>
                     <div class="total_row">
                         <div class="w-50" style="display: grid;">
                             المدفوع
                             <small> {{ number_format($Ordersdata -> paid, 2) }}</small>
                         </div>
                         <div class="w-50">
                             المتبقي 
                             <small>{{ number_format($Ordersdata -> rest, 2) }}</small>
                         </div>
                     </div>
                     <div class="total_row">
                         <div class="w-50">
                             <strong>طريقة الدفع</strong>
                         </div>
                         <div class="w-50">
                             <strong>{{$Ordersdata -> pay_method}}</strong>
                         </div>
                     </div>
               </div>
           </div>
           </div>

          <div class="check__footer">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h5 class="terms_title">الشروط والأحكام</h5>
                        <p class="footer_des">{{$setting -> terms}}</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <h3 class="footer_title">بيانات التواصل</h3>
                        <div class="footer_links">
                            <div class="contact_info">
                                <i class="fa fa-phone"></i>
                                <span>{{$setting -> phone}}</span>
                            </div>
                            <div class="contact_info">
                                <i class="fa fa-map-marker"></i>
                                <span>{{$setting -> address}}</span>
                            </div>
                             <div class="contact_info">
                                <i class="fa fa-envelope"></i>
                                <span>{{$setting -> email}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h3 class="footer_title">بيانات الموظف</h3>
                        <div class="footer_links">
                            <div class="contact_info">
                                <i class="fa fa-user"></i>
                                <span>اسم الموظف : {{$emp_name}}</span>
                            </div>
                            <div class="contact_info">
                                <i class="fa fa-arrow-circle-left"></i>
                                <span>الرقم الوظيفي : {{$emp_num}}</span>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
       </div>
    </div>




    @endsection