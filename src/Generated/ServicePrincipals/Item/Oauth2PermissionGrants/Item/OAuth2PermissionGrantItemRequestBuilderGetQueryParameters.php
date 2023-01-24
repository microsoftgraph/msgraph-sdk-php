<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Oauth2PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
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
