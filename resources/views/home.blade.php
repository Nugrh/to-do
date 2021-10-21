@extends('layouts.main')

@section('container')
        <div class="row d-flex align-items-center" style="min-height: 620px">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-secondary text-center">TO-DO List</div>
{{--                        TODO: Input new Task--}}
                        <form method="post" action="{{route('todo.store')}}">
                            @csrf
                            <div class="row ">
                                <div class="col mb-3">
                                    <input type="text" class="form-control" name="todo" id="new-task" placeholder="New task" autocomplete="off">
                                </div>
                            </div>
                        </form>
                        <hr>

{{--                        TODO: List--}}

                        <table class="table table-hover ">
                                <tbody>
                                    @foreach($todos as $todo)
                                    <tr class="justify-content-start">
                                        <td>
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="{{$todo->id}}">
                                            <label class="form-check-label ms-3" for="{{$todo->id}}">{{$todo->todo}}</label>
                                        </td>
                                        <td class="col-1 mr-auto">
                                            <a href="./{{$todo->id}}/delete" class="link-danger" style="text-decoration: none">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection()
