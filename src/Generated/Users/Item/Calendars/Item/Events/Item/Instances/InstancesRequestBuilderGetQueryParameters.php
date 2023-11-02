<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendars\Item\Events\Item\Instances;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
*/
class InstancesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
    */
    public ?string $endDateTime = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @var string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
    */
    public ?string $startDateTime = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new instancesRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $endDateTime = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?string $startDateTime = null, ?int $top = null) {
        $this->count = $count;
        $this->endDateTime = $endDateTime;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->select = $select;
        $this->skip = $skip;
        $this->startDateTime = $startDateTime;
        $this->top = $top;
    }

}
