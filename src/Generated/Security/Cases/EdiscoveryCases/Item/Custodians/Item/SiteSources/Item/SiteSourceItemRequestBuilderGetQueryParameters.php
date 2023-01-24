<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SiteSources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Data source entity for SharePoint sites associated with the custodian.
*/
class SiteSourceItemRequestBuilderGetQueryParameters 
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
