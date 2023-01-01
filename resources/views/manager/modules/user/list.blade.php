@extends('manager.layout.master')

@section('title')
    CubeCode | Usuários
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>@yield('title')</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-border-horizontal">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a class='btn-sm btn-primary' href='#'>Detalhes</a></td>
                                    </tr>
                                @empty
                                    <tr><td colspan="7" >Nenhum Registro Encontrado</td></tr>
                                @endforelse
                            </tbody>
                        </table>

                        <ul class="m-3 pagination pagination-circle">
                            {!!$users->links()!!}
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
