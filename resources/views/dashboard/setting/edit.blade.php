@extends('dashboard.layouts.master')
@section('content')
    <div class="content-wrapper">
       @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    @endif
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="direction: rtl">تعديل البيانات</h3>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title">تعديل البيانات</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST"
                                action="{{ route('updatesetting', $setting->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">

                                    <div class="form-group">
                                        <label class="text-black font-w500">الصورة</label>
                                        <input class="input-preview__src" id="img" name="image" type="file"   value="" >
                                       
                                    </div>


                                    <label class="text-black font-w500">الاسم</label>
                                    <input type="text" class="form-control" name="name"
                                    value="{{ $setting->name }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">البريد الالكترونى</label>
                                    <input type="text" class="form-control" name="email"
                                    value="{{ $setting->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الضريبة</label>
                                    <input type="number" class="form-control" name="tax"
                                    value="{{ $setting->tax }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">الهاتف</label>
                                    <input type="text" class="form-control" name="phone"
                                    value="{{ $setting->phone }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">رقم السجل التجارى</label>
                                    <input type="text" class="form-control" name="commercial"
                                    value="{{ $setting->commercial }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الرقم الضريبى  </label>
                                    <input type="text" class="form-control" name="tax_num"
                                    value="{{ $setting->tax_num }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">رقم المبنى </label>
                                   <input type="text" class="form-control" name="build_no"
                                    value="{{ $setting->build_no }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الشارع</label>
                                   <input type="text" class="form-control" name="street"
                                    value="{{ $setting->street }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الحى</label>
                                   <input type="text" class="form-control" name="neboor"
                                    value="{{ $setting->neboor }}" required>
                                </div>
                                
                                  <div class="form-group">
                                    <label class="text-black font-w500">المدينة</label>
                                   <input type="text" class="form-control" name="city"
                                    value="{{ $setting->city }}" required>
                                </div>
                                
                                  <div class="form-group">
                                    <label class="text-black font-w500">البلد</label>
                                   <input type="text" class="form-control" name="country"
                                    value="{{ $setting->country }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الرقم الاضافي للعنوان</label>
                                   <input type="text" class="form-control" name="plus_number_address"
                                    value="{{ $setting->plus_number_address }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الرقم  البريدي</label>
                                   <input type="text" class="form-control" name="postal_code"
                                    value="{{ $setting->postal_code }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">العنوان</label>
                                    <textarea name="address" id="" cols="50" rows="0">{!! $setting->address !!}</textarea>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label class="text-black font-w500">الشروط والاحكام</label>
                                    <textarea name="terms" id="" cols="50" rows="0">{!! $setting->terms !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">تعديل</button>
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
