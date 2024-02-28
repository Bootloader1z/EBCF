@extends('layout.title')

<head>
@section('title', 'Expense Details')

@include('layout.title')


    <style>
        @media print {
            /* Hide unnecessary elements */
            body * {
                visibility: hidden;
            }
            .printable-section, .printable-section * {
                visibility: visible;
            }
            .printable-section {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>
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
        <section>
        <!-- Card with header and footer -->
    <div class="card printable-section">
        <div class="card-header">Expense Details</div>
        <div class="card-body">
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="inputName" class="form-label">Category</label>
                                    <input type="text" class="form-control text-center" id="inputName" value="{{ $expense->category }}">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Amount</label>
                                    <input type="email" class="form-control text-center" id="inputEmail" value="{{ $expense->amount }}">
                                </div>
                                <div class="col-12">
                                    <label for="inputDate" class="form-label">Date</label>
                                    <input type="date" class="form-control text-center" id="inputDate" value="{{ $expense->date }}">
                                </div>
                                <div class="col-12">
                                    <label for="inputDescription" class="form-label">Description</label>
                                    <input type="text" class="form-control text-center" id="inputDescription" value="{{ $expense->description ?? 'N/A' }}" placeholder="1234 Main St">
                                </div>
                            </form><!-- Vertical Form -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- End Card with header and footer -->

    <!-- Print Button -->
    <button onclick="window.print()">Print</button>

</section>



    </main><!-- End #main -->
    @include('layout.footer')

</body>

</html>
