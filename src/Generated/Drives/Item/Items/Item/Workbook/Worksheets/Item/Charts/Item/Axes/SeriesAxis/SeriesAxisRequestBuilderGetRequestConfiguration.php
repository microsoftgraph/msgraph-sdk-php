<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\SeriesAxis;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SeriesAxisRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SeriesAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SeriesAxisRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SeriesAxisRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SeriesAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SeriesAxisRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SeriesAxisRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SeriesAxisRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SeriesAxisRequestBuilderGetQueryParameters {
        return new SeriesAxisRequestBuilderGetQueryParameters($expand, $select);
    }

}
