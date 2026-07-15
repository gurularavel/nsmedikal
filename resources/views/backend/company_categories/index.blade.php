@extends('layouts.backend')
@section('title', 'Şirkət Kateqoriyaları')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Şirkət Kateqoriyaları</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('backend.company_categories.create') }}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-plus"></i> Yeni şirkət kateqoriyası
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ad</th>
                                        <th>Status</th>
                                        <th>Tənzimləmələr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($companyCategories as $companyCategory)
                                    <tr>
                                        <td>{{ $companyCategory->id }}</td>
                                        <td>{{ $companyCategory->name }}</td>
                                        <td>{!! $companyCategory->status_label !!}</td>
                                        <td>
                                            <a href="{{ route('backend.company_categories.show', $companyCategory) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-cog"></i>
                                            </a>
                                            <a href="{{ route('backend.company_categories.edit', $companyCategory) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <form action="{{ route('backend.company_categories.destroy', $companyCategory) }}" method="POST">
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
                            <div class="float-right">{{ $companyCategories->links() }}</div>
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
