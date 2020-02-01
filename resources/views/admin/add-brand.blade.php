@extends('admin.dashboard')

@section('dashboard-content')
    <section class="content-header">
        <!--section starts-->
        <h1>
            Add Brand
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item pt-1"><a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-home"></i> Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:avoid(0)">Brands</a>
            </li>
            <li class="breadcrumb-item active">
                Add Brand
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-md-8 offset-2 bt-md">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title d-inline">
                            <i class="fa fa-fw fa-crosshairs"></i> General Elements
                        </h3>
                        <span class="pull-right">
                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                            <i class="fa fa-fw fa-times removepanel"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('save-brand') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="input-text" class="col-lg-2 col-md-2  col-sm-12 col-12 col-form-label text-lg-right text-md-right text-left">Input text</label>
                                <div class="col-lg-10 col-md-10  col-sm-12 col-12 col-sm-12">
                                    <input type="text" class="form-control form-control-lg" id="input-text" placeholder="Input text" name="brand_name">
                                </div>
                            </div>
                            <div class="offset-lg-3 col-lg-9 col-12 ">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
