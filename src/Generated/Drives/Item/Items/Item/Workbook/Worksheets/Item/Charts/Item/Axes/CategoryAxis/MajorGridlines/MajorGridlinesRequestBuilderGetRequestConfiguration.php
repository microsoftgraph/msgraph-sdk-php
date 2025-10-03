<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\CategoryAxis\MajorGridlines;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MajorGridlinesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MajorGridlinesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MajorGridlinesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MajorGridlinesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MajorGridlinesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MajorGridlinesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MajorGridlinesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MajorGridlinesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MajorGridlinesRequestBuilderGetQueryParameters {
        return new MajorGridlinesRequestBuilderGetQueryParameters($expand, $select);
    }

}
