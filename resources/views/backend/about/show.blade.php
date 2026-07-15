@extends('layouts.backend')
@section('title', 'Haqqımızda')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Haqqımızda</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-light-success mb-0">
                                <tbody>
                                    @foreach($locales as $locale)
                                    <tr>
                                        <td class="table-row-title w-25">Açıqlama ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $about->{"description:$locale"} }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="table-row-title w-25">Şəkil</td>
                                        <td class="table-center">
                                            <img src="{{ asset("uploads/about/$about->image") }}" style="width: 150px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <a href="{{ route('backend.about.edit') }}" class="btn btn-primary mr-2">Redaktə et</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
