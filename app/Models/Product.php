<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeSearchByName($query, $productName)
    {
        if (!empty($productName)) {
            $query->where('name', 'like', "%{$productName}%");
        }
    }

    public function scopeSearchByCompany($query, $companyName)
    {
        if (!empty($companyName)) {
            $query->whereHas('company', function ($query) use ($companyName) {
                $query->where('name', $companyName);
            });
        }
    }
}