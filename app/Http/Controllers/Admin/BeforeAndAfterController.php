<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeforeAndAfterRequest;
use App\Models\BeforeAndAfter;
use Illuminate\Support\Facades\Storage;

class BeforeAndAfterController extends Controller
{
    public function index()
    {
        $items = BeforeAndAfter::all();

        return view('admin.beforeAndAfter.index', compact('items'));
    }

    public function store(BeforeAndAfterRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('before_after_images', 'public');
        }

        BeforeAndAfter::create($data);

        return redirect()->route('before-after.index')
            ->with('success', 'Item created successfully.');
    }

    public function update(BeforeAndAfterRequest $request, BeforeAndAfter $beforeAndAfter)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($beforeAndAfter->image) {
                Storage::disk('public')->delete($beforeAndAfter->image);
            }

            // Store the new image
            $data['image'] = $request->file('image')->store('before_after_images', 'public');
        }

        $beforeAndAfter->update($data);

        return redirect()->route('before-after.index')
            ->with('success', 'Item updated successfully.');
    }

    public function destroy(BeforeAndAfter $beforeAndAfter)
    {
        if ($beforeAndAfter->image) {
            Storage::disk('public')->delete($beforeAndAfter->image);
        }

        $beforeAndAfter->delete();

        return redirect()->route('before-after.index')
            ->with('success', 'Item deleted successfully.');
    }
}
