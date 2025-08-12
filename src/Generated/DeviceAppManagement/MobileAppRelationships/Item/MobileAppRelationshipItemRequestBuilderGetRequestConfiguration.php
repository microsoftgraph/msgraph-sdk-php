<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppRelationships\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MobileAppRelationshipItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MobileAppRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MobileAppRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MobileAppRelationshipItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MobileAppRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MobileAppRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MobileAppRelationshipItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MobileAppRelationshipItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MobileAppRelationshipItemRequestBuilderGetQueryParameters {
        return new MobileAppRelationshipItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
