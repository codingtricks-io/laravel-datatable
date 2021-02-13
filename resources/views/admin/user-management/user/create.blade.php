@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
     
    </nav>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <form method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">
            @csrf
        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"  required >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Phone <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"  required >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"  required >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="address" value="" class="form-control @error('address') is-invalid @enderror required placeholder="Enter Address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Password <span class="tx-danger">*</span></label>
                        <input class="form-control" type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"  required >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form-layout-footer">
                <button type="submit" class="btn btn-info">Create new user</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

