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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-light-success mb-0">
                                <tbody>
                                <tr>
                                    <td class="table-row-title w-25">ID</td>
                                    <td class="table-center">{{ $company->id }}</td>
                                </tr>
                                <tr>
                                    <td class="table-row-title w-25">Şəkil</td>
                                    <td class="table-center">
                                        <img
                                            src="{{ asset('uploads/companies/'. $company->image) }}"
                                            style="width: 150px">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-row-title w-25">Kateqoriya</td>
                                    <td class="table-center">{{ $company->companyCategory?->name }}</td>
                                </tr>
                                <tr>
                                    <td class="table-row-title w-25">Ad</td>
                                    <td class="table-center">{{ $company->name }}</td>
                                </tr>
                                @foreach($locales as $locale)
                                    <tr>
                                        <td class="table-row-title w-25">Təsvir ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $company->{"description:$locale"} }}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-row-title w-25">Məhsullar ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $company->{"products:$locale"} }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="table-row-title w-25">Status</td>
                                    <td class="table-center">{!! $company->status_label !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <a href="{{ route('backend.companies.edit', $company) }}"
                                   class="btn btn-primary mr-2">Redaktə et</a>
                                <a href="{{ route('backend.companies.index') }}" class="btn btn-light-primary">Geri
                                    qayıt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
