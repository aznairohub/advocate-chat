@extends('user.indexheader')
@section('userbody')
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <center>
                <h3 class="mb-30 text-white bg-warning py-4 ">
                    View Advocates
                </h3>
            </center>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <center>
                            <th>Name</th>
                        </center>
                        <center>
                            <th>email</th>
                        </center>
                        <center>
                            <th>Phone number</th>
                        </center>
                        <center>
                            <th>Request</th>
                        </center>
                    </tr>
                </thead>
                <tbody>
                    @foreach($advocate as $value)
                    <tr>
                        <center>
                            <td>{{$value->name}}</td>
                        </center>
                        <center>
                            <td>{{$value->email}}</td>
                        </center>
                        <center>
                            <td>{{$value->phno}}</td>
                        </center>
                        <center>
                            <td class="pr-5"><button class="btn btn-warning btn-block text-danger"><a href="/requestadvocate/{{$value->id}}">Request</a></button></td>
                        </center>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection