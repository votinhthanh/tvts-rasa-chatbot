@extends('admin.layout', [
    'title' => __('Thêm thông tin ngành')
])
@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Thêm thông ngành đào tạo</h3>
                                <div class="nk-block-des text-soft">
                                    <p></p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-12">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title"><span class="mr-2">Create new major</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form action="{{ route('admin.store') }}"
                                                  method="post"
                                                  enctype="multipart/form-data"
                                                  id="myForm">
                                                @csrf @method('POST')
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row g-gs">
                                                            <div class="col-lg-6">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="name">@lang('Tên ngành') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? ''}}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="code">@lang('Mã ngành') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="code" name="code" value="{{ old('code') ?? '' }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="reference_score">@lang('Điểm xét tuyển') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="reference_score" name="reference_score" value="{{ old('reference_score') ?? '' }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="entrance_score">@lang('Điểm đầu vào') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="entrance_score" name="entrance_score" value="{{ old('entrance_score') ?? '' }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="tuition">@lang('Học phí') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="tuition" name="tuition" value="{{ old('tuition') ?? '' }}" required placeholder="13.2 triệu đồng.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="subjects_combination">@lang('Tổ hợp xét tuyển') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="subjects_combination" name="subjects_combination" value="{{ old('subjects_combination') ?? '' }}" required placeholder="A00,A01,B01">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="target">@lang('Chỉ tiêu xét tuyển') <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="number" class="form-control" id="target" name="target" value="{{ old('target') ?? '' }}" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="card-inner card-inner-sm">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="information">@lang('Thông tin ngành') <span class="text-danger">*</span>
                                                                        </label>
                                                                        <div class="form-control-wrap">
                                                                            <textarea class="form-control" id="information" name="information" required>{{ old('information') ?? '' }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-lg-6 col-md-4 ">
                                                                <div class="form-group mt-3">
                                                                    <a href="#">
                                                            <span class=" text-primary">
                                                                <em class="icon ni ni-arrow-long-left"></em> @lang('Back')
                                                            </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 text-right">
                                                                <div class="form-group mt-1 ">
                                                                    <button type="submit" class="btn btn-primary">@lang('Save change')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block -->
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
