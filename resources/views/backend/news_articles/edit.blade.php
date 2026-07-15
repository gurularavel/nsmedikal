@extends('layouts.backend')
@section('title', 'Xəbərlər')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Xəbərlər</h3>
                        </div>
                    </div>
                    <form action="{{ route('backend.news_articles.update', $newsArticle) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                                Başlıq ({{ str($locale)->upper() }}) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control @error("title:$locale") is-invalid @enderror"
                                                        name="title:{{ $locale }}"
                                                        value="{{ old("title:$locale", $newsArticle) }}"
                                                        placeholder="Başlıq daxil edin"
                                                    >
                                                    @error("title:$locale")
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Mətn ({{ str($locale)->upper() }}) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <textarea
                                                        class="form-control @error("content:$locale") is-invalid @enderror summernote"
                                                        name="content:{{ $locale }}"
                                                        placeholder="Mətn daxil edin"
                                                        rows="12"
                                                    >
                                                        {{ old("content:$locale", $newsArticle) }}
                                                    </textarea>

                                                    @error("content:$locale")
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Qısa açıqlama ({{ str($locale)->upper() }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <textarea
                                                        class="form-control @error("description:$locale") is-invalid @enderror summernote"
                                                        name="description:{{ $locale }}"
                                                        placeholder="Qısa açıqlama daxil edin"
                                                        rows="12">
                                                        {{ old("description:$locale", $newsArticle) }}
                                                    </textarea>

                                                    @error("description:$locale")
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Seo üçün açıqlama ({{ str($locale)->upper() }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                <textarea
                                                    class="form-control @error("meta_description:$locale") is-invalid @enderror summernote"
                                                    name="meta_description:{{ $locale }}"
                                                    placeholder="Seo üçün açıqlama daxil edin"
                                                    rows="4"
                                                >
                                                    {{ old("meta_description:$locale", $newsArticle) }}
                                                </textarea>
                                                    @error("meta_description:$locale")
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">
                                                Seo üçün açar sözlər ({{ str($locale)->upper() }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                <textarea
                                                    class="form-control @error("meta_keywords:$locale") is-invalid @enderror summernote"
                                                    name="meta_keywords:{{ $locale }}"
                                                    placeholder="Seo üçün açar sözlər daxil edin"
                                                >
                                                    {{ old("meta_keywords:$locale", $newsArticle) }}
                                                </textarea>
                                                    @error("meta_keywords:$locale")
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
                                    Dərc tarixi <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control @error("published_date") is-invalid @enderror"
                                            name="published_date"
                                            value="{{ old("published_date", $newsArticle) }}"
                                            placeholder="Tarix daxil edin"
                                        >
                                        @error("published_date")
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
                                            <option value="1" @selected(old('status', $newsArticle) == 1)>Aktiv</option>
                                            <option
                                                value="0" @selected(old('status', $newsArticle) == 0 && is_numeric(old('status', $newsArticle)))>
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
                                    <a href="{{ route('backend.news_articles.index') }}" class="btn btn-light-primary">Geri
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

        $('input[name="published_date"]').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
        });

        $('.summernote').summernote({
            height: 250,
        })
    </script>
@endpush
