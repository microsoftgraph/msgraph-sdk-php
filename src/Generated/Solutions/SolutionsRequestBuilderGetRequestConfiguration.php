<?php

namespace Microsoft\Graph\Generated\Solutions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SolutionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SolutionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SolutionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SolutionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SolutionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SolutionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SolutionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SolutionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SolutionsRequestBuilderGetQueryParameters {
        return new SolutionsRequestBuilderGetQueryParameters($expand, $select);
    }

}
