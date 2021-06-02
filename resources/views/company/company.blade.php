@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Companies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/add-company" class="btn btn-sm btn-success"> Add </a>

        </div>
    </div>
</main>
@if($isEmpty)

<div class="container marketing">
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="alert alert-warning">
            No companies found 
            </div>
        </div>
    </div>
</div>
@else
<div class="container marketing">
    <div class="row">
    
        <div class="col-md-11 ms-sm-auto col-lg-10 px-md-4">
            <div class="row">
                @foreach($companies as $company)
                <div class="col-lg-3 company-box">
                    <div class="company-head">
                        <img class="company-img" src="{{asset('images/' .$company->logo)}}" alt="{{$company->logo}}">
                    </div>
                    <div class="company-body">
                        <h2>{{$company->name}}</h2>
                        <p>email : {{$company->email}} , website : {{$company->website}} </p>
                        <p><a class="btn btn-secondary" href="/company-details/{{$company->id}}">View details &raquo;</a></p>
                    </div>

                </div>
                @endforeach
               
            </div>
            <br>
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <span>
                    {{$companies->links()}}
                </span>   
                </div>
            </div>
         
               
        </div>

    </div>
</div>
@endif