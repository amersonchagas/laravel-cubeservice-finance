@extends('manager.layout.master')

@section('title')
    CubeCode | Tickets
@endsection


@section('content')

    <div class="container-fluid support-ticket">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Ticket List</h5><span>List of ticket opend by customers</span>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-3 col-sm-6">
                                <div class="card ecommerce-widget pro-gress">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5">
                                                <h6>Abertos</h6>
                                                <h4 class="total-num counter">8943</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-md-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-primary ms-2">8989<i class="icon-angle-up f-12"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card ecommerce-widget pro-gress">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5">
                                                <h6>Em Atendimento</h6>
                                                <h4 class="total-num counter">2500</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-md-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-primary ms-2">8989<i class="icon-angle-up f-12"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase mt-4">
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card ecommerce-widget pro-gress">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5">
                                                <h6>Finalizados</h6>
                                                <h4 class="total-num counter">5600</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-md-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-primary ms-2">8989<i class="icon-angle-up f-12"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase mt-4">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card ecommerce-widget pro-gress">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5">
                                                <h6>Cancelados</h6>
                                                <h4 class="total-num counter">2560</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-md-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-primary ms-2">8989<i class="icon-angle-up f-12"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                @forelse ($tickets as $user)
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
                                {!!$tickets->links()!!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
