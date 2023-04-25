<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Tags\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdiscoveryReviewTagItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EdiscoveryReviewTagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdiscoveryReviewTagItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EdiscoveryReviewTagItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EdiscoveryReviewTagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdiscoveryReviewTagItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EdiscoveryReviewTagItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdiscoveryReviewTagItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EdiscoveryReviewTagItemRequestBuilderGetQueryParameters {
        return new EdiscoveryReviewTagItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
