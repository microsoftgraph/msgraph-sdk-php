<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\GradingCategory;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GradingCategoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GradingCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GradingCategoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GradingCategoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GradingCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GradingCategoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GradingCategoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GradingCategoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GradingCategoryRequestBuilderGetQueryParameters {
        return new GradingCategoryRequestBuilderGetQueryParameters($expand, $select);
    }

}
