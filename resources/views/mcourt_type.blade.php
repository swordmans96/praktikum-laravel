@extends('master')
@section('title', 'Master Court-Types')
@section('content-title', 'Master Court-Types')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @forelse($types as $type)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Hapus</a>
                    </td>
                </tr>
            @empty
            @endforelse
    </table>
</div>
<div class="col-md-4">
   
</div>
@endsection