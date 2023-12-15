<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function Transaction(): hasMany{
        return $this->hasMany(Transaction::class);
    }
}
