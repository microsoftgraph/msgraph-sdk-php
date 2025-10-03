<?php

namespace Microsoft\\Graph\\Generated\IdentityProtection\RiskyServicePrincipals\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskyServicePrincipalItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RiskyServicePrincipalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskyServicePrincipalItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RiskyServicePrincipalItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RiskyServicePrincipalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskyServicePrincipalItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RiskyServicePrincipalItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RiskyServicePrincipalItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RiskyServicePrincipalItemRequestBuilderGetQueryParameters {
        return new RiskyServicePrincipalItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
