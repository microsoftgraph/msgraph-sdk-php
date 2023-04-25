<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsOfUseRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TermsOfUseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsOfUseRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new termsOfUseRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TermsOfUseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsOfUseRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new termsOfUseRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermsOfUseRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TermsOfUseRequestBuilderGetQueryParameters {
        return new TermsOfUseRequestBuilderGetQueryParameters($expand, $select);
    }

}
