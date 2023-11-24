@extends('frontend.layouts.header')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/boostrap.css') }}">
@endpush
   @section('content')

 <!-- weekly sales -->

 <section class="weekly-section">
    <livewire:cart.addtocat/>


 <!-- the end of weekly sales -->
   @endsection

