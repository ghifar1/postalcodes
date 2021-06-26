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

                        <form method="post" action="{{url('upload')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Provinces</label>
                                <input type="file" class="form-control-file" name="provinces" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Cities</label>
                                <input type="file" class="form-control-file" name="cities" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Districts</label>
                                <input type="file" class="form-control-file" name="districts" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Villages</label>
                                <input type="file" class="form-control-file" name="villages" id="exampleFormControlFile1">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
