@extends('dashboard.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="direction: rtl">الفاتورة الالكترونية</h3>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title">اضافة فاتورة</h5>
                        </div>
                        <div class="modal-body">

                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                
                        <br>
                            <form class="form-horizontal" method="POST"
                            {{-- route('client.store') --}}
                                action="{{url('client/store/1') }}" enctype="multipart/form-data">
                                @csrf
                                

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">اسم الموظف / الرقم الوظيفى</label>
                                    <input type="text" class="form-control" name="emp_name" value=""
                                        required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">التاريخ</label>
                                    <input type="text" class="form-control" name="name" value=""
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الساعه</label>
                                    <input type="text" class="form-control" name="name" value=""
                                        required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">اسم العميل</label>
                                    <input type="text" class="form-control" name="client_name" value=""
                                        required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">رقم جوال العميل</label>
                                    <input type="number" class="form-control" name="phone" value=""
                                        required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">البريد الالكترونى الخاص بالعميل</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">اسم الصنف / المنتج</label>
                                    <input type="text" class="form-control" name="product_name"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">وصف المنتج</label>
                                    <input type="text" class="form-control" name="product_desc"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">سعر القطعة</label>
                                    <input type="text" class="form-control" name="product_price"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">الكمية</label>
                                    <input type="number" class="form-control" name="product_amount"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">الاجمالى</label>
                                    <input type="number" class="form-control" name="product_total"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">ملاحظات اختياريه</label>
                                    <input type="text" class="form-control" name="notes"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">المجموع الكلى للفاتوره</label>
                                    <input type="number" class="form-control" name="total_befor_tax"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>

                                <div class="form-group">
                                    <label class="text-black font-w500">ضريبة القيمة المضافة</label>
                                    <input type="number" class="form-control" name="tax"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">الاجمالى الكلى بعد الضريبة</label>
                                    <input type="number" class="form-control" name="total_after_tax"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                
                                <div class="form-group">
                                    <label class="text-black font-w500">طريقة الدفع</label>
                                    <input type="text" class="form-control" name="method_pay"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">المدفوع</label>
                                    <input type="number" class="form-control" name="paid"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <label class="text-black font-w500">المتبقى</label>
                                    <input type="number" class="form-control" name="rest"
                                        placeholder="" required>
                                </div>

                                <hr>
                                <hr>
                                <hr>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">اضافة فاتورة</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
