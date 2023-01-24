<?php

namespace Microsoft\Graph\Generated\Security\Incidents\Item\Alerts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of related alerts. Supports $expand.
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
