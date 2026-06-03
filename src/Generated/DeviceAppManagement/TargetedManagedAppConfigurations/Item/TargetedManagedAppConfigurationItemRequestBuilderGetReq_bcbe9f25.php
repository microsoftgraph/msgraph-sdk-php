<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TargetedManagedAppConfigurationItemRequestBuilderGetRequestConfiguration
*/
class TargetedManagedAppConfigurationItemRequestBuilderGetReq_bcbe9f25 extends BaseRequestConfiguration 
{
    /**
     * @var TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6|null $queryParameters Request query parameters
    */
    public ?TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6 $queryParameters = null;
    
    /**
     * Instantiates a new TargetedManagedAppConfigurationItemRequestBuilderGetReq_bcbe9f25 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6 {
        return new TargetedManagedAppConfigurationItemRequestBuilderGetQue_85949ed6($expand, $select);
    }

}
