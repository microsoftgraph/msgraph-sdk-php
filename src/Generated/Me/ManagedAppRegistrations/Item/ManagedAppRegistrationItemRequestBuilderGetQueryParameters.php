<?php

namespace Microsoft\Graph\Generated\Me\ManagedAppRegistrations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Zero or more managed app registrations that belong to the user.
*/
class ManagedAppRegistrationItemRequestBuilderGetQueryParameters 
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
