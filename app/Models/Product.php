<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'detail', 'stok', 'image'
    ];

    public function negos()
    {
        return $this->hasMany(Nego::class);
    }
}