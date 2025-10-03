<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Item\HeaderRowRange\Sort;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SortRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SortRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SortRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SortRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SortRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SortRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SortRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SortRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SortRequestBuilderGetQueryParameters {
        return new SortRequestBuilderGetQueryParameters($expand, $select);
    }

}
