<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
      /**
     * Display the specified expense with receipt.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the expense by ID
        $expense = Expense::findOrFail($id);

        // Return the expense details view with the expense data
        return view('employee.show', compact('expense'));
    }
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
        ]);

        // Create a new expense record
        $expense = new Expense();
        $expense->user_id = auth()->id(); // Assuming you have user authentication
        $expense->category = $validatedData['category'];
        $expense->amount = $validatedData['amount'];
        $expense->date = $validatedData['date'];
        $expense->description = $validatedData['description'];
        $expense->save();

        // Redirect back with success message
        return redirect()->route('expense.index')->with('success', 'Expense submitted successfully.');

    }

}
