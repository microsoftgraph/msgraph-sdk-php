<?php

namespace Microsoft\Graph\Generated\Security\Alerts_v2\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of alerts in Microsoft 365 Defender.
*/
class AlertItemRequestBuilderGetQueryParameters 
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
