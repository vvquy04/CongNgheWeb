<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::with('computer')->paginate(10);
        return view('issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $computers = Computer::all();
        return view('issues.create', compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer_id' => 'required|max:255',
            'reported_by' => 'required|string|max:255',
            'reported_date' => 'required|date',
            'description' => 'nullable|string',
            'urgency' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Open,In Progress,Resolved',
        ]);

        Issue::create($request->all());
        return redirect()->route('issues.index')->with('success', 'Vấn đề đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $issue = Issue::findOrFail($id);
        $computers = Computer::all();
        return view('issues.edit', compact('issue', 'computers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) 
    {
        $issue = Issue::find($id);
        $issue->update($request->all());

        return redirect()->route('issues.index')->with('success', 'Vấn đề được cập nhật thành công');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Vấn đề đã được xóa thành công');
    }
}
