<?php

namespace Microsoft\Graph\Generated\Organization\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of the currently authenticated organization. Since the **organization** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in an **organization** instance.
*/
class OrganizationItemRequestBuilderGetQueryParameters 
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
