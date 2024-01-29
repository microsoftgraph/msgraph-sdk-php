<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemAtWithIndex\DataLabels;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataLabelsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataLabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataLabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new dataLabelsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataLabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataLabelsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new dataLabelsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataLabelsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataLabelsRequestBuilderGetQueryParameters {
        return new DataLabelsRequestBuilderGetQueryParameters($expand, $select);
    }

}
