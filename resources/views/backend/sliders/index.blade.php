@extends('layouts.backend')
@section('title', 'Slaydlar')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Slaydlar</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('backend.sliders.create') }}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-plus"></i> Yeni slayd
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
                                        <th>Başlıq</th>
                                        <th>Status</th>
                                        <th>Tənzimləmələr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td><img src="{{ asset("uploads/sliders/$slider->image") }}" style="width: 150px"></td>
                                        <td>{!! $slider->title !!}</td>
                                        <td>{!! $slider->status_label !!}</td>
                                        <td>
                                            <a href="{{ route('backend.sliders.show', $slider) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-cog"></i>
                                            </a>
                                            <a href="{{ route('backend.sliders.edit', $slider) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <form action="{{ route('backend.sliders.destroy', $slider) }}" method="POST">
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
                            <div class="float-right">{{ $sliders->links() }}</div>
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
