<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\Filter;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilterRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FilterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilterRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new filterRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FilterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FilterRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new filterRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FilterRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FilterRequestBuilderGetQueryParameters {
        return new FilterRequestBuilderGetQueryParameters($expand, $select);
    }

}
