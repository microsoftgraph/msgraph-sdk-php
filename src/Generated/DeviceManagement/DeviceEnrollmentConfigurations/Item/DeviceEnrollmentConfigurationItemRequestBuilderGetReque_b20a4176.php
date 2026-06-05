<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceEnrollmentConfigurationItemRequestBuilderGetRequestConfiguration
*/
class DeviceEnrollmentConfigurationItemRequestBuilderGetReque_b20a4176 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b|null $queryParameters Request query parameters
    */
    public ?DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b $queryParameters = null;
    
    /**
     * Instantiates a new DeviceEnrollmentConfigurationItemRequestBuilderGetReque_b20a4176 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b {
        return new DeviceEnrollmentConfigurationItemRequestBuilderGetQuery_60bcf42b($expand, $select);
    }

}
