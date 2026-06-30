<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AuthenticationMethodModeDetailItemRequestBuilderGetRequestConfiguration
*/
class AuthenticationMethodModeDetailItemRequestBuilderGetRequ_6a9fddee extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationMethodModeDetailItemRequestBuilderGetRequ_6a9fddee and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d {
        return new AuthenticationMethodModeDetailItemRequestBuilderGetQuer_5496882d($expand, $select);
    }

}
