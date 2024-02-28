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
                    <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('expense.index') }}">Expense</a></li>
                    <li class="breadcrumb-item active">Expense Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Expense Details</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Category:</strong> {{ $expense->category }}</li>
                                <li class="list-group-item"><strong>Amount:</strong> {{ $expense->amount }}</li>
                                <li class="list-group-item"><strong>Date:</strong> {{ $expense->date }}</li>
                                <li class="list-group-item"><strong>Description:</strong> {{ $expense->description }}</li>
                                <li class="list-group-item"><strong>Receipt:</strong>
                                    @if($expense->receipt)
                                        <a href="{{ route('receipt.show', ['id' => $expense->id]) }}" target="_blank">View Receipt</a>
                                    @else
                                        N/A
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Receipt</h5>
                            @if($expense->receipt)
                                <img src="{{ asset('storage/' . $expense->receipt) }}" alt="Receipt" class="img-fluid">
                            @else
                                <p>No receipt available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    @include('layout.footer')

</body>

</html>
