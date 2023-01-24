<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShiftChangeRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get openShiftChangeRequests from me
*/
class OpenShiftChangeRequestItemRequestBuilderGetQueryParameters 
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
