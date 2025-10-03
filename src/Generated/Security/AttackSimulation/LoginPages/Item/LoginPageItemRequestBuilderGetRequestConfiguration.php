<?php

namespace Microsoft\\Graph\\Generated\Security\AttackSimulation\LoginPages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LoginPageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LoginPageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LoginPageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LoginPageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LoginPageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LoginPageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LoginPageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LoginPageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LoginPageItemRequestBuilderGetQueryParameters {
        return new LoginPageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
