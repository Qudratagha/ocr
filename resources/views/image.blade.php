@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <div class="row g-2 align-items-center">
                                    <div class="col-12">
                                        <label class="form-label required">Select Image</label>
                                        <input type="file" name="image" class="form-control form-control-lg" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
