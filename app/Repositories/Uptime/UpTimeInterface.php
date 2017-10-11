<?php


namespace CachetHQ\Cachet\Repositories\Uptime;

use CachetHQ\Cachet\Models\Component;
use Illuminate\Support\Collection;

/**
 * Created by PhpStorm.
 * User: taafedi5
 * Date: 12.09.17
 * Time: 10:38
 */

interface UpTimeInterface
{

    /**
     * @param $component
     * @param $toDate
     * @param null $fromDate
     * @return mixed
     */
    public function getComponentsIncidentsAndUpdates(Collection $components);
}