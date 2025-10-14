<?php

namespace Microsoft\\Graph\\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\IdentitySynchronization;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentitySynchronizationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentitySynchronizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentitySynchronizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentitySynchronizationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentitySynchronizationRequestBuilderGetQueryParameters {
        return new IdentitySynchronizationRequestBuilderGetQueryParameters($expand, $select);
    }

}
