<?php

namespace Microsoft\Graph\Generated\Subscriptions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsRequestBuilderGetRequestConfiguration 
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
     * @var SubscriptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new subscriptionsRequestBuilderGetQueryParameters.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?string $search = null, ?array $select = null): SubscriptionsRequestBuilderGetQueryParameters {
        return new SubscriptionsRequestBuilderGetQueryParameters($search, $select);
    }

    /**
     * Instantiates a new subscriptionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
