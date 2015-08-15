<?php
namespace App\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	protected $fillable = ['title', 'author', 'content'];

}