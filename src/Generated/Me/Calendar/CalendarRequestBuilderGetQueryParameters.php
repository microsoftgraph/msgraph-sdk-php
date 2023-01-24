<?php

namespace Microsoft\Graph\Generated\Me\Calendar;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of a calendar object. The calendar can be one for a user, or the default calendar of a Microsoft 365 group. There are two scenarios where an app can get another user's calendar:
*/
class CalendarRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
