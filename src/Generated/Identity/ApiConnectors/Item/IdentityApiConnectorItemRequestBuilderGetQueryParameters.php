<?php

namespace Microsoft\Graph\Generated\Identity\ApiConnectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents entry point for API connectors.
*/
class IdentityApiConnectorItemRequestBuilderGetQueryParameters 
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
