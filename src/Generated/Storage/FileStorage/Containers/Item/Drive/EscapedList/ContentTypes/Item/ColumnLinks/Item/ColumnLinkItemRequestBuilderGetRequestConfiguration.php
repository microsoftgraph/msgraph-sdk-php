<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\EscapedList\ContentTypes\Item\ColumnLinks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ColumnLinkItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ColumnLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ColumnLinkItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ColumnLinkItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ColumnLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ColumnLinkItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ColumnLinkItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ColumnLinkItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ColumnLinkItemRequestBuilderGetQueryParameters {
        return new ColumnLinkItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
