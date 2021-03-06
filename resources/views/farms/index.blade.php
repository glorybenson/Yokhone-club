@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <h5 class="page-title">Dashboard</h5>
                    <ul class="breadcrumb ml-2">
                        <li class="breadcrumb-item active">Farms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Farms</h4>
                    <div class="text-right">
                        <a href="{{ route('create.farm') }}" class="btn btn-dark p-2">Add New Farm</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                            <thead class="thead-light">
                                <th>#</th>
                                <th>Farm Name</th>
                                <th>Farm Description</th>
                                <th>Acquisition Date</th>
                                <th>Surface</th>
                                <th>Amount</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @if(isset($farms))
                                @foreach($farms as $farm)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$farm->farm_name}}</td>
                                    <td>{{$farm->farm_desc}}</td>
                                    <td>{{$farm->acquisition_date}}</td>
                                    <td>{{$farm->surface}}</td>
                                    <td>{{$farm->amount}}</td>
                                    <td>{{$farm->latitude}}</td>
                                    <td>{{$farm->longitude}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.farm', $farm->id) }}" class="btn btn-sm p-2" title="Edit"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection