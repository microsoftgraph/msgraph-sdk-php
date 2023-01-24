<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\ManagedMobileLobApp;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.mobileApp as microsoft.graph.managedMobileLobApp
*/
class ManagedMobileLobAppRequestBuilderGetQueryParameters 
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
