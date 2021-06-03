@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{__('web.employees')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/{{app()->getLocale()}}/add-employee" class="btn btn-sm btn-success"> {{__('web.add-employee')}} </a>


        </div>
    </div>
</main>
@if($isEmpty)
<div class="container marketing">
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="alert alert-warning">
            {{__('web.no-employees')}}
            </div>
        </div>
    </div>
</div>
@else
<div class="row ">
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th> {{__('web.fname')}} </th>
                    <th>{{__('web.lname')}}</th>
                    <th>{{__('web.email')}}</th>
                    <th>{{__('web.phone')}}</th>
                    <th>{{__('web.company')}}</th>
                    <th>{{__('web.action')}}</th>
                </tr>
            </thead>
            <tbody>
            <?php
             $index =1;
            ?>
           
                @foreach($employees as $employee)
                <tr>
                    <td><?php echo($index) ?></td>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->company->name}}</td>
                    <td>
                        <div class="row ">
                            <div class="col-md-3">
                                <a class="btn btn-warning btn-sm" href="/{{app()->getLocale()}}/edit-employee/{{$employee->id}}">{{__('web.edit')}}</a>

                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger btn-sm " href="/{{app()->getLocale()}}/delete-employee/{{$employee->id}}">{{__('web.delete')}}</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
                 $index++;
                ?>
               
                @endforeach
              
            </tbody>
        </table>
        <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <span>
                        {{$employees->links()}}
                        </span>   
                    </div>
                </div>
    </div>
@endif
