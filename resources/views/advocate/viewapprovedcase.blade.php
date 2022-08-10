@extends('advocate.advocateindexheader')
@section('indexbody')
<section class="bg-primary">
  <div class="container">
    <table class="table table-primary table-stripped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>USER ID</th>
          <th>ADVOCATE ID</th>
          <th>CASE ID</th>
          <th>REQUEST TYPE</th>
          <th>STATUS</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cases as $value)
        <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->userid}}</td>
          <td>{{$value->advocateid}}</td>
          <td>{{$value->caseid}}</td>
          <td>{{$value->requesttype}}</td>
          <td>{{$value->status}}</td>
          <td><a href="/update/{{$value->id}}">Update Status</a></td>
        </tr>
        @endforeach
    </table>
  </div>
</section>
@endsection