@extends('user.indexheader')
@section('userbody')
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <center>
                <h3 class="mb-30 text-white bg-warning py-4 ">
                    View Advocate
                </h3>
            </center>

           <center>
           <table border="1px" class="p-4">
                @foreach($advocate as $value)
                <tr class="p-4">
                    <center>
                        <th class="p-4">Name</th>
                        <td ></td>
                        <td class="p-4">{{$value->name}}</td>
                    </center>
                </tr>
                <tr class="p-4">
                    <center>
                        <th class="p-4" >email</th>
                        <td></td>
                        <td class="p-4" >{{$value->email}}</td>
                    </center>
                </tr>
                <tr class="p-4">
                    <center>
                        <th  class="p-4" >Phone number</th>
                        <td></td>
                        <td  class="p-4" >{{$value->phno}}</td>
                    </center>
                </tr>
                @endforeach
            </table>
           </center>
           <a href="/user/viewstatus"><button class="btn btn-warning">BACK</button></a>
        </div>
    </div>
</div>
@endsection