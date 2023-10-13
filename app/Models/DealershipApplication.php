<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $bank_id
 * @property string $dealer_name
 * @property string $contact_person
 * @property float $loan_amount
 * @property int $loan_term
 * @property float $interest_rate
 * @property string $reason
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property Bank $bank
 *
 * @method static paginate(int $int)
 * @method static findOrFail($id)
 * @method static create(array $all)
 * @method static find(mixed $id)
 */
class DealershipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_id',
        'dealer_name',
        'contact_person',
        'loan_amount',
        'loan_term',
        'interest_rate',
        'reason',
        'status',
    ];

    /**
     * Associated bank for the dealership application.
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}
