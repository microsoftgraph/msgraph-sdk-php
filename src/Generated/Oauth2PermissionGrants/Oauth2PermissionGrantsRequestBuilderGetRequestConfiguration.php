<?php

namespace Microsoft\Graph\Generated\Oauth2PermissionGrants;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Oauth2PermissionGrantsRequestBuilderGetRequestConfiguration 
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
     * @var Oauth2PermissionGrantsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Oauth2PermissionGrantsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
