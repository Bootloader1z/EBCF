
@extends('layout.title')

@section('title', 'Expense')
@include('layout.title')
<body>

  <!-- ======= Header ======= -->
@include('layout.header')


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
