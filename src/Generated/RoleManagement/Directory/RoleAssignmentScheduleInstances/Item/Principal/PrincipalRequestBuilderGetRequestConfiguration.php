<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\Item\Principal;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrincipalRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new principalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrincipalRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new principalRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrincipalRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrincipalRequestBuilderGetQueryParameters {
        return new PrincipalRequestBuilderGetQueryParameters($expand, $select);
    }

}
