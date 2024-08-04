<?php

namespace Rappasoft\LaravelLivewireTables\Traits;

use Rappasoft\LaravelLivewireTables\Traits\Configuration\EventConfiguration;
use Rappasoft\LaravelLivewireTables\Traits\Helpers\EventHelpers;

trait WithEvents
{
    use EventConfiguration,
        EventHelpers;

    protected array $eventStatuses = ['columnSelected' => true, 'searchApplied' => false, 'filterApplied' => false];

    // No Longer Used
    public function setSortEvent(string $field, string $direction): void
    {
        $this->setSort($field, $direction);
    }

    // No Longer Used
    public function clearSortEvent(): void
    {
        $this->clearSorts();
    }

    // No Longer Used
    public function setFilterEvent(string $filter, string|array|null $value): void
    {
        $this->setFilter($filter, $value);
    }

    // No Longer Used
    public function clearFilterEvent(): void
    {
        $this->setFilterDefaults();
    }
}
