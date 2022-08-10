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
                @foreach($case as $value)
                <tr class="p-4">
                    <center>
                        <th class="p-4">Advocate id</th>
                        <td ></td>
                        <td class="p-4">{{$value->advocateid}}</td>
                    </center>
                </tr>
                <tr class="p-4">
                    <center>
                        <th class="p-4" >Subject</th>
                        <td></td>
                        <td class="p-4" >{{$value->subject}}</td>
                    </center>
                </tr>
                <tr class="p-4">
                    <center>
                        <th  class="p-4" >Issue</th>
                        <td></td>
                        <td  class="p-4" >{{$value->issue}}</td>
                    </center>
                </tr>
                <tr class="p-4">
                    <center>
                        <th  class="p-4" >STATUS</th>
                        <td></td>
                        <td  class="p-4" >{{$value->status}}</td>
                    </center>
                </tr>
                @endforeach
            </table>
           </center>
           <a href="/user/viewcases"><button class="btn btn-warning p-4">BACK</button></a>
        </div>
    </div>
</div>
@endsection