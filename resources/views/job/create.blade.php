@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('store.form') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Company Name</label>
                                    <input type="text" name="company" class="form-control" id="company">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Address</label>
                                    <input type="text" name="address" class="form-control" id="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Position</label>
                                <input type="text" name="position" class="form-control" id="position">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Salary</label>
                                    <input type="text" name="salary" class="form-control" id="Salary">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Job Name</label>
                                    <input type="text" name="job_name" class="form-control" id="job_name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
