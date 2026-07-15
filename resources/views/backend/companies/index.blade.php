@extends('layouts.backend')
@section('title', 'Şirkətlər')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Şirkətlər</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('backend.companies.create') }}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-plus"></i> Yeni şirkət
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Şəkil</th>
                                        <th>Ad</th>
                                        <th>Məhsul Kateqoriyası</th>
                                        <th>Status</th>
                                        <th>Tənzimləmələr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td><img src="{{ asset("uploads/companies/$company->image") }}" style="width: 150px"></td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->companyCategory?->name }}</td>
                                        <td>{!! $company->status_label !!}</td>
                                        <td>
                                            <a href="{{ route('backend.companies.show', $company) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-cog"></i>
                                            </a>
                                            <a href="{{ route('backend.companies.edit', $company) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <form action="{{ route('backend.companies.destroy', $company) }}" method="POST">
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
                                        <td class="text-center" colspan="6">Göstəriləcək heç bir məlumat tapılmadı</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="float-right">{{ $companies->links() }}</div>
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
