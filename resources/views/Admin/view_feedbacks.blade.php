@extends('Admin/master')
@section("content")
<div class="row">
    <div class="col-md-12 mt-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Feedback</th>
          <th scope="col">User</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
      @foreach($feedbacks as $feedback)
        <tr>
          <th scope="row">{{ $feedback->id }}</th>
          <td>{{ $feedback->feedback }}</td>
          <td>{{ $feedback->name }}</td>
          <td>{{ date("Y-m-d", strtotime($feedback->created_at)) }}</td>
        </tr>
      @endforeach  
      </tbody>
    </table>
    </div>
</div>
@endsection