@extends('master')
@section('title', 'Master Courts')
@section('content-title', 'Master Courts')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table">
            <tr>
                <th>No</th>
                <th>Court Type</th>
                <th>Court Name</th>
                <th>Action</th>
            </tr>
            @forelse($courts as $court)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $court->type->name }}</td>
                    <td>{{ $court->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Hapus</a>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">
                      Belum ada data  
                </div>
            @endforelse
    </table>
</div>
<div class="col-md-4">
   
</div>
@endsection