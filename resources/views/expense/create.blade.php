@extends('layouts.base')

@section('content')
<div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
</div>
<br>
<div class="row">
    <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
            @csrf
            <div class="form-group">
            <label for="title">Description:</label><br>
                <input type="text" name="description" id="description" placeholder="Type a description" value="{{ old('description') }}"><br>
            <label for="title">Amount:</label><br>
            <input type="text" name="amount" id="amount" placeholder="Type an amount" value="{{ old('amount') }}">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection