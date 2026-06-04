<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ServicePrincipalRiskDetectionItemRequestBuilderGetRequestConfiguration
*/
class ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314 extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6 $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalRiskDetectionItemRequestBuilderGetReque_2aff0314 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6 {
        return new ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6($expand, $select);
    }

}
