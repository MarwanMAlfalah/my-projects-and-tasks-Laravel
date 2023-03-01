@extends('layouts.app')

@section('title', 'إنشاء مشروع جديد')

@section('content')

<div class="row justify-content-center text-right">
    <div class="col-8">
        <div class="card p-5">
            <h3 class="text-center pb-5 font-weight-bold">
                مشروع جديد
            </h3>

            <form action="/projects" method="POST" dir="rtl">
                @include('projects.form', ['project' => new App\Models\Project()])

                <div class="form-group d-flex flex-row-reverse mt-5">
                    <button type="submit" class="btn btn-primary mr-2">إنشاء</button>
                    <a href="/projects" class="btn btn-light mr-2">إلغاء</a>
                </div>
            
            </form>
        </div>
    </div>
</div>

@endsection