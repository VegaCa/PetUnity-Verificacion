@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/galeria.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="section_general">
        {{-- BANNER GALERIA --}}
        <div class="galeria1">
            <h2>@lang('lang.Vgaleria.S1_titulo')</h2>
        </div>

        <section class="galeria2">
            <div class="row mx-0">
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image1.png') }});">
                            <img src="{{ asset('img/galeria/fotogrande.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image2.png') }});">
                            <img src="{{ asset('img/galeria/image2.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image3.png') }});">
                            <img src="{{ asset('img/galeria/image3.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image4.png') }});">
                            <img src="{{ asset('img/galeria/image4.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image5.png') }});">
                            <img src="{{ asset('img/galeria/image5.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image6.png') }});">
                            <img src="{{ asset('img/galeria/image6.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image7.png') }});">
                            <img src="{{ asset('img/galeria/image7.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image8.png') }});">
                            <img src="{{ asset('img/galeria/image8.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image9.png') }});">
                            <img src="{{ asset('img/galeria/image9.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image10.png') }});">
                            <img src="{{ asset('img/galeria/image10.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image11.png') }});">
                            <img src="{{ asset('img/galeria/image11.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image12.png') }});">
                            <img src="{{ asset('img/galeria/image12.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image13.png') }});">
                            <img src="{{ asset('img/galeria/image13.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image14.png') }});">
                            <img src="{{ asset('img/galeria/image14.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image15.png') }});">
                            <img src="{{ asset('img/galeria/image15.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image16.png') }});">
                            <img src="{{ asset('img/galeria/image16.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image17.png') }});">
                            <img src="{{ asset('img/galeria/image17.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image18.png') }});">
                            <img src="{{ asset('img/galeria/image18.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria" style="background-image: url({{ asset('img/galeria/image19.png') }});">
                            <img src="{{ asset('img/galeria/image19.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria"
                            style="background-image: url({{ asset('img/galeria/image20.png') }});">
                            <img src="{{ asset('img/galeria/image20.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <button type="button" id="btn-galeria" class="btn-gal" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="item-galeria"
                            style="background-image: url({{ asset('img/galeria/image21.png') }});">
                            <img src="{{ asset('img/galeria/image21.png') }}" class="d-block d-md-none img-fluid">
                        </div>
                        <div class="h-gal">
                            <span>@lang('lang.Vgaleria.S2_btn')</span>
                        </div>
                    </button>
                </div>
            </div>
        </section>


        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/galeria/fotogrande.png') }}" class="img-fluid" id="modal_body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $(".btn-gal").on('click', function() {
                var src = $("img", this).attr('src');
                $("#modal_body").attr('src', src);
            });
        });
    </script>
@endpush
