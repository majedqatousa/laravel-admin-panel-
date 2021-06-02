@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Employees</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/add-employee" class="btn btn-sm btn-success">Add</a>


        </div>
    </div>
</main>
@if($isEmpty)
<div class="container marketing">
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="alert alert-warning">
            No employees found 
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Action</th>
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
                                <a class="btn btn-warning btn-sm" href="edit-employee/{{$employee->id}}">Edit</a>

                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-danger btn-sm " href="delete-employee/{{$employee->id}}">Delete</a>
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
