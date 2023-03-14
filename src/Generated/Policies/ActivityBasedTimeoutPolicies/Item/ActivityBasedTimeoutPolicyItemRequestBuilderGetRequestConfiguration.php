<?php

namespace Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters {
        return new ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivityBasedTimeoutPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
