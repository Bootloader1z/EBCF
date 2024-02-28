<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('employee.expensedata', compact('expenses'));
    }

    // Function to show the form for creating a new expense
    public function create()
    {
        return view('employee.createexpense');
    }

    // Function to store the submitted form data in the database
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'category' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'receipt' => 'nullable|string',
        ]);

        // Create a new expense record
        $expense = new Expense();
        $expense->user_id = auth()->id(); // Assuming you have user authentication
        $expense->category = $validatedData['category'];
        $expense->amount = $validatedData['amount'];
        $expense->date = $validatedData['date'];
        $expense->description = $validatedData['description'];
        $expense->receipt = $validatedData['receipt'];
        $expense->save();

        // Redirect back with success message
        return redirect()->route('expense.index')->with('success', 'Expense submitted successfully.');

    }

}
