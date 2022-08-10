@extends('user.indexheader')
@section('userbody')

<section class="bg-darkp-4">
  <div class="container">
    <table class="table  table-stripped table-hover">
      <thead>
        <tr>
          <th>ID</th>
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
          <td><a href="/viewadvocate/{{$value->advocateid}}">{{$value->advocateid}}</a></td>
          <td><a href="/viewcasestatus/{{$value->caseid}}/{{$value->requesttype}}">{{$value->caseid}}</a></td>
          <td>{{$value->requesttype}}</td>
          <td>{{$value->status}}</td>
        @endforeach
    </table>
  </div>
</section>
@endsection
