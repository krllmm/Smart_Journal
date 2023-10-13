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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('login')->unique()->after('surname');
            $table->date('date_of_birth')->nullable()->after('login');
            $table->string('about_me')->nullable()->after('date_of_birth');
            $table->string('country')->nullable()->after('about_me');
            $table->string('socials_links')->nullable();

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')
                    ->references('id')->on('roles')
                    ->onDelete('cascade');

            $table->integer('rating')->default(0);
            $table->string('profile_picture')->default('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Windows_10_Default_Profile_Picture.svg/240px-Windows_10_Default_Profile_Picture.svg.png');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
