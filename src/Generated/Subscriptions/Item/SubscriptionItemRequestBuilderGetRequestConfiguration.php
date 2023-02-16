<?php

namespace Microsoft\Graph\Generated\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionItemRequestBuilderGetRequestConfiguration 
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
     * @var SubscriptionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): SubscriptionItemRequestBuilderGetQueryParameters {
        return new SubscriptionItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new SubscriptionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SubscriptionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
