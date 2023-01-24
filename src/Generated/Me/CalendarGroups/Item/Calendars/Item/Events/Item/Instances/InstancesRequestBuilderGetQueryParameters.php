<?php

namespace Microsoft\Graph\Generated\Me\CalendarGroups\Item\Calendars\Item\Events\Item\Instances;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the instances (occurrences) of an event for a specified time range.  If the event is a `seriesMaster` type, this returns the occurrences and exceptions of the event in the specified time range.
*/
class InstancesRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
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
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
}
