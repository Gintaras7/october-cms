<?php

namespace Gintaras\Consumption\Components;

use Cms\Classes\ComponentBase;
use Gintaras\Consumption\Models\Consumption;
use RainLab\User\Facades\Auth;

/**
 * ConsumptionList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ConsumptionList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Consumption List',
            'description' => 'Component to display a list of consumptions'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function consumptions()
    {
        return Consumption::where('user_id', Auth::getUser()->id)->get();
    }
}
