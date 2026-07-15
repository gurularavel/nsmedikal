@extends('layouts.backend')
@section('title', 'Tərcümələr')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Tərcümələr</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('backend.translations.create') }}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-plus"></i> Yeni tərcümə
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <form action="{{ route('backend.translations.index') }}">
                                        <tr>
                                            <th></th>
                                            <th>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="key"
                                                        value="{{ request('key') }}"
                                                        placeholder="Açar"
                                                    >
                                                </div>
                                            </th>
                                            <th>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="value"
                                                        value="{{ request('value') }}"
                                                        placeholder="Dəyər"
                                                    >
                                                </div>
                                            </th>
                                            <th class="justify-content-between">
                                                <button type="submit" class="btn btn-primary font-weight-bolder search-btn mr-2">
                                                    <i class="la la-search"></i>
                                                </button>
                                                <a href="{{ route('backend.translations.index') }}" class="btn btn-secondary font-weight-bolder">
                                                    <i class="la la-close"></i>
                                                </a>
                                            </th>
                                        </tr>
                                    </form>
                                    <tr>
                                        <th>ID</th>
                                        <th>Açar</th>
                                        <th>Dəyər</th>
                                        <th>Tənzimləmələr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($translations as $translation)
                                    <tr>
                                        <td>{{ $translation->id }}</td>
                                        <td>{{ $translation->key }}</td>
                                        <td>{!! $translation->value !!}</td>
                                        <td>
                                            <a href="{{ route('backend.translations.show', $translation) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-cog"></i>
                                            </a>
                                            <a href="{{ route('backend.translations.edit', $translation) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <form action="{{ route('backend.translations.destroy', $translation) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-icon btn-clean">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="4">Göstəriləcək heç bir məlumat tapılmadı</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="float-right">{{ $translations->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/sweetalert.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
@endpush
