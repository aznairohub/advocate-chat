@extends('admin.indexheader')
@section('adminindex')
<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Expandable Table</h3>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Enrollment Number</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phno}}</td>
                                        <td>{{$value->enrollno}}</td>
                                        <td>{{$value->username}}</td>
                                        <td>{{$value->status}}</td>
                                        <td><a href="/advocate/approve/{{$value->id}}">Approve</a></td>
                                        <td><a href="/advocate/decline/{{$value->id}}">Decline</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection