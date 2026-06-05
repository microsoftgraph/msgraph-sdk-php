<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileAppTroubleshootingEvents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MobileAppTroubleshootingEventItemRequestBuilderGetRequestConfiguration
*/
class MobileAppTroubleshootingEventItemRequestBuilderGetReque_653f2825 extends BaseRequestConfiguration 
{
    /**
     * @var MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22|null $queryParameters Request query parameters
    */
    public ?MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22 $queryParameters = null;
    
    /**
     * Instantiates a new MobileAppTroubleshootingEventItemRequestBuilderGetReque_653f2825 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22 {
        return new MobileAppTroubleshootingEventItemRequestBuilderGetQuery_de92dd22($expand, $select);
    }

}
