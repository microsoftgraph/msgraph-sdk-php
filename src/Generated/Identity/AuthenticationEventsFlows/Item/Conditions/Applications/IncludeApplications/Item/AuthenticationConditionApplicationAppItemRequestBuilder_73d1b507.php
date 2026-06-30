<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications\IncludeApplications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AuthenticationConditionApplicationAppItemRequestBuilderGetRequestConfiguration
*/
class AuthenticationConditionApplicationAppItemRequestBuilder_73d1b507 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066|null $queryParameters Request query parameters
    */
    public ?AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066 $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationConditionApplicationAppItemRequestBuilder_73d1b507 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066 {
        return new AuthenticationConditionApplicationAppItemRequestBuilder_fdac1066($expand, $select);
    }

}
