@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card p-5">
                <h5 class="card-center text-center pb-2" >{{ __('واجهة البدء') }}</h5>

                    <div class="card-body text-center" >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <label for="name">اهلا <b>{{auth()->user()->name }}</b></label> <br>

                        {{ __('تم تسجيل الدخول!') }}

                    </div>
                    <div class="text-center">
                        <a href="/projects" class="btn btn-primary px-4" role="button">مشاريعي</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
