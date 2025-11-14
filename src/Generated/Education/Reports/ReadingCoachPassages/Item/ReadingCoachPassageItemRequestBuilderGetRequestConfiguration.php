<?php

namespace Microsoft\Graph\Generated\Education\Reports\ReadingCoachPassages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReadingCoachPassageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReadingCoachPassageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReadingCoachPassageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReadingCoachPassageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReadingCoachPassageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReadingCoachPassageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReadingCoachPassageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReadingCoachPassageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReadingCoachPassageItemRequestBuilderGetQueryParameters {
        return new ReadingCoachPassageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
