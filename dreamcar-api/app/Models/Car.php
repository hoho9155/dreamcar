<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    const PriceOnly = 'SELECT * 
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.price <= c1.price) 
            AND (c2.price < c1.price)
        )';
    const YearOnly = 'SELECT * 
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.year <= c1.year) 
            AND (c2.year < c1.year)
        )';
    const MileageOnly = 'SELECT * 
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.mileage <= c1.mileage) 
            AND (c2.mileage < c1.mileage)
        )';
    const PriceYear = 'SELECT *
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.price <= c1.price AND c2.year <= c1.year)
            AND (c2.price < c1.price AND c2.year < c1.year)
        )';
    const PriceMileage = 'SELECT *
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.price <= c1.price AND c2.mileage <= c1.mileage)
            AND (c2.price < c1.price AND c2.mileage < c1.mileage)
        )';
    const YearMileage = 'SELECT *
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.year <= c1.year AND c2.mileage <= c1.mileage)
            AND (c2.year < c1.year AND c2.mileage < c1.mileage)
        )';
    const PriceYearMileage = 'SELECT *
        FROM cars c1
        WHERE NOT EXISTS (
            SELECT 1 FROM cars c2 
            WHERE (c2.price <= c1.price AND c2.year <= c1.year AND c2.mileage <= c1.mileage)
            AND (c2.price < c1.price AND c2.year < c1.year AND c2.mileage < c1.mileage)
        )';
}
