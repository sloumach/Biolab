<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ComplaintController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status');

        $complaints = Complaint::query()
            ->when($status, fn ($query) => $query->where('status', $status))
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.complaints.index', compact('complaints', 'status'));
    }

    public function updateStatus(Request $request, Complaint $complaint): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(['handled', 'deleted'])],
        ]);

        if ($validated['status'] === 'deleted') {
            $complaint->delete();

            return back()->with('success', 'La reclamation a ete supprimee.');
        }

        $complaint->update($validated);

        return back()->with('success', 'La reclamation a ete traitee.');
    }
}
