<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OfferShiftRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get offerShiftRequests from me
*/
class OfferShiftRequestItemRequestBuilderGetQueryParameters 
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
