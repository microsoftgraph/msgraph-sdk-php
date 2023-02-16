<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThumbnailSetItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ThumbnailSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThumbnailSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThumbnailSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThumbnailSetItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ThumbnailSetItemRequestBuilderGetQueryParameters {
        return new ThumbnailSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ThumbnailSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ThumbnailSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThumbnailSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
