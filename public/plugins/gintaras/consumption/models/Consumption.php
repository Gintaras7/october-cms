<?php

namespace Gintaras\Consumption\Models;

use Model;

/**
 * Model
 */
class Consumption extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'gintaras_consumption_logs';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'filling_date' => 'required|date',
        'electricity_consumption' => 'required|numeric',
        'water_consumption' => 'required|numeric',
        'photos' => 'nullable|array',
        'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    ];

    public $attachMany = [
        'photos' => 'System\Models\File',
    ];


    protected $fillable = [
        'filling_date',
        'electricity_consumption',
        'water_consumption',
        'user_id'
    ];
}
