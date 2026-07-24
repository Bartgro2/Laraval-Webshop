<?php


namespace App;


class ProductFilter
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function filter($query, array $filters)
    {

        return $query
            ->when($filters['color'] ?? null, function ($query, $color) {
                return $query->where('color', $color);
            })
            ->when($filters['size'] ?? null, function ($query, $size) {
                return $query->where('size', $size);
            })
            ->when($filters['brand_id'] ?? null, function ($query, $brand) {
                return $query->where('brand_id', $brand);
            })
            ->when($filters['category_id'] ?? null, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->when($filters['material'] ?? null, function ($query, $material) {
                return $query->where('material', $material);
            })
            ->when($filters['name'] ?? null, function ($query, $name) {
                return $query->where('name', 'like', "%{$name}%");
            })
            ->when($filters['price_min'] ?? null, function ($query, $priceMin) {
                return $query->where('price', '>=', $priceMin);
            })
            ->when($filters['price_max'] ?? null, function ($query, $priceMax) {
                return $query->where('price', '<=', $priceMax);
            })
            ->when($filters['newest'] ?? null, function ($query) {
                return $query->orderBy('created_at', 'desc');
            })
            ->when($filters['oldest'] ?? null, function ($query) {
                return $query->orderBy('created_at', 'asc');
            });
    }
}
