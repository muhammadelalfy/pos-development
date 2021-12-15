@extends('dashboard.layouts.master')
@section('content')
<div class="content-wrapper">
    <section>
        <div class="card">
            <div class="card-header">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="direction: rtl">مديرين الموقع</h3>
                    </div>
                    <div class="card-footer clearfix">
                        <a type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"
                            data-toggle="modal" data-target="#addProjectSidebar">اضافة جديد</a>
                    </div>
                    {{-- add form --}}
                    <div class="modal fade" id="addProjectSidebar">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">إضافة مدير</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('admins.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label class="input-preview" for="img">أضف صورة
                                            <input class="input-preview__src" id="img" name="image" type="file" />
                                        </label>
                                        <div class="form-group">
                                            <label class="text-black font-w500">الاسم</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="أدخل الاسم  " required>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-black font-w500">البريد الالكترونى</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="أدخل البريد الالكترونى  " required>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-black font-w500">الباسورد</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-black font-w500">الرقم الوظيفى</label>
                                            <input type="text" class="form-control" name="user_num" required>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">إضافة</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end add form --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>البريد الالكترونى</th>
                                    <th> الرقم الوظيفى</th>

                                    <th>التحكم</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ !empty($user->image) ? url('upload/image/' . $user->image) : url('upload/no_image.jfif') }}"
                                                width="120px" height="130px" alt="image"></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->user_num }}</td>
                                        <td>
                                            &emsp;
                                            <a href="{{route('admins.edit',$user->id)}}" class="btn btn-primary">تعديل</a>
                                            &emsp;
                                            <a href="{{ route('admins.delete', $user->id) }}" class="btn btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
@endsection