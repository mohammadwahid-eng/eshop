<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'description',
        'quantity',
        'weight',
        'height',
        'length',
        'price',
        'sale_price',
        'active',
        'featured',
        'shop_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'quantity'   => 'integer',
        'weight'     => 'float',
        'height'     => 'float',
        'length'     => 'float',
        'price'      => 'float',
        'sale_price' => 'float',
        'active'     => 'boolean',
        'featured'   => 'boolean',
    ];

    /**
     * The categories that belong to the product.
     */
    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'category_product', 'product_id', 'category_id')->withTimestamps();
    }

    /**
     * Get the images for the product.
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
