<?php

namespace Microsoft\\Graph\\Generated\Security\AttackSimulation\Simulations\Item\LoginPage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LoginPageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LoginPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LoginPageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LoginPageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LoginPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LoginPageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LoginPageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LoginPageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LoginPageRequestBuilderGetQueryParameters {
        return new LoginPageRequestBuilderGetQueryParameters($expand, $select);
    }

}
