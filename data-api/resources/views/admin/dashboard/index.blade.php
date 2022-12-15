@extends('admin.layout', [
    'title' => __('Dashboard')
])

@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Quản lý thông tin ngành đào tạo</h3>
                                <div class="nk-block-des text-soft">
                                    <p></p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.create') }}" class="btn btn-primary">
                                    <em class="icon ni ni-plus"></em><span
                                        class="d-none d-md-block">@lang('Thêm thông tin ngành mới')</span>
                                </a>
                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-12">
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                    @if (\Session::has('error'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{!! \Session::get('error') !!}</li>
                                            </ul>
                                        </div>
                                    @endif
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title"><span class="mr-2">Danh sách các ngành</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0 border-top">
                                        <div class="nk-tb-list nk-tb-orders">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col tb-col-sm tb-lead"><span>No.</span></div>
                                                <div class="nk-tb-col tb-col-sm tb-lead"><span>Mã ngành</span></div>
                                                <div class="nk-tb-col tb-col-lg tb-lead"><span>Tên ngành</span></div>
                                                <div class="nk-tb-col tb-col-lg tb-lead"><span>Tổ hợp xét tuyển</span></div>
                                                <div class="nk-tb-col tb-col-md tb-lead"><span>Chỉ tiêu</span></div>
                                                <div class="nk-tb-col tb-col-md tb-lead"><span>Điểm đầu vào</span></div>
                                                <div class="nk-tb-col tb-col-md tb-lead"><span>Điểm xét tuyển</span></div>
                                                <div class="nk-tb-col"><span>&nbsp;</span></div>
                                            </div>
                                            @foreach ($majors as $major)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead"><a href="#">{{ $major->id }}</a></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="user-card">
                                                            <div class="user-name">
                                                                <span class="tb-lead">{{ $major->code }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-sub">{{ $major->name }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-sub">{{ implode(",",$major->subjects_combination) }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub">{{ $major->target }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub">{{ $major->entrance_score }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub">{{ $major->reference_score }}</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-action">
                                                        <div class="dropdown">
                                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                               data-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                <ul class="link-list-plain">
                                                                    <li>
                                                                        <a href="{{ route('admin.show', ['admin' => $major]) }}" class="btn btn-block">Xem</a>
                                                                    </li>
                                                                    <li>
                                                                        <form action="{{ route('admin.destroy', ['admin' => $major]) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-block">Xóa</button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="card-inner d-flex justify-content-center">
                                            {{ $majors->links('pagination::bootstrap-4 ') }}
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
