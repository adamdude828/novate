@extends('layouts.master')

@section('topnav')
    @include("sections.loggedOutMenu")
@endsection

@section('content')
<div class="row">
   <div class="col-lg2">
       <form method="POST" action="/auth/login">
           {!! csrf_field() !!}

           <div class="form-group">
               <label for="email">Email</label>
               <input id="email" type="email" name="email" value="{{ old('email') }}">
               <div class="message"></div>
           </div>

           <div class="form-group">
               <label for="password">Password</label>
               <input type="password" name="password" id="password">
           </div>

           <div class="form-group">
               <button type="submit">Login</button>
           </div>
       </form>
   </div>
</div>
@endsection