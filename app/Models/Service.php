<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'features',
        'price',
        'is_active',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    public static function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'description' => 'required|string',
            'features' => 'nullable|array',
            'icon' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'order' => 'integer'
        ];
    }
}
