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
        Schema::table('produits', function (Blueprint $table) {
            $table->decimal('ancien_prix', 8, 2)->nullable(); // Ancien prix (peut être nul)
            $table->decimal('reduction', 8, 2)->nullable();  // Réduction (peut être nul)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn('ancien_prix');
            $table->dropColumn('reduction');
        });
    }
};
