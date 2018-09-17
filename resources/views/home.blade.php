@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Create Post</strong></div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="text-input">Post Title</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="select1">Select Category</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="select1" name="select1">
                                        <option value="0">Please select Category</option>
                                        <option value="1">Product #1</option>
                                        <option value="2">Product #2</option>
                                        <option value="3">Product #3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="textarea-input">Body</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="Content.."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="file-multiple-input">Images</label>
                                <div class="col-md-9">
                                    <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                        <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> Reset</button>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
