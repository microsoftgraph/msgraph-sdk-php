<?php

namespace Microsoft\\Graph\\Generated\EscapedPrint\Services\Item\Endpoints\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintServiceEndpointItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrintServiceEndpointItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintServiceEndpointItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrintServiceEndpointItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrintServiceEndpointItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrintServiceEndpointItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrintServiceEndpointItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrintServiceEndpointItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrintServiceEndpointItemRequestBuilderGetQueryParameters {
        return new PrintServiceEndpointItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
