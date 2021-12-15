@extends('layouts.app')

@section('content')

  <div class="container">

         @if(Session::has('bounced'))
             <p class="alert alert-info">{{ Session::get('bounced') }}</p>
         @endif
      
        <h1 style = "text-align:center"> الفواتير </h1>
   <br>
   <br>

            <table class="table">
            
                 <thead>
                 <tr>
                     <th scope="col">رقم</th>
                     <th scope="col">اسم العميل</th>
                     <th scope="col">المجموع الكلى للفاتوره</th>
                     <th scope="col"> اسم الموظف </th>
                     <th scope="col">  الفاتورة </th>
                     <th scope="col">  الاسترجاع </th>

                 </tr>
                 </thead>
                 <tbody>
                     @foreach($purshase as $key => $value)

                     <tr>
                         <td scope="row">{{$value->id}}</td>
                         <td>{{$value ->name}}</td>
                        <td>{{$value ->total_amount_due}}</td>
                         <td>{{$value ->user->name}}</td>

                         <td><a class="btn btn-info" href="{{route('purshase.show',$value->id)}}">اذهب الى الفاتورة</td>
                         <td>

                         <form class="entertournament" method="POST" action="{{route('addBouncePurshase')}}">
                             @method('POST')
                             @csrf

                      <input type="hidden" name="invoice_id" value="{{$value -> id}}">
                      <button class="btn btn-danger btn-sm btn-upper btn-submit-entertournament">استرجاع</button>&nbsp;
                      
                 </form>
                         </td>

                     </tr>

                    @endforeach
                 </tbody>
           </table>
 </div>

@endsection