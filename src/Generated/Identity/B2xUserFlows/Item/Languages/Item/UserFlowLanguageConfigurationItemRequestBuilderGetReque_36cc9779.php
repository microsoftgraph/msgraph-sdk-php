<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration
*/
class UserFlowLanguageConfigurationItemRequestBuilderGetReque_36cc9779 extends BaseRequestConfiguration 
{
    /**
     * @var UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010|null $queryParameters Request query parameters
    */
    public ?UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010 $queryParameters = null;
    
    /**
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilderGetReque_36cc9779 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010 {
        return new UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010($expand, $select);
    }

}
