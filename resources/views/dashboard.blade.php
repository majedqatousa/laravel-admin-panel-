    @include('header')
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{__('web.dashboard')}}</h1>
            </div>
    </main>
    <div class="container marketing">
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row">
        <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12 mx-4">
                    <div class="c-numbers border border-primary rounded-circle"> 
                        <p> {{ $numOfCompaneis }} </p> 
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>{{__('web.companeis')}}</h3>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12 mx-4">
                    <div class="e-numbers border border-primary rounded-circle"> 
                        <p> {{ $numOfEmployees }} </p> 
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>{{__('web.employees')}}</h3>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
    </div>
</div>
