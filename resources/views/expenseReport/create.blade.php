@extends('layouts.base')

@section('content')
<div class="row">
        <div class="col">
            <h1>New Report</h1>
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
    
        <form action="/expense_reports" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label><br>
                <input type="text" name="title" id="title" placeholder="Type a title">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    
</div>
@endsection