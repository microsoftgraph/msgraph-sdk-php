<?php

namespace Microsoft\Graph\Generated\Me\Insights\Shared\Item\LastSharedMethod;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastSharedMethodRequestBuilderGetRequestConfiguration 
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
     * @var LastSharedMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastSharedMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new lastSharedMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastSharedMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastSharedMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new lastSharedMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastSharedMethodRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastSharedMethodRequestBuilderGetQueryParameters {
        return new LastSharedMethodRequestBuilderGetQueryParameters($expand, $select);
    }

}
