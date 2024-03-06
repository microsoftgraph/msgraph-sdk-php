<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\CategoryAxis;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CategoryAxisRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CategoryAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CategoryAxisRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CategoryAxisRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CategoryAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CategoryAxisRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CategoryAxisRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CategoryAxisRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CategoryAxisRequestBuilderGetQueryParameters {
        return new CategoryAxisRequestBuilderGetQueryParameters($expand, $select);
    }

}
