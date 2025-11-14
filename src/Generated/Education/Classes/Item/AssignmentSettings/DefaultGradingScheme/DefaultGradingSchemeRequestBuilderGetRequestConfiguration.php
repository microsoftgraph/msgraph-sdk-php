<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentSettings\DefaultGradingScheme;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultGradingSchemeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultGradingSchemeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultGradingSchemeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultGradingSchemeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultGradingSchemeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultGradingSchemeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultGradingSchemeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultGradingSchemeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultGradingSchemeRequestBuilderGetQueryParameters {
        return new DefaultGradingSchemeRequestBuilderGetQueryParameters($expand, $select);
    }

}
