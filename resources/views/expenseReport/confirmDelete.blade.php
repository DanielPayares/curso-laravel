@extends('layouts.base')

@section('content')
<div class="row">
        <div class="col">
            <h1>Delete Report {{ $report->id }}</h1>
        </div>
</div>
<br>
<div class="row">
    <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
</div>
<br>
<div class="row">
    
        <form action="/expense_reports/{{ $report->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-primary" type="submit">Delete</button>
        </form>
    
</div>
@endsection