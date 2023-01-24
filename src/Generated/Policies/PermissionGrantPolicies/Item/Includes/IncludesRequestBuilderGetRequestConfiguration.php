<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncludesRequestBuilderGetRequestConfiguration 
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
     * @var IncludesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncludesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
