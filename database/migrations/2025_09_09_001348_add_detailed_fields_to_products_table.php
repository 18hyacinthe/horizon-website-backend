<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Sous-catégorie descriptive (ex: "Smartphone entrée de gamme, compact et accessible")
            $table->string('subcategory')->nullable()->after('category');

            // Prix du produit
            $table->decimal('price', 10, 2)->nullable()->after('subcategory');

            // Galerie d'images (JSON array d'URLs)
            $table->json('gallery')->nullable()->after('image');

            // Caractéristiques principales (JSON array de features)
            $table->json('features')->nullable()->after('gallery');

            // Spécifications techniques complètes (JSON avec catégories)
            $table->json('specifications')->nullable()->after('features');

            // URL du fichier technique PDF
            $table->string('tech_sheet_url')->nullable()->after('specifications');

            // Préfixe pour numéro de série/authentification
            $table->string('serial_prefix', 10)->nullable()->after('tech_sheet_url');

            // Slug pour URL friendly
            $table->string('slug')->unique()->nullable()->after('serial_prefix');

            // Meta description pour SEO
            $table->text('meta_description')->nullable()->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'subcategory',
                'price',
                'gallery',
                'features',
                'specifications',
                'tech_sheet_url',
                'serial_prefix',
                'slug',
                'meta_description'
            ]);
        });
    }
};
