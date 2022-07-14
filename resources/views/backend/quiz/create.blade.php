@extends('backend.layouts.master')

@section('title','create quiz')
@section('content')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <ol class="breadcrumb ml-3">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">New Quiz</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 m-auto">

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">New Quiz</h3>
                        </div>


                        <form data-bitwarden-watching="1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Quiz Name</label>
                                    <input name="name" value="{{ old('name') }}" class="form-control" type="text">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Quiz Description</label>
                                    <textarea name="name" value="{{ old('description') }}" class="form-control" rows="3"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="minutes">Quiz Description</label>
                                    <input name="minutes" value="{{ old('minutes') }}" class="form-control" type="text">
                                    @error('minutes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer justify-content-center">
                                <button type="submit" class="font-weight-bold btn btn-dark  mx-auto d-block">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
</div>
</section>
</div>
@endsection