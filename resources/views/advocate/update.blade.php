@extends('advocate.advocateindexheader')
@section('indexbody')
<div>
    <div class="container">
        <div class="row pt-4">

            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <center>
                    <h2 class="text-light bg-primary p-4">Update case status</h2>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 20px">

            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="padding-top: 20px;width:100%">
                @foreach($status as $value)
                <form action="/updateaction/{{$value->id}}" method="post">
                    @csrf
                    <div class="row pt-3">
                        <div class="col-sm-12">
                            <p class=" text-primary">Name</p>
                            <textarea  class="form-control " name="status" value="{{$value->status}}">{{$value->status}}</textarea>
                        </div>
                    </div>
                    <div class="p-4">
                        <button class=" btn btn-primary btn-block" type="submit">update</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection