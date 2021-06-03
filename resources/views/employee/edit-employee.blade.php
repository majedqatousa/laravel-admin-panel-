@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> {{__('web.edit-employee')}} </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/{{app()->getLocale()}}/employees" class="btn btn-sm btn-outline-secondary"> {{__('web.employees')}} </a>

        </div>
    </div>
</main>

<div class="row justify-content-md-center">
    <div class="col-md-6">
        <form method="POST"  action="/{{app()->getLocale()}}/edit-employee/{{$employee->id}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="row" style="margin: 10px;">
               
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="text" value="{{$employee->first_name}}" name="firstName" id="fname" class="form-control"  placeholder="firest name" value="" required>
                </div>
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="text" value="{{$employee->last_name}} "name="lastName" class="form-control" id="lname" placeholder="last name" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input">
            <select class="form-select"  name="companyId">
                <option selected>Company</option>
                @foreach($companeis as $company)
                <option value="{{$company->id}}" {{$employee->company->id == $company->id  ? 'selected' : ''}} >{{$company->name}}</option>
                @endforeach
                
            </select>
            </div>

            <div class="col-md-6 form-input">
                <div class="from-group">
                  <input type="email" value="{{$employee->email}} "name="email" class="form-control" id="email" placeholder="email" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input ">
                <div class="from-group">
                    <input type="text" value="{{$employee->phone}}" name="phone" class="form-control" id="phone" placeholder="phone" value="" required>
                </div>
            </div>

        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-4 ">
                <button type="submit" class="btn btn-success">Update employee</button>
            </div>
        </div>
        </form>
    </div>
</div>