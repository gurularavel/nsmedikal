@extends('layouts.backend')
@section('title', 'Tarixlər')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Tarixlər</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-light-success mb-0">
                                <tbody>
                                    <tr>
                                        <td class="table-row-title w-25">ID</td>
                                        <td class="table-center">{{ $history->id }}</td>
                                    </tr>
                                    @foreach($locales as $locale)
                                    <tr>
                                        <td class="table-row-title w-25">Açıqlama ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $history->{"description:$locale"} }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="table-row-title w-25">İl</td>
                                        <td class="table-center">{{ $history->year }}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-row-title w-25">Status</td>
                                        <td class="table-center">{!! $history->status_label !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <a href="{{ route('backend.histories.edit', $history) }}" class="btn btn-primary mr-2">Redaktə et</a>
                                <a href="{{ route('backend.histories.index') }}" class="btn btn-light-primary">Geri qayıt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
