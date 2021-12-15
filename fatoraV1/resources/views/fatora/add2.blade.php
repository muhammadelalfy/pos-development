@extends('layouts.app')

@section('content')


<div class="container">

    <br>
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    @endif


    <form action="orders2" class="fatora__form">
        @csrf
        <h3 class="main_title">فاتورة جديدة</h3>
        <div class="row form-row">
            <div class="form-group col-12">
                <label for="employeename" class="text-center">اسم الموظف / الرقم الوظيفي</label>
                <input type="text" class="form-control bk__grey text-center" id="employeename" value="{{Auth::user()->name}}">
            </div>
        </div>
        <div class="row form-row">
            <div class="form-group col-6">
                <label for="date" class="text-center">التاريخ</label>
                <input type="text" class="form-control bk__grey text-center" id="date" value = "{{ date('Y-m-d') }}">
            </div>
            <div class="form-group col-6">
                <label for="hour" class="text-center"  >الساعة</label>
                <input type="text" class="form-control bk__grey text-center" id="hour" value = "{{ date('H:i:s') }}">
            </div>
        </div>
        <div class="row form-row">
            <div class="form-group col-12 col-md-4 mb_sm">
                <label for="username" class="text-center">اسم العميل</label>
                <input type="text"  name="customer_name"  class="form-control" id="username" >
            </div>
            <input type="hidden" value="{{{ Auth::user()->name}}}"  name="emp_name" id="date">

            <div class="form-group col-12 col-md-4 mb_sm">
                <label for="userphone" class="text-center">رقم جوال العميل</label>
                <input type="text"  name="customer_phone" class="form-control" id="userphone" >
            </div>
            <div class="form-group col-12 col-md-4 mb_sm">
                <label for="usermail" class="text-center">البريد الالكتروني الخاص بالعميل</label>
                <input type="email" class="form-control" id="usermail"  name="customer_email">
            </div>
        </div>




        <div class="form-row">




            <div class="panel panel-footer" >
                <table class=" table-bordered">
                    <thead>
                        <tr>
                            <th>اسم الصنف / المنتج</th>
                            <th>وصف المنتج</th>
                            <th>سعر القطعة</th>
                            <th>الكمية</th>
                            <th>الاجمالي</th>
                            <th><a  class="addRow1"><i class="fas fa-plus"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td><input type="text" name="product_name[]" class="form-control" required=""></td>
                            <td><input type="text" name="brand[]" class="form-control"></td>
                            <td><input type="text" name="budget[]" class="form-control budget"></td>
                            <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
                            <td><input type="text" name="amount[]" class="form-control amount"></td>
                            <td><a  class="btn btn-danger remove"><i class="fas fa-remove"></i></a></td>
                            </tr>
                        </tr>
                    </tbody>

                </table>
            </div>






        </div>
        <div class="row form-row">
            <div class="form-group col-12 col-md-6 mb_sm">
                <label for="notes">ملاحظات اختيارية</label>
                <textarea name="notes" id="notes" class="form-control" ></textarea>
            </div>
            <div class="form-group col-12 col-md-6 mb_sm">
                <div class="d-flex justify-content-between mb-2">
                    <label for="fattotal">المجموع الكلي للفاتورة</label>
                    <input type="text" class="sm-control bk__grey " id="total" name = "items_total_befor">

                    <input type="hidden" class="sm-control bk__grey " id="" name = "user_id" value = "{{Auth::user()->id}}">

                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="tax">قيمة الضريبة المضافة</label>
                    <input type="text" class="sm-control bk__grey text-center tax" id="tax" >
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <label for="total" class="font-weight-bold">الاجمالي</label>
                    <input type="text" class="md-control bk__grey" id="total_after_tax" name = " items_total_after">
                </div>
            </div>
        </div>
        <div class="row form-row border-0">
            <div class="form-group col-12 col-md-6 mb_sm">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="pay" >طريقة الدفع</label>
                    <input type="text" class="md-control" id="pay"  name = "pay_method">
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="paid">المدفوع</label>
                    <input type="text" class="md-control" id="paid"  name = "paid">
                </div>
            </div>
            <div class="form-group col-6 col-md-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="sum">المتبقي</label>
                    <input type="text" class="md-control bk__grey"  name = "rest" id = "rest">
                </div>
            </div>
        </div>
        <div class="btns__wrapper d-flex justify-content-between">

        <input  class="main_btn cancel_btn " type = "text"  value = "الغاء" onClick="window.location.reload(); ">

        <input  class="main_btn save_btn " type = "submit" value = "حفظ">

        </div>
    </form>
</div>


@endsection
