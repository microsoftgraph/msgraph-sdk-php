<?php

namespace Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\ColumnLinks\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ColumnLinkItemRequestBuilderGetRequestConfiguration 
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
     * @var ColumnLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ColumnLinkItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ColumnLinkItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ColumnLinkItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ColumnLinkItemRequestBuilderGetQueryParameters {
        return new ColumnLinkItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ColumnLinkItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ColumnLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ColumnLinkItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
