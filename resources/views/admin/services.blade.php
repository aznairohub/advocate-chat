@extends('admin.indexheader')
@section('adminindex')
<div class="container" style="padding:bottom-35px;">
    <section class="content" >
        <div class=" container-fluid">
        <div class="row" style="padding-top: 100px;">
            <!-- left column -->
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Add Laws</h3>
                    </div>
                    <form action="/serviceaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="inputEmail3">Law Name</label>
                                    <input type="text" class="form-control" name="service_name" placeholder="Law name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputPassword3">Law Type</label>
                                    <select name="type" class="form-control">
                                        <option value="" default>---------select one---------</option>
                                        <option value="MATRIMONIAL">MATRIMONIAL</option>
                                        <option value="CIVIL/PROPERTY">CIVIL/PROPERTY</option>
                                        <option value="CIVIL/DEBT">CIVIL/DEBT</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="">Law descrption</label>
                                    <textarea name="service_descrption" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Status</label>
                                    <input type="text" name="status" value="Available" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for=""></label>
                                    <input type="submit" value="Add" class="btn btn-block btn-dark">
                                </div>
                                <div class="col-sm-3">
                                    <label for=""></label>
                                    <input type="reset" value="Cancel" class="btn btn-block btn-dark">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container" style="padding-top:75px">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h3 class="card-title">View Laws</h3>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Law Name</th>
                                        <th>Law Discription</th>
                                        <th>Law Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->service_name}}</td>
                                        <td>{{$value->type}}</td>
                                        <td>{{$value->service_descrption}}</td>
                                        <td>{{$value->status}}</td>
                                        <td><a href="/editservice/{{$value->id}}">Edit</a></td>
                                        <td><a href="/deleteservices/{{$value->id}}">Delete</a></td>
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