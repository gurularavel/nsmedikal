@extends('layouts.backend')
@section('title', 'Məhsul Kateqoriyaları')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Məhsul Kateqoriyaları</h3>
                        </div>
                    </div>
                    <form action="{{ route('backend.product_categories.update', $productCategory) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <ul class="nav nav-dark nav-pills" role="tablist">
                                        @foreach($locales as $locale)
                                        <li class="nav-item">
                                            <a class="nav-link @if($loop->first) active @endif" id="tab-{{ $locale }}" data-toggle="tab" href="#{{ $locale }}">
                                                <span class="nav-text">{{ str($locale)->upper() }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                @foreach($locales as $locale)
                                <div class="tab-pane fade @if($loop->first) active show @endif" id="{{ $locale }}" role="tabpanel" aria-labelledby="tab-{{ $locale }}">
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">
                                            Ad ({{ str($locale)->upper() }}) <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control @error("name:$locale") is-invalid @enderror"
                                                    name="name:{{ $locale }}"
                                                    value="{{ old("name:$locale", $productCategory->{"name:$locale"}) }}"
                                                    placeholder="Ad daxil edin"
                                                >
                                                @error("name:$locale")
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Əsas səhifədə göstər <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select
                                            class="form-control @error('main_page_show') is-invalid @enderror select-2"
                                            name="main_page_show"
                                        >
                                            <option value=""></option>
                                            <option value="1" @selected(old('main_page_show', $productCategory) == 1)>Bəli</option>
                                            <option value="0" @selected(old('main_page_show', $productCategory) == 0 && is_numeric(old('main_page_show', $productCategory)))>Xeyr</option>
                                        </select>
                                        @error('main_page_show')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Məhsullar səhifəsində göstər <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select
                                            class="form-control @error('products_page_show') is-invalid @enderror select-2"
                                            name="products_page_show"
                                        >
                                            <option value=""></option>
                                            <option value="1" @selected(old('products_page_show', $productCategory) == 1)>Bəli</option>
                                            <option value="0" @selected(old('products_page_show', $productCategory) == 0 && is_numeric(old('products_page_show', $productCategory)))>Xeyr</option>
                                        </select>
                                        @error('products_page_show')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Status <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select
                                            class="form-control @error('status') is-invalid @enderror select-2"
                                            name="status"
                                        >
                                            <option value=""></option>
                                            <option value="1" @selected(old('status', $productCategory) == 1)>Aktiv</option>
                                            <option value="0" @selected(old('status', $productCategory) == 0 && is_numeric(old('status', $productCategory)))>Deaktiv</option>
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary mr-2">Yadda saxla</button>
                                    <a href="{{ route('backend.product_categories.index') }}" class="btn btn-light-primary">Geri qayıt</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('select[name=status]').select2({
            placeholder: 'Status seçin',
        });
    </script>
@endpush
