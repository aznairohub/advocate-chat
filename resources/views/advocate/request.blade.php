@extends('advocate.advocateindexheader')
@section('indexbody')
<section class="bg-primary">
  <div class="container">
    <table class="table table-primary table-stripped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>USER ID</th>
          <th>USER NAME</th>
          <th>SUBJECT</th>
          <th>DESCRIPTION</th>
          <th>STATUS</th>
        </tr>
      </thead>
      <tbody>
        @foreach($request as $value)
        <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->userid}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->subject}}</td>
          <td>{{$value->issue}}</td>
          <td>{{$value->status}}</td>
          @if($value->status=="pending"||$value->status=="request resend")
          <td><a href="/requestapprove/{{$value->id}}">APPROVE</a></td>
          <td><a href="/requestdecline/{{$value->id}}">DECLINE</a></td>
          @endif
        </tr>
        @endforeach
    </table>
  </div>
</section>
@endsection