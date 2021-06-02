@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Employee</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/employees" class="btn btn-sm btn-outline-secondary"> Employees </a>

        </div>
    </div>
</main>

<div class="row justify-content-md-center">
    <div class="col-md-6">
        <form method="POST"  action="/add-employee">

        @csrf

        <div class="row">
            <div class="row" style="margin: 10px;">
               
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="text"  name="firstName" id="fname" class="form-control"  placeholder="firest name" value="" required>
                </div>
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="text" name="lastName" class="form-control" id="lname" placeholder="last name" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input">
            <select class="form-select"  name="companyId">
                <option selected>Company</option>
                @foreach($companeis as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
                
            </select>
            </div>

            <div class="col-md-6 form-input">
                <div class="from-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="email" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input ">
                <div class="from-group">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" value="" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Create employee</button>

        </div>
        </form>
    </div>
</div>