@extends('template.template')
@section('content')
    <div class="container div-profile-container">
        <div class="main-body">
            <div class="row gutters-sm div-row-profile">
                <div class="col-md-4 mb-3 w-100">
                    <x-profile.profile-litter></x-profile.profile-litter>
                </div>
                <x-profile.profile-property></x-profile.profile-property>
            </div>
        </div>
    </div>
@endsection
