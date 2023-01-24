<?php

namespace Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ClaimsMappingPoliciesRequestBuilderGetRequestConfiguration 
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
     * @var ClaimsMappingPoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ClaimsMappingPoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
