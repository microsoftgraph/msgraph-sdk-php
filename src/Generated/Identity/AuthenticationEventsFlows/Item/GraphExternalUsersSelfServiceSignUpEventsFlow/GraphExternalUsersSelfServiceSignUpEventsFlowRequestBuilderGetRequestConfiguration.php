<?php

namespace Microsoft\\Graph\\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilderGetQueryParameters($expand, $select);
    }

}
