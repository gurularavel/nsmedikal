@extends('layouts.backend')
@section('title', 'Tənzimləmələr')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Tənzimləmələr</h3>
                        </div>
                    </div>
                    <form action="{{ route('backend.settings.update', $setting) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Açar söz <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input readonly
                                               class="form-control @error('key') is-invalid @enderror"
                                               value="{{ $setting->key }}">

                                        @error('key')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Növ <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select
                                            class="form-control @error('type') is-invalid @enderror select-2"
                                            name="type">
                                            <option selected value="file" @selected(old('type', $setting) == 'file')>
                                                Fayl
                                            </option>
                                            <option value="text" @selected(old('type', $setting) == 'text')>Mətn
                                            </option>
                                        </select>

                                        @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="display: none" id="valueBlock">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Dəyər <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <textarea
                                            class="form-control @error('value') is-invalid @enderror"
                                            name="value"
                                            placeholder="Dəyər daxil edin"
                                            rows="4">
                                            {{ old('value', $setting) }}
                                        </textarea>
                                        @error('value')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="display: none" id="fileUploadBlock">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    Fayl <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <a target="_blank" class="btn btn-primary mb-2"
                                       href="/uploads/settings/{{ $setting->value }}">Fayla bax</a>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                type="file"
                                                class="custom-file-input @error('file') is-invalid @enderror"
                                                name="file"
                                                accept=".jpg,.jpeg,.png,.pdf,.xls,.xlsx,.doc,.docx"
                                            >
                                            <label class="custom-file-label">Faylı dəyişdir</label>
                                        </div>
                                        @error('file')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary mr-2">Yadda saxla</button>
                                    <a href="{{ route('backend.settings.index') }}" class="btn btn-light-primary">Geri
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
        const fileUploadBlock = $('#fileUploadBlock');
        const valueBlock = $('#valueBlock');
        const typeSelect = $('select[name=type]');

        if(typeSelect.val() === 'text') {
            valueBlock.show();
        } else {
            fileUploadBlock.show();
        }

        typeSelect.on('change', function () {
            if ($(this).val() === 'file') {
                fileUploadBlock.show()
                valueBlock.hide();
            } else {
                valueBlock.show()
                fileUploadBlock.hide()
            }
        })
    </script>
@endpush
