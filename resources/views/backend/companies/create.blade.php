@extends('layouts.backend')
@section('title', 'Şirkətlər')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Şirkətlər</h3>
                        </div>
                    </div>
                    <form action="{{ route('backend.companies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <ul class="nav nav-dark nav-pills" role="tablist">
                                        @foreach($locales as $locale)
                                            <li class="nav-item">
                                                <a class="nav-link @if($loop->first) active @endif"
                                                   id="tab-{{ $locale }}" data-toggle="tab" href="#{{ $locale }}">
                                                    <span class="nav-text">{{ str($locale)->upper() }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                @foreach($locales as $locale)
                                    <div class="tab-pane fade @if($loop->first) active show @endif" id="{{ $locale }}"
                                         role="tabpanel" aria-labelledby="tab-{{ $locale }}">
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Təsvir ({{ str($locale)->upper() }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <textarea
                                                        class="form-control @error("description:$locale") is-invalid @enderror summernote"
                                                        name="description:{{ $locale }}"
                                                        placeholder="Təsvir daxil edin"
                                                        rows="12">
                                                        {{ old("description:$locale") }}
                                                    </textarea>

                                                    @error("description:$locale")
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Məhsullar ({{ str($locale)->upper() }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control @error("products:$locale") is-invalid @enderror"
                                                        name="products:{{ $locale }}"
                                                        value="{{ old("products:$locale") }}"
                                                        placeholder="Məhsullar daxil edin"
                                                    >
                                                    @error("products:$locale")
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
                                    Ad <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control @error("name") is-invalid @enderror"
                                            name="name"
                                            value="{{ old("name") }}"
                                            placeholder="Ad daxil edin">
                                        @error("name")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Şəkil
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                type="file"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                name="image"
                                                accept=".jpg,.jpeg,.png"
                                            >
                                            <label class="custom-file-label">Şəkil seçin</label>
                                        </div>
                                        @error('image')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Kateqoriya <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select
                                            class="form-control @error('company_category_id') is-invalid @enderror select-2"
                                            name="company_category_id"
                                        >
                                            <option value=""></option>
                                            @foreach($companyCategories as $companyCategory)
                                                <option @selected(old('company_category_id') == $companyCategory->id)
                                                        value="{{ $companyCategory->id }}">{{ $companyCategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company_category_id')
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
                                            <option value="1" @selected(old('status') == 1)>Aktiv</option>
                                            <option
                                                value="0" @selected(old('status') == 0 && is_numeric(old('status')))>
                                                Deaktiv
                                            </option>
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
                                    <a href="{{ route('backend.companies.index') }}" class="btn btn-light-primary">Geri
                                        qayıt</a>
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
        $('select[name="status"]').select2({
            placeholder: 'Status seçin',
        });

        $('select[name=company_category_id]').select2({
            placeholder: 'Kateqoriya seçin',
        });

        $('.summernote').summernote({
            height: 250,
        })
    </script>
@endpush
