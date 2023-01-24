<?php

namespace Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\AppliesTo;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppliesToRequestBuilderGetRequestConfiguration 
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
     * @var AppliesToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppliesToRequestBuilderGetQueryParameters $queryParameters = null;
    
}
