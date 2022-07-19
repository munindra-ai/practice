<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BooksController;

class BookCategory extends Model
{
    use HasFactory;
    protected $table ='book_categories';

    protected $fillable = [
        'name',
        'description',
    ];
}
