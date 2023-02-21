<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration 
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
     * @var EdiscoveryReviewSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdiscoveryReviewSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EdiscoveryReviewSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdiscoveryReviewSetItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): EdiscoveryReviewSetItemRequestBuilderGetQueryParameters {
        return new EdiscoveryReviewSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param EdiscoveryReviewSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdiscoveryReviewSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
