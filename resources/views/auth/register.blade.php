@extends('layouts.master')

@section('topnav')
    @include("sections.loggedOutMenu")
@endsection

@push('scripts')
    <script src="/js/loginCheck.js"></script>
@endpush

@section('content')
    <div class="row">
        <div class="col-lg2">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}">
                    <div id="email_message"></div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="password_confirmation">
                </div>

                <div>
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection