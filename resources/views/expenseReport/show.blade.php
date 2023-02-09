@extends('layouts.base')

@section('content')
    <div class="row text-end">
        <div class="col">
            <h1>Report {{ $report->title }}</h1>

            <div class="row">
                <div class="col">
                    <a class="btn btn-secondary" href="/expense_reports">Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h3>Details</h3>
                    <table class="table">
                        @foreach ($report->expenses as $expense)
                            <tr>
                                <td>{{ $expense->amount }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>{{ $expense->description }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New expense</a>
                </div>
            </div>
        </div>
    </div>
@endsection
