<?php

namespace Microsoft\Graph\Generated\Devices\Item\TransitiveMemberOf\Item\MicrosoftGraphOrgContact;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.directoryObject as microsoft.graph.orgContact
*/
class OrgContactRequestBuilderGetQueryParameters 
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
