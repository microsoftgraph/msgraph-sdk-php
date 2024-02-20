<?php

namespace Microsoft\Graph\Generated\AgreementAcceptances;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementAcceptancesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgreementAcceptancesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementAcceptancesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgreementAcceptancesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgreementAcceptancesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementAcceptancesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgreementAcceptancesRequestBuilderGetQueryParameters.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementAcceptancesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $search = null, ?array $select = null): AgreementAcceptancesRequestBuilderGetQueryParameters {
        return new AgreementAcceptancesRequestBuilderGetQueryParameters($search, $select);
    }

}
