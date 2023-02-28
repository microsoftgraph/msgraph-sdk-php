<?php

namespace Microsoft\Graph\Generated\Users\Item\CreatedObjects\Item\GraphServicePrincipal;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphServicePrincipalRequestBuilderGetRequestConfiguration 
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
     * @var GraphServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphServicePrincipalRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphServicePrincipalRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphServicePrincipalRequestBuilderGetQueryParameters {
        return new GraphServicePrincipalRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphServicePrincipalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GraphServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
