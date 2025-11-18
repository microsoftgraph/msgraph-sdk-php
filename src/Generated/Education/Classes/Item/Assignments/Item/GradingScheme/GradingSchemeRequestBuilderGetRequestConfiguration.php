<?php

namespace Microsoft\\Graph\\Generated\Education\Classes\Item\Assignments\Item\GradingScheme;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GradingSchemeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GradingSchemeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GradingSchemeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GradingSchemeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GradingSchemeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GradingSchemeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GradingSchemeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GradingSchemeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GradingSchemeRequestBuilderGetQueryParameters {
        return new GradingSchemeRequestBuilderGetQueryParameters($expand, $select);
    }

}
