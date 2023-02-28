<?php

namespace Microsoft\Graph\Generated\Groups\Item\Owners\Item\GraphApplication;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphApplicationRequestBuilderGetRequestConfiguration 
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
     * @var GraphApplicationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphApplicationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphApplicationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphApplicationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphApplicationRequestBuilderGetQueryParameters {
        return new GraphApplicationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphApplicationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GraphApplicationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphApplicationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
