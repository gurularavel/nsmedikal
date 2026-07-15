@extends('layouts.backend')
@section('title', 'Xəbərlər')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Xəbərlər</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-light-success mb-0">
                                <tbody>
                                <tr>
                                    <td class="table-row-title w-25">ID</td>
                                    <td class="table-center">{{ $newsArticle->id }}</td>
                                </tr>
                                <tr>
                                    <td class="table-row-title w-25">Şəkil</td>
                                    <td class="table-center"><img
                                            src="{{ asset("uploads/news/$newsArticle->image") }}"
                                            style="width: 150px"></td>
                                </tr>
                                @foreach($locales as $locale)
                                    <tr>
                                        <td class="table-row-title w-25">Başlıq ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $newsArticle->{"title:$locale"} }}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-row-title w-25">Mətn ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $newsArticle->{"content:$locale"} }}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-row-title w-25">Seo üçün açıqlama ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $newsArticle->{"meta_description:$locale"} }}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-row-title w-25">Seo üçün açar sözlər ({{ str($locale)->upper() }})</td>
                                        <td class="table-center">{{ $newsArticle->{"meta_keywords:$locale"} }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="table-row-title w-25">Dərc tarixi</td>
                                    <td class="table-center">{{ $newsArticle->published_date }}</td>
                                </tr>
                                <tr>
                                    <td class="table-row-title w-25">Status</td>
                                    <td class="table-center">{!! $newsArticle->status_label !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <a href="{{ route('backend.news_articles.edit', $newsArticle) }}"
                                   class="btn btn-primary mr-2">Redaktə et</a>
                                <a href="{{ route('backend.news_articles.index') }}" class="btn btn-light-primary">Geri qayıt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
