@extends('dashboard.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="direction: rtl">صلاحيات الموقع</h3>
                        </div>
                        <div class="card-footer clearfix">
                            <a type="button" class="btn btn-primary" class="add-project-sidebar" href="javascript:void(0)"
                                data-toggle="modal" data-target="#addProjectSidebar">اضافة صلاحية جديدة</a>
                        </div>
                        {{-- add form --}}
                        <div class="modal fade" id="addProjectSidebar">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">إضافة صلاحية</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="{{ route('roles.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="text-black font-w500">الاسم</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="أدخل الاسم  " required>
                                            </div>
                                            <label>الصلاحيات:</label>
                                            @foreach (config('global.permissions') as $name=>$value)
                                            <div class="form-group">

                                                <label class="checkbox-inline"> <input type="checkbox" class="chk-box" name="permissions[]"
                                                    value="{{$name}}"> {{$value}}</label>
                                               
                                            </div>
                                            @endforeach
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
                                        <th>الاسم</th>
                                        <th>الصلاحيات</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($roles)
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    @foreach ($role -> permissions as $permission)
                                                        {{$permission}} ,
                                                    @endforeach
                                                </td>
                                                <td>
                                                    &emsp;
                                                    <a href="" class="edit-project-sidebar">
                                                        <i class="fas fa-edit" style="color: #111"></i></a>
                                                    &emsp;
                                                    <a href=""><i
                                                            class="far fa-trash-alt" style="color: #f00"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
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
