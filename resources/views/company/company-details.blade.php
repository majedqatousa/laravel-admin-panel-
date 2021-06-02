@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$company->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/companies" class="btn btn-sm btn-outline-secondary"> Companies </a>
        </div>
    </div>
</main>
<div class="row featurette">
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row">
    <div class="col-md-6">
        <h2 class="featurette-heading"> You can contact the company through e-mail <span class="text-muted"> {{$company->email}} </span></h2>
        <p class="lead"> Or through their website : {{$company->website}}</p>
        <a class="btn btn-warning btn-sm" href="edit-company/{{$company->id}}">Edit</a>
        <a class="btn btn-danger btn-sm " href="delete-company/{{$company->id}}">Delete</a>

    </div>
    <div class="col-md-6">
        <img src="{{asset('images/' .$company->logo)}}" style="height: 500px; width: 500px;" alt="{{$company->logo}}">
    </div>
    </div>
</div>
    
</div>