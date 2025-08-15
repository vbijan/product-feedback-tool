<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::with(['comments.user', 'product', 'user'])->get();

        $feedbacks = $feedbacks->map(function ($fb) {
            return [
                'id' => $fb->id,
                'title' => $fb->title,
                'description' => $fb->description,
                'category' => $fb->category,
                'product_name' => $fb->product ? $fb->product->name : null,
                'product_id' => $fb->product_id,
                'created_at' => $fb->created_at,
                'user_name' => $fb->user ? $fb->user->name : null,
                'comments' => $fb->comments->map(function ($c) {
                    return [
                        'id' => $c->id,
                        'content' => $c->content,
                        'user_name' => $c->user ? $c->user->name : null,
                        'created_at' => $c->created_at,
                    ];
                })->toArray(),
            ];
        })->toArray(); // convert collection to array

        return response()->json($feedbacks);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
        ]);

        $validated['user_id'] = auth()->id();

        $feedback = Feedback::create($validated);

        return response()->json($feedback, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Feedback::with(['user', 'comments.user'])->findOrFail($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
