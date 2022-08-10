@extends('user.indexheader')
@section('userbody')
<section class="bg-light p-4">
    <div class="container">

        <table class="table  table-stripped table-hover">
            <thead>
                <tr>
                    <th>Advocate ID</th>
                    <th>SUBJECT</th>
                    <th>DESCRIPTION</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <center>
                        <h3 class="bg-dark p-4 text-primary">
                            Request Send By Advocate and law
                        </h3>
                    </center>
                </tr>

                @foreach($advocaterequest as $value)
                <tr>
                    <td><a href="/viewadvocate/{{$value->advocateid}}">{{$value->advocateid}}</a></td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->issue}}</td>
                    <td>{{$value->status}}</td>
                    @if($value->status=="decline")
                    <td><a href="/resend/{{$value->id}}">Request Resend</a></td>
                    @endif
                </tr>
                @endforeach
                @foreach($caserequest as $value)
                <tr>
                    <td><a href="/viewadvocate/{{$value->advocateid}}">{{$value->advocateid}}</a></td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->issue}}</td>
                    <td>{{$value->status}}</td>
                    @if($value->status=="decline")
                    <td><a href="/law/resend/{{$value->id}}">Request Resend</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection