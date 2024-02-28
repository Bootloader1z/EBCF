
@extends('layout.title')

@section('title', 'Expense')
@include('layout.title')
<body>

  <!-- ======= Header ======= -->
@include('layout.header')

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/admin.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Employee</span>
          </a><!-- End Profile Iamge Icon -->

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
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
 @include('Employee.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

    <!-- General Form Elements -->
<table class="table datatable">
    <thead>
        <tr>
            <th><b>Category</b></th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
            <th>Action</th> <!-- Add a new column for the action button -->
        </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
        <tr>
            <td>{{ $expense->category }}</td>
            <td>{{ $expense->amount }}</td>
            <td>{{ $expense->date }}</td>
            <td>{{ $expense->description }}</td>
            <td>
                <a href="{{ route('expenses.show', ['id' => $expense->id]) }}" class="btn btn-primary">Show</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




      </div>
    </section>

  </main><!-- End #main -->
@include('layout.footer')

</body>

</html>
