<?php

namespace Microsoft\Graph\Generated\Me\Oauth2PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OAuth2PermissionGrantItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var OAuth2PermissionGrantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OAuth2PermissionGrantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
