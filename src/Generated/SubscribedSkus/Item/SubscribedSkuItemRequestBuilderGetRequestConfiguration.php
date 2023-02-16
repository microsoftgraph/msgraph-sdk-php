<?php

namespace Microsoft\Graph\Generated\SubscribedSkus\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscribedSkuItemRequestBuilderGetRequestConfiguration 
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
     * @var SubscribedSkuItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscribedSkuItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscribedSkuItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return SubscribedSkuItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): SubscribedSkuItemRequestBuilderGetQueryParameters {
        return new SubscribedSkuItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new SubscribedSkuItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SubscribedSkuItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscribedSkuItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
