@extends('dashboard.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="direction: rtl">تعديل مديرين الموقع</h3>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title">تعديل مدير</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST"
                                action="{{ route('admins.update', $users_edit->id) }}" enctype="multipart/form-data">
                                @csrf
                                <label class="input-preview" for="img">أضف صورة
                                    <input class="input-preview__src" id="img" name="image" type="file" />
                                </label>
                                <div class="form-group">
                                    <label class="text-black font-w500">الاسم</label>
                                    <input type="text" class="form-control" name="name" value="{{ $users_edit->name }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">البريد الالكترونى</label>
                                    <input type="email" class="form-control" name="email" value="{{ $users_edit->email }}"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label class="text-black font-w500">الرقم الوظيفى</label>
                                    <input type="text" class="form-control" name="user_num" value="{{ $users_edit->user_num }}"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label class="text-black font-w500">الباسورد</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="أدخل الرقم السرى لتأكيد التعديل" required>
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
