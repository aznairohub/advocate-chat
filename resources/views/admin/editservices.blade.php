@extends('admin.indexheader')
@section('adminindex')
<div class="container" style="padding:bottom-35px;">
    <section class="content">
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
                        @foreach($result as $value)
                        <form action="/editserviceaction/{{$value->id}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="inputEmail3">Law Name</label>
                                        <input type="text" class="form-control" name="service_name" value="{{$value->service_name}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputPassword3">Law Type</label>
                                        <select name="type" class="form-control">
                                            <option value="{{$value->type}}" default>{{$value->type}}</option>
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
                                        <textarea name="service_descrption" class="form-control" cols="30" rows="10" value="{{$value->service_descrption}}">{{$value->service_descrption}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Status</label>
                                        <input type="text" name="status" value="{{$value->status}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for=""></label>
                                        <input type="submit" value="edit" class="btn btn-block btn-dark">
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection