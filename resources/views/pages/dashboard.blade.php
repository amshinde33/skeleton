{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">
        <div class="col-lg-6 col-xxl-6">
            @include('pages.widgets._widget-1', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-6">
            @include('pages.widgets._widget-2', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-6">
            @include('pages.widgets._widget-3', ['class' => 'card-stretch card-stretch gutter-b'])
           
        </div>
        <div class="col-lg-6 col-xxl-6">
            @include('pages.widgets._widget-4', ['class' => 'card-stretch card-stretch gutter-b'])
        </div>
      
       
      
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
