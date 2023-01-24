<?php

namespace Microsoft\Graph\Generated\Users\Item\Activities\Item\HistoryItems\Item\Activity;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Optional. NavigationProperty/Containment; navigation property to the associated activity.
*/
class ActivityRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
