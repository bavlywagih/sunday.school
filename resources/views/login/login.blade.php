@extends('template.template')
@section('content')
<style></style>
<form class="auth-form bg-white p-5 rounded" method="POST" action="{{ route('login') }}" >
    @csrf
    <div class="form-outline mb-4">
      <label class="form-label d-flex align-items-center gap-2" for="name">
        <i class="fa-solid fa-signature"></i>
            الاسم
      </label>
      <input type="text" name="name" id="name" class="form-control"/>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label d-flex align-items-center gap-2" for="password">
    <i class="fa-solid fa-lock "></i>
        كلمه المرور
      </label>
      <input type="password" name="password" id="password" class="form-control"/>
    </div>
    <div class="d-flex align-items-center justify-content-between mb-3">
      <div class="d-flex justify-content-center">
        <div class="form-check">
            <label class="form-check-label" for="remember"> تذكرني</label>
            <input class="form-check-input" name="remember" type="checkbox" value="1" id="remember" checked/>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block w-100 mt-3">Sign in</button>
  </form>
@endsection
