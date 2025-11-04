<?php

namespace Microsoft\\Graph\\Generated\Security\Cases;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CasesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CasesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CasesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CasesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CasesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CasesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CasesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CasesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CasesRequestBuilderGetQueryParameters {
        return new CasesRequestBuilderGetQueryParameters($expand, $select);
    }

}
