<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\HealthOverviews\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
*/
class ServiceHealthItemRequestBuilderGetQueryParameters 
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
