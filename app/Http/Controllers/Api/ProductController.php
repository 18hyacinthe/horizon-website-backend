<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $cloudinaryService;

    public function __construct(CloudinaryService $cloudinaryService)
    {
        $this->cloudinaryService = $cloudinaryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::active();

        // Filtrage par catégorie
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }

        $products = $query->latest()->get();

        return ProductResource::collection($products);
    }

    /**
     * Display all products for admin (including inactive ones)
     */
    public function adminIndex(Request $request)
    {
        $query = Product::query();

        // Filtrage par catégorie
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }

        // Filtrage par statut
        if ($request->has('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            } elseif ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        $products = $query->latest()->get();

        return ProductResource::collection($products);
    }

    /**
     * Display products grouped by category for the carousel
     */
    public function carousel()
    {
        $phones = Product::active()->byCategory('phones')->latest()->get();
        $computers = Product::active()->byCategory('computers')->latest()->get();
        $accessories = Product::active()->byCategory('accessories')->latest()->get();

        return response()->json([
            'phones' => ProductResource::collection($phones),
            'computers' => ProductResource::collection($computers),
            'accessories' => ProductResource::collection($accessories),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debug : Log des données reçues
        \Log::info('Données reçues pour création produit:', $request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:phones,computers,accessories',
            'subcategory' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|string|url',
            'gallery' => 'nullable|array',
            'gallery.*' => 'string|url',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'specifications' => 'nullable|array',
            'tech_sheet_url' => 'nullable|string|url',
            'serial_prefix' => 'nullable|string|max:10',
            'meta_description' => 'nullable|string|max:300',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            \Log::error('Erreurs de validation:', $validator->errors()->toArray());
            return response()->json([
                'message' => 'Erreur de validation',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only([
            'name', 'description', 'category', 'subcategory', 'price', 'image',
            'gallery', 'features', 'specifications', 'tech_sheet_url', 'serial_prefix', 'meta_description'
        ]);
        $data['is_active'] = $request->boolean('is_active', true);

        $product = Product::create($data);

        return response()->json([
            'message' => 'Produit créé avec succès',
            'data' => new ProductResource($product)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        if (!$product->is_active) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        return new ProductResource($product);
    }

    /**
     * Display the specified resource by slug.
     */
    public function showBySlug($slug)
    {
        $product = Product::where('slug', $slug)->where('is_active', true)->first();

        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        return response()->json([
            'data' => new ProductResource($product)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:phones,computers,accessories',
            'subcategory' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|string|url',
            'gallery' => 'nullable|array',
            'gallery.*' => 'string|url',
            'features' => 'nullable|array',
            'features.*' => 'string',
            'specifications' => 'nullable|array',
            'tech_sheet_url' => 'nullable|string|url',
            'serial_prefix' => 'nullable|string|max:10',
            'meta_description' => 'nullable|string|max:300',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Erreur de validation',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only([
            'name', 'description', 'category', 'subcategory', 'price', 'image',
            'gallery', 'features', 'specifications', 'tech_sheet_url', 'serial_prefix', 'meta_description'
        ]);
        $data['is_active'] = $request->boolean('is_active', $product->is_active);

        $product->update($data);

        return response()->json([
            'message' => 'Produit mis à jour avec succès',
            'data' => new ProductResource($product->fresh())
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();

            return response()->json([
                'message' => 'Produit supprimé avec succès'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur lors de la suppression du produit',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
