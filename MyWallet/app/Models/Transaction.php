<?php

// App\Models\Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'Category_id');
    }

    public function transactionType(): BelongsTo {
        return $this->belongsTo(TransactionType::class, 'TransactionType_id');
    }
}

 
