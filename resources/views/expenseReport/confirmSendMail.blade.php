@extends('layouts.base')

@section('content')
<div class="row">
        <div class="col">
            <h1>Send Report</h1>
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
        <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" placeholder="Type a email" value="{{ old('title') }}">
            </div>
            <button class="btn btn-primary" type="submit">Send Mail</button>
        </form>
    </div>
</div>
@endsection