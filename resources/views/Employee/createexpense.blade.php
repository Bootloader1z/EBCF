@extends('layout.title')

@section('title', 'Expense')
@include('layout.title')

<body>
    <!-- ======= Header ======= -->
    @include('layout.header')

    

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6> Employee </h6>
            <span>Finance</span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>
    </ul><!-- End Profile Dropdown Items -->

    </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('Employee.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Expense</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="employee.dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Create Expenses</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- General Form Elements -->
                <form action="{{ route('expense.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token -->
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="category" name="category">
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="amount" name="amount">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date">
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description"
                                style="height: 100px"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="submit" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
                </form>
                <!-- End General Form Elements -->
            </div>
        </section>

    </main><!-- End #main -->
    @include('layout.footer')

</body>

</html>
