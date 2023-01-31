<?php

namespace Microsoft\Graph\Generated\TeamsTemplates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from teamsTemplates by key
*/
class TeamsTemplateItemRequestBuilderGetQueryParameters 
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
