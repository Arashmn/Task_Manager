@extends('layout.master')
@section('title', __('public.List To Do'))
@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">@lang('public.To Do App')</h4>
                        <x-alert />
                        <x-alert-with />
                        <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2"
                            action="{{ route('tasks.store') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <div class="form-outline">
                                    <input type="text" name='Name' class="form-control" placeholder="@lang('public.Enter a task here')" />
                                    {{-- <label class="form-label" for="form1">Enter a task here</label> --}}
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">@lang('public.btn save')</button>
                            </div>
                        </form>

                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('table.No')</th>
                                    <th scope="col">@lang('table.Todo item')</th>
                                    {{-- <th scope="col">@lang('table.welcome')</th> --}}
                                    <th scope="col">@lang('table.createat')</th>
                                    <th scope="col">@lang('table.updateat')</th>
                                    <th scope="col">@lang('table.Actions')</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tasks as $key => $task)
                                    <tr>
                                        <td>{{ $task->id }} </td>
                                        <td>{{ $task->Name }}</td>
                                        {{-- <td>{{ $task->Status }}</td> --}}
                                        <td>{{ $task->created_at }}</td>
                                        <td>{{ $task->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">@lang('table.btn Delete')</button>
                                            </form>
                                            <a href="{{ route('tasks.edit', $task->id) }}"> <button type="submit"
                                                    class="btn btn-warning">@lang('table.btn Update')</button></a>

                                            {{-- <form action="/" method="post">
                                            <button type="submit" class="btn btn-success ms-1">@lang('table.btn success')</button>
                                        </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            {{ $tasks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
