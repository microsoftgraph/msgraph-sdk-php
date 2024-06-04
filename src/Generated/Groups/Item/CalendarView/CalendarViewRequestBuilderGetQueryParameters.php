<?php

namespace Microsoft\Graph\Generated\Groups\Item\CalendarView;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the occurrences, exceptions, and single instances of events in a calendar view defined by a time range,from the default calendar of a group.
*/
class CalendarViewRequestBuilderGetQueryParameters 
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
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
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
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
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
     * Instantiates a new CalendarViewRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $endDateTime The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param string|null $startDateTime The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $endDateTime = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?string $startDateTime = null, ?int $top = null) {
        $this->count = $count;
        $this->endDateTime = $endDateTime;
        $this->expand = $expand;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->startDateTime = $startDateTime;
        $this->top = $top;
    }

}
