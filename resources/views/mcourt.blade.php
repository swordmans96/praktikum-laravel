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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                    <a class="btn btn-sm btn-danger" href="">Hapus</a>
                </td>
            </tr>
    </table>
</div>
<div class="col-md-4">
   
</div>
@endsection