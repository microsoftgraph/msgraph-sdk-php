<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\Items\Item\Analytics;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Analytics about the view activities that took place on this item.
*/
class AnalyticsRequestBuilderGetQueryParameters 
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
