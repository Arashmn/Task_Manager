@extends('layout.master')
@section('title', __('public.title Edit'))
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
            <div class="card rounded-3">
                <div class="card-body p-4">

                    <h4 class="text-center my-3 pb-3">@lang('public.Edit to Do')</h4>
                    <x-alert />
                    <x-alert-with />
                    <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2"
                        action="{{ route('tasks.update',$Task->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="col-12">
                            <div class="form-outline">
                                <input type="text" name='Name' class="form-control" value="{{ $Task->Name }}" />
                                {{-- <label class="form-label" for="form1">Enter a task here</label> --}}
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">@lang('public.btn save')</button>
                        </div>
                    </form>

                    <a href="{{ route('tasks.index') }}"> <button type="submit"
                        class="btn btn-warning">@lang('public.back')</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
