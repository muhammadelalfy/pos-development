@extends('dashboard.layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h5 class="m-0 text-dark">الصفحة الرئيسية للوحة التحكم</h5>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$total}}</h3>
                                    <p>الموظفين</p>
                                </div>
                                <div class="icon">
                                    <i class="icon ion-ios-people-outline"></i>
                                </div>
                                <a href="{{ route('admins.view') }}" class="small-box-footer">قائمة الموظفين
                                    <i class="fas fa-users"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                       </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@endsection