@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <h5 class="page-title">Dashboard</h5>
                    <ul class="breadcrumb ml-2">
                        <li class="breadcrumb-item">Finance</li>
                        <li class="breadcrumb-item active">Expenses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Expenses</h4>
                    <div class="text-right">
                        <a href="{{ route('create.expense') }}" class="btn btn-dark p-2">Add New Expense</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                            <thead class="thead-light">
                                <th>#</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Farm Name</th>
                                <th>Employee making the expense</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @if(isset($expenses))
                                @foreach($expenses as $expense)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$expense->date}}</td>
                                    <td>{{$expense->desc}}</td>
                                    <td>{{$expense->amount}}</td>
                                    <td>{{$expense->farm->farm_name}}</td>
                                    <td>{{$expense->employee->first_name}} {{$expense->employee->last_name}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.expense', $expense->id) }}" class="btn btn-sm p-2" title="Edit"><i class="fa fa-edit"></i></a>
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