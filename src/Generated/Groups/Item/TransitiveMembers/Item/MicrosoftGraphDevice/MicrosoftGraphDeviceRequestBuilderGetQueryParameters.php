<?php

namespace Microsoft\Graph\Generated\Groups\Item\TransitiveMembers\Item\MicrosoftGraphDevice;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.directoryObject as microsoft.graph.device
*/
class MicrosoftGraphDeviceRequestBuilderGetQueryParameters 
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
