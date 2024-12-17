<?php

use App\Models\Szakdogak;
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
        Schema::create('szakdogaks', function (Blueprint $table) {
            $table->id();
            $table->string('szakdoga_neve');
            $table->string('githublink');
            $table->string('oldallink');
            $table->string('tagokneve');
            $table->timestamps();
        });
        Szakdogak::create([
            'szakdoga_neve'=>'Atlantis Mozi',
            'githublink'=>'http:/github.com',
            'oldallink'=>'-weboldal',
            'tagokneve'=>'Szabó Anett'
        ]);
        Szakdogak::create([
            'szakdoga_neve'=>'Autókölcsönzö',
            'githublink'=>'http:/github.com',
            'oldallink'=>'-weboldal',
            'tagokneve'=>'Simon Gergő, Szűcs Ricshárd'
        ]);
        Szakdogak::create([
            'szakdoga_neve'=>'Gyorsétterem',
            'githublink'=>'http:/github.com',
            'oldallink'=>'-weboldal',
            'tagokneve'=>'Váradi Ákos, Ménesi CSaba'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szakdogaks');
    }
};
