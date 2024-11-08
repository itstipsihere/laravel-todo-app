<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Todo;

class TodoController extends Controller
{
    public function maketodo(Request $request) 
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required|string',
            'task' => 'required|string|max:255',
            'date' => 'required|date',
            'priority' => 'boolean', // Adjust range as needed
            'category' => 'required|string|in:work,personal,activity'
        ]);

        // Create a new Todo item
        $todo = Todo::create([
            'title' => $data['title'],
            'task' => $data['task'],
            'date' => $data['date'],
            'priority' => $data['priority'],
            'category' => $data['category'],
            'user_id' => Auth::id(),
        ]);

        // Redirect to the homepage with a success message
        return redirect()->route('todo.index')->with('success', 'Todo item created successfully!');
    }

    //take all data to homepage\\
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->get();
        // $todos = Todo::all(); // Retrieve all todos
        return view('homepage', compact('todos')); // Pass todos to the view
    }

    public function show($id)
    {
        $todo = Todo::find($id);

        return view('showtodocard', compact('todo'));
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Todo item deleted successfully!');
    }

  public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'task' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string',
            'priority' => 'sometimes|boolean',
        ]);

        // Find the Todo item by its ID
        $todo = Todo::findOrFail($id);

        // Update the Todo item with the validated data
        $todo->update($validated);

        // Redirect back to the index page or any other page with a success message
        return redirect()->route('todo.index')->with('success', 'Todo updated successfully!');
    }
    public function linkeditpage($id){
        $todo = Todo::find($id);
        return view('editpage', compact('todo'));
    }
}