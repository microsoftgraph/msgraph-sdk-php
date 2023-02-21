<?php

namespace Microsoft\Graph\Generated\Me\Insights\Used\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsedInsightItemRequestBuilderGetRequestConfiguration 
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
     * @var UsedInsightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsedInsightItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsedInsightItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UsedInsightItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UsedInsightItemRequestBuilderGetQueryParameters {
        return new UsedInsightItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new UsedInsightItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UsedInsightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsedInsightItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
