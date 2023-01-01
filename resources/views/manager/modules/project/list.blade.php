@extends('manager.layout.master')

@section('title')
  CubeCode | Projetos
@endsection


@section('content')




    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active " id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>All</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>Doing</a></li>
                                <li class="nav-item"><a class="nav-link " id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Done</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <div>
                                <div class="row">
                                    @forelse ($projects as $project)

                                        <div class="col-xxl-4 col-lg-6">
                                            <div class="project-box"><span class="badge badge-primary">{{$project->status}}</span>
                                                <h6>{{$project->name}}</h6>
                                                <div class="media"><img class="img-20 me-2 rounded-circle" src="{{asset('viho/images/user/3.jpg')}}" alt="" data-original-title="" title="">
                                                    <div class="media-body">
                                                        <p>{{$project->user->id}}</p>
                                                    </div>
                                                </div>
                                                <p>{{$project->description}}</p>
                                                <div class="row details">
                                                    <div class="col-6"><span>Tarefas </span></div>
                                                    <div class="col-6 font-primary">12 </div>
                                                    <div class="col-6"> <span>Concluidas</span></div>
                                                    <div class="col-6 font-primary">5</div>
                                                    <div class="col-6"> <span>Comentarios</span></div>
                                                    <div class="col-6 font-primary">7</div>
                                                </div>
                                                <div class="customers">
                                                    <ul>
                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                                        <li class="d-inline-block ms-2">
                                                            <p class="f-12">+10 More</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="project-status mt-4">
                                                    <div class="media mb-0">
                                                        <p>70% </p>
                                                        <div class="media-body text-end"><span>Done</span></div>
                                                    </div>
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <tr><td colspan="7" >Nenhum Registro Encontrado</td></tr>
                                    @endforelse



                                </div>
                            </div>

                            <ul class="m-3 pagination pagination-circle">
                                {!!$projects->links()!!}
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
