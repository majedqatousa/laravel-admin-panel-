@include('header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/companies" class="btn btn-sm btn-outline-secondary"> Companies </a>

        </div>
    </div>
</main>

<div class="row justify-content-md-center">
    <div class="col-md-6">
        <form method="POST"  action="/add-company" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="row" style="margin: 10px;">
               
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="file" value="logo" name="logo" id="logo" class="form-control"  placeholder="company name" value="" required>
                </div>
            </div>
            <div class="col-md-6 form-input">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="company name" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input">
                <div class="from-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="company email" value="" required>
                </div>
            </div>

            <div class="col-md-6 form-input ">
                <div class="from-group">
                    <input type="text" name="website" class="form-control" id="website" placeholder="company website" value="" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Create Company</button>

        </div>
        </form>
    </div>
</div>