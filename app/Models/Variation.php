<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = 'variation';
    protected $fillable = [
        'specie',
        'product_id',
        'description',
        
        
        
    ];
    use HasFactory;
    public function product(){
        return $this->belongsTo(product::class);
    }
}
