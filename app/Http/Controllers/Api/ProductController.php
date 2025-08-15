<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feedback;

class ProductController extends Controller
{
    //
    public function getAllProducts()
    {
        return response()->json(Product::all());
    }
    // ProductController.php
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $feedbacks = Feedback::with(['user', 'comments.user'])
            ->where('product_id', $id)
            ->get()
            ->map(function ($fb) {
                return [
                    'id' => $fb->id,
                    'title' => $fb->title,
                    'description' => $fb->description,
                    'category' => $fb->category,
                    'user_name' => $fb->user->name,
                    'created_at' => $fb->created_at,
                    'comments' => $fb->comments->map(function ($c) {
                        return [
                            'id' => $c->id,
                            'content' => $c->content,
                            'user_name' => $c->user->name,
                            'created_at' => $c->created_at,
                        ];
                    }),
                ];
            });

        return response()->json([
            'product' => $product,
            'feedbacks' => $feedbacks,
        ]);
    }  
}
