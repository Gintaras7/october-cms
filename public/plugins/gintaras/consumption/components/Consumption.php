<?php

namespace Gintaras\Consumption\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Auth;
use Input;
use Log;
use Request;
use ValidationException;
use Validator;
use System\Models\File;

/**
 * Consumption Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Consumption extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Consumption Component',
            'description' => 'Consumption\'s form.'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }


    public function onSaveConsumption(\Gintaras\Consumption\Models\Consumption $consumption)
    {
        $consumption->fill([
            'filling_date' => post('filling_date'),
            'electricity_consumption' => post('electricity_consumption'),
            'water_consumption' => post('water_consumption'),
            'user_id' => \RainLab\User\Facades\Auth::getUser()->id
        ]);

        $consumption->validate();
        $consumption->photos = (array) files('photos');
        $consumption->save();

        \Flash::success('Consumption data saved successfully!');

        return redirect('authenticated');
    }
}
