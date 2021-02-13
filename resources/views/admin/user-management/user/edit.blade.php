@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
     
    </nav>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <form method="POST" enctype="multipart/form-data" action="{{ route('user.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}" placeholder="Enter Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" placeholder="Enter phone Number">
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
                            <input class="form-control" type="text" name="email" value="{{ $user->email}}" placeholder="Enter Email Address">
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
                            <input class="form-control" type="text" name="address" value="{{ $user->address}}" placeholder="Enter Address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">

    <style>
        .camera-overlay {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            font-size: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #00000000;
            color: transparent;
            cursor: pointer;
            transition: background-color 0.5s ease;
            transition: color 0.5s ease;
        }

        .camera-overlay:hover {
            background-color: #00000094;
            color: white;
        }

        .avatar-wrapper {
            position: relative;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection

@section('js')
    <script>

        $('.camera-overlay').on('click', function() {
            $('#br_attachmentfile').click();
        })

        $("#br_attachmentfile").change(function() {
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#br_attachment').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
