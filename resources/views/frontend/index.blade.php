@extends('frontend.layouts.header')

   @section('content')
        <!-- category section -->
 @include('frontend.layouts.category')
 <!-- the end of category section -->


 <!-- weekly sales -->

 <section class="weekly-section">
    <livewire:product.product/>


 <!-- the end of weekly sales -->
   @endsection

