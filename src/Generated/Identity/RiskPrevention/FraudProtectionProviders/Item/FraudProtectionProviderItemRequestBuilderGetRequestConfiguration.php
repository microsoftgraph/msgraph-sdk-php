<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\FraudProtectionProviders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FraudProtectionProviderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FraudProtectionProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FraudProtectionProviderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FraudProtectionProviderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FraudProtectionProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FraudProtectionProviderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FraudProtectionProviderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FraudProtectionProviderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FraudProtectionProviderItemRequestBuilderGetQueryParameters {
        return new FraudProtectionProviderItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
