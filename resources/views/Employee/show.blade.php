@extends('layout.title')

@section('title', 'Expense Details')

@include('layout.title')

<body>
    <!-- ======= Header ======= -->
    @include('layout.header')

    <!-- ======= Sidebar ======= -->
    @include('Employee.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Expense Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/employee/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('expense.index') }}">Expense</a></li>
                    <li class="breadcrumb-item active">Expense Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


    <!-- Card with header and footer -->
<!-- Card with header and footer -->
<<!-- Horizontal Card -->
<div class="card mt-3">
    <div class="card-header">Expense Details</div>
    <div class="card-body">
        <section class="section dashboard">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Expense Details</div>

                            <div class="card-body">
                                <h5>Category: {{ $expense->category }}</h5>
                                <p>Amount: ${{ $expense->amount }}</p>
                                <p>Date: {{ $expense->date }}</p>
                                <p>Description: {{ $expense->description ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="card-footer">
        Footer
    </div>
</div><!-- End Horizontal Card -->
</div>
</div>


    </main><!-- End #main -->
    @include('layout.footer')

</body>

</html>
