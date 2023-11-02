<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\OverridesPages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserFlowLanguagePageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserFlowLanguagePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserFlowLanguagePageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserFlowLanguagePageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserFlowLanguagePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserFlowLanguagePageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserFlowLanguagePageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserFlowLanguagePageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserFlowLanguagePageItemRequestBuilderGetQueryParameters {
        return new UserFlowLanguagePageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
