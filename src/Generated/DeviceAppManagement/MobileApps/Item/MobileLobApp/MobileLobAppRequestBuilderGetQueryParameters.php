<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\MobileLobApp;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.mobileApp as microsoft.graph.mobileLobApp
*/
class MobileLobAppRequestBuilderGetQueryParameters 
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
