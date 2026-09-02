<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Item\Resources\Item\Roles\Item\Resource\ExternalOriginResourceConnector;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalOriginResourceConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalOriginResourceConnectorRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalOriginResourceConnectorRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalOriginResourceConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalOriginResourceConnectorRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalOriginResourceConnectorRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalOriginResourceConnectorRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalOriginResourceConnectorRequestBuilderGetQueryParameters {
        return new ExternalOriginResourceConnectorRequestBuilderGetQueryParameters($expand, $select);
    }

}
