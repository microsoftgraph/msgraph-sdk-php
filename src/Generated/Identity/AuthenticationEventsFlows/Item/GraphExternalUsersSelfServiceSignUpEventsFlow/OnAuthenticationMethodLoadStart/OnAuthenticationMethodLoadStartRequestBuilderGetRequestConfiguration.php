<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnAuthenticationMethodLoadStartRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnAuthenticationMethodLoadStartRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters {
        return new OnAuthenticationMethodLoadStartRequestBuilderGetQueryParameters($expand, $select);
    }

}
