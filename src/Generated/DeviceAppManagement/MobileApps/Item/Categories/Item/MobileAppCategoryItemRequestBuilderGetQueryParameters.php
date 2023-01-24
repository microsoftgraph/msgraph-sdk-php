<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\Categories\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of categories for this app.
*/
class MobileAppCategoryItemRequestBuilderGetQueryParameters 
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
