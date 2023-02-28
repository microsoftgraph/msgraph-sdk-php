<?php

namespace Microsoft\Graph\Generated\Sites\Item\Onenote\Notebooks\GetRecentNotebooksWithIncludePersonalNotebooks;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration 
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
     * @var GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters {
        return new GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new getRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
