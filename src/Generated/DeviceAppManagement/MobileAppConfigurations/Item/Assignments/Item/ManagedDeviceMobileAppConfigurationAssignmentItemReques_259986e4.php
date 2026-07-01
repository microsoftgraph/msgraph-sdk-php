<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceMobileAppConfigurationAssignmentItemReques_259986e4 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationAssignmentItemReques_259986e4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f {
        return new ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f($expand, $select);
    }

}
