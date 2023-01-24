<?php

namespace Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get teamsApps from appCatalogs
*/
class TeamsAppItemRequestBuilderGetQueryParameters 
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
