@extends('frontend.layouts.header')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/boostrap.css') }}">
@endpush
@section('content')
<div class="admin-container">
    <div class="admintopbar-div">

        <div class="admin-topbar">
            <h1> Product</h1>
            <p>1255</p>
         </div>
         <div class="admin-topbar">
            <h1> Registered User</h1>
            <p>1255</p>
         </div>
         <div class="admin-topbar">
            <h1> Cart Items</h1>
            <p>1255</p>
         </div>
         <div class="admin-topbar">
            <h1> Delevered Items</h1>
            <p>1255</p>
         </div>
         <div class="admin-topbar">
            <h1>News Letters</h1>
            <p>1255</p>
         </div>
    </div>
    {{-- links --}}
<livewire:admin.ad-product/>
</div>
@endsection
