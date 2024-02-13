<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\Item\ActivatedUsing;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivatedUsingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActivatedUsingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActivatedUsingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActivatedUsingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActivatedUsingRequestBuilderGetQueryParameters {
        return new ActivatedUsingRequestBuilderGetQueryParameters($expand, $select);
    }

}
