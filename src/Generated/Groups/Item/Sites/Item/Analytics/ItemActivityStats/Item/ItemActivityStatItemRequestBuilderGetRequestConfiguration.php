<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Analytics\ItemActivityStats\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ItemActivityStatItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ItemActivityStatItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ItemActivityStatItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ItemActivityStatItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ItemActivityStatItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ItemActivityStatItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ItemActivityStatItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ItemActivityStatItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ItemActivityStatItemRequestBuilderGetQueryParameters {
        return new ItemActivityStatItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
