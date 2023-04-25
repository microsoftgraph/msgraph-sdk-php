<?php

namespace Microsoft\Graph\Generated\Me\Activities\Item\HistoryItems\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivityHistoryItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActivityHistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivityHistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActivityHistoryItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivityHistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivityHistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActivityHistoryItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActivityHistoryItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActivityHistoryItemItemRequestBuilderGetQueryParameters {
        return new ActivityHistoryItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
