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
            $table->string('name')->comment('user name.')->max(30)->change();
        });
      Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('A- Admin, C- Contibutor, S- Subscriber')
                ->max(1)->change();
        });
      Schema::table('posts', function (Blueprint $table) {
            $table->text('content')->comment('Post content.')->change();
            $table->string('status')->comment('Post status')->max(1)->change();
            $table->string('featured_image_url')->comment('Post image uel.')->max(255)->change();
        });
      Schema::table('categories', function (Blueprint $table) {
            $table->string('category_name')->comment('Category name.')->max(30)->change();
        });
      Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tag name.')->max(45)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
