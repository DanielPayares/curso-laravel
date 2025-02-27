@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col">
            <h1>Reports</h1>
            <a href=""></a>     
        </div>
</div>
<br>
<div class="row">
    <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/create">Create a new report</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
            <table class="table">
                    @foreach($expenseReports as $expenseReport)
                   <tr>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
    
                </table>
    </div>
</div>
@endsection