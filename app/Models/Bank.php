<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $created_at
 * @property string $updated_at
 *
 * @property DealershipApplication[] $dealershipApplications
 * @method static inRandomOrder()
 */
class Bank extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'location',
    ];

    /**
     * Get the dealership applications associated with the bank.
     */
    public function dealershipApplications(): HasMany
    {
        return $this->hasMany(DealershipApplication::class);
    }
}
