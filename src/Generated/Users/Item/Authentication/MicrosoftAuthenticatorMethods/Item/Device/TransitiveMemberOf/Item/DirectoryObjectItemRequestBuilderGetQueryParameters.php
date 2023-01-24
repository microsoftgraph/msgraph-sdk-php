<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
*/
class DirectoryObjectItemRequestBuilderGetQueryParameters 
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
