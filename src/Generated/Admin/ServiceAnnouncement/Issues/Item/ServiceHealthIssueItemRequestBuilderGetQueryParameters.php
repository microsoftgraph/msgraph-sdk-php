<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Issues\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
*/
class ServiceHealthIssueItemRequestBuilderGetQueryParameters 
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
