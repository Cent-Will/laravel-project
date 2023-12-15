<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\hasMany;

class TransactionType extends Model
{
    use HasFactory;

    public function Transaction(): hasMany{
        return $this->HasMany(Transaction::class);
    }
}
