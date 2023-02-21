<?php

namespace Microsoft\Graph\Generated\AgreementAcceptances;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementAcceptancesRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AgreementAcceptancesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementAcceptancesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new agreementAcceptancesRequestBuilderGetQueryParameters.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementAcceptancesRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?string $search = null, ?array $select = null): AgreementAcceptancesRequestBuilderGetQueryParameters {
        return new AgreementAcceptancesRequestBuilderGetQueryParameters($search, $select);
    }

    /**
     * Instantiates a new agreementAcceptancesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AgreementAcceptancesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementAcceptancesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
