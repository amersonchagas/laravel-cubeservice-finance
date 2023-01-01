@extends('manager.layout.master')

@section('title')
  CubeCode | Entidades
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
                                <th scope="col">Nome</th>
                                <th scope="col">Dominio</th>
                                <th scope="col">Proprietário</th>
                                <th scope="col">Chave</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($entities as $entity)
                                    <tr>
                                        <td>{{$entity->id}}</td>
                                        <td>{{$entity->name}}</td>
                                        <td>{{$entity->domain}}</td>
                                        <td>{{$entity->user->name}}</td>
                                        <td>{{$entity->uuid}}</td>
                                        <td>{{$entity->status}}</td>
                                        <td><a class='btn-sm btn-primary' href='#'>Detalhes</a></td>
                                    </tr>
                                @empty
                                    <tr><td colspan="7" >Nenhum Registro Encontrado</td></tr>
                                @endforelse
                            </tbody>
                        </table>

                        <ul class="m-3 pagination pagination-circle">
                            {!!$entities->links()!!}
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
