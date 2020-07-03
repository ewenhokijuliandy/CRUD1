@extends('adminlte.master')

@section('content')
  <div class="container">          
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Pertanyaan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pertanyaan as $key => $q)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $q->pertanyaan }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
@endsection