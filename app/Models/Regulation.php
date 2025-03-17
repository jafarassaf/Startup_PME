<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'requirements',
        'implementation_steps',
        'official_document_url',
        'is_active',
        'order'
    ];

    protected $casts = [
        'requirements' => 'array',
        'implementation_steps' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    public static function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|array',
            'implementation_steps' => 'nullable|array',
            'official_document_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'integer'
        ];
    }
}
