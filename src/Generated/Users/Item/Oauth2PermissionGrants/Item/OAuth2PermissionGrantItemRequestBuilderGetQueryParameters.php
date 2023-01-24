<?php

namespace Microsoft\Graph\Generated\Users\Item\Oauth2PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get oauth2PermissionGrants from users
*/
class OAuth2PermissionGrantItemRequestBuilderGetQueryParameters 
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
