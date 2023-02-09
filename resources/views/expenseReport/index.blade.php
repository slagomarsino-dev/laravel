@extends('layouts.base')

@section('content')
    <div class="row text-end">
        <div class="col">
            <h1>Reports</h1>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="/expense_reports/create">Create a new report</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table">
                        @foreach ($expenseReports as $expenseReport)
                            <tr>
                                <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                                <td>{{ $expenseReport->title }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
