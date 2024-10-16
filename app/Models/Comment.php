<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Model {
    use HasFactory;

    protected $fillable = [
        'post_id',
        'author',
        'content',
    ];

    public function up() {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->constrained()->onDelete('cascade');
            $table->string('author');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
