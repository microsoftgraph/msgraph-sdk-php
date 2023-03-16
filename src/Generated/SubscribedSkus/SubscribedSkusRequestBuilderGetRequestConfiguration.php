<?php

namespace Microsoft\Graph\Generated\SubscribedSkus;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscribedSkusRequestBuilderGetRequestConfiguration 
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
     * @var SubscribedSkusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscribedSkusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new subscribedSkusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscribedSkusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscribedSkusRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new subscribedSkusRequestBuilderGetQueryParameters.
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return SubscribedSkusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $orderby = null, ?string $search = null, ?array $select = null): SubscribedSkusRequestBuilderGetQueryParameters {
        return new SubscribedSkusRequestBuilderGetQueryParameters($orderby, $search, $select);
    }

}
