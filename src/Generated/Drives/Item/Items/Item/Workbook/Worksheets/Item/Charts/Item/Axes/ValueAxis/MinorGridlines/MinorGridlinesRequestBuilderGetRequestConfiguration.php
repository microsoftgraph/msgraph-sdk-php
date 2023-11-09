<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\ValueAxis\MinorGridlines;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MinorGridlinesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MinorGridlinesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MinorGridlinesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new minorGridlinesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MinorGridlinesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MinorGridlinesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new minorGridlinesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MinorGridlinesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MinorGridlinesRequestBuilderGetQueryParameters {
        return new MinorGridlinesRequestBuilderGetQueryParameters($expand, $select);
    }

}
