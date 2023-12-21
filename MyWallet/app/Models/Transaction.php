<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Http\Models\Category;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'TransactionType_id',
        'Category_id',
        'nominal',
        'description',
        'date'
    ];

    public function category(): BelongsTo{
        return $this->BelongsTo(Category::class);
    }
   
    public function TransactionType(): BelongsTo{
        return $this->BelongsTo(Category::class);
    }

}
