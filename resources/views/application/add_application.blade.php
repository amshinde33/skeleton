@extends('layout.default')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Application</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('appCreate') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="app_name" class="col-md-4 col-form-label text-md-right">Application Name</label>

                            <div class="col-md-6">
                                <input id="app_name" type="text" class="form-control @error('app_name') is-invalid @enderror" name="app_name" value="" required autocomplete="app_name" autofocus>

                                @error('app_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="app_key" class="col-md-4 col-form-label text-md-right">Application Key</label>

                            <div class="col-md-6">
                                <input id="app_key" type="text" class="form-control @error('app_key') is-invalid @enderror" name="app_key" value="" required autocomplete="app_key">

                                @error('app_key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

              
                        <div class="form-group row">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">SKU</label>

                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" required autocomplete="sku">

                                @error('sku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
