@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5>versi 0.1 (formula kerja)</h5>
                        <ul>
                            <li>perancah auth ui => <span class="text-success">done</span></li>
                            <li>datatables serverside => <span class="text-success">done</span></li>
                            <li>export button => <span class="text-success">done</span></li>
                            <li>search realtime => <span class="text-success">done</span></li>
                            <li>show data with number => <span class="text-success">done</span></li>
                            <li>create form</li>
                            <li>edit form</li>
                            <li>delete form</li>
                            <li>filter data form</li>
                            <li>relation tabel categories</li>
                            <li>select data dinamic with search</li>
                            <li>dummy data 1jt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
