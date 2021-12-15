@extends('layouts.app')

@section('content')
    <div class="container">

         @if(Session::has('bounced'))
             <p class="alert alert-info">{{ Session::get('bounced') }}</p>
         @endif
      
        <h1 style = "text-align:center"> الفواتير </h1>
   <br>
   <br>

            <table class=" table">
            
                 <thead>
                 <tr>
                     <th scope="col">رقم</th>
                     <th scope="col">اسم العميل</th>
                     <th scope="col">رقم تليفون العميل</th>
                     <th scope="col">البريد الالكترونى</th>
                     <th scope="col">المجموع الكلى للفاتوره</th>
                     <th scope="col">الملاحظات</th>
                     <th scope="col">طريقة الدفع </th>
                     <th scope="col"> المدفوع </th>
                     <th scope="col"> الباقى </th>
                     <th scope="col"> اسم الموظف </th>

                     <th scope="col">  الفاتورة </th>

                 </tr>
                 </thead>
                 <tbody>
                     @foreach($data as $key => $value)

                     <tr>
                         <td scope="row">{{++$key}}</td>
                         <td>{{$value -> customer_name}}</td>
                         <td>{{$value -> customer_phone}}</td>
                         <td>{{$value -> customer_email}}</td>
                         <td>{{$value -> items_total_after}}</td>
                         <td>{{$value -> notes}}</td>
                         <td>{{$value -> pay_method}}</td>
                         <td>{{$value -> paid}}</td>
                         <td>{{$value -> rest}}</td>
                         <td>{{$value -> emp_name}}</td>

                         <td><a class="btn btn-info" href="orders/{{$value -> id}}">اذهب الى الفاتورة</td>
                         <td>

                         <form class="entertournament" method="POST" action="{{route('addBounce')}}">
                             @method('POST')
                             @csrf

                      <input type="hidden" name="invoice_id" value="{{$value -> id}}">
                      <button class="btn btn-label-danger btn-sm btn-upper btn-submit-entertournament">استرجاع</button>&nbsp;
                      
                 </form>
                         </td>

                     </tr>

                    @endforeach
                 </tbody>
           </table>
 
    @endsection
