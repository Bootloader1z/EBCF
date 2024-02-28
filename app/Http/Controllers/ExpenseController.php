<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
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
        return redirect()->back()->with('success', 'Expense submitted successfully.');
    }
}
