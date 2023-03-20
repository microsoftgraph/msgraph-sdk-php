<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore\Sets\Item\Terms\Item\Relations\Count;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CountRequestBuilderGetRequestConfiguration 
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
     * @var CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CountRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CountRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters.
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @return CountRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $search = null): CountRequestBuilderGetQueryParameters {
        return new CountRequestBuilderGetQueryParameters($filter, $search);
    }

}
