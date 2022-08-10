@extends('admin.indexheader')
@section('adminindex')
<div class="content-wrapper">
    <div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
            

                        <p>Advocates</p>
                    </div>
                    <div class="icon">
                        <!-- <i class="ion ion-bag"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        

                        <p>cases</p>
                    </div>
                    <div class="icon">
                        <!-- <i class="ion ion-stats-bars"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                       

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <!-- <i class="ion ion-person-add"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        

                        <p>services</p>
                    </div>
                    <div class="icon">
                        <!-- <i class="ion ion-pie-graph"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
@endsection