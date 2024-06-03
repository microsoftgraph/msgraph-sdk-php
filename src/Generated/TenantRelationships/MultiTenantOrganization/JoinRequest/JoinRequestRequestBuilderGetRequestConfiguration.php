<?php

namespace Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization\JoinRequest;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class JoinRequestRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var JoinRequestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?JoinRequestRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new JoinRequestRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param JoinRequestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?JoinRequestRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new JoinRequestRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return JoinRequestRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): JoinRequestRequestBuilderGetQueryParameters {
        return new JoinRequestRequestBuilderGetQueryParameters($expand, $select);
    }

}
