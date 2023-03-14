<?php

namespace Microsoft\Graph\Generated\Security\SecureScores\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SecureScoreItemRequestBuilderGetRequestConfiguration 
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
     * @var SecureScoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SecureScoreItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SecureScoreItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SecureScoreItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SecureScoreItemRequestBuilderGetQueryParameters {
        return new SecureScoreItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SecureScoreItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SecureScoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SecureScoreItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
