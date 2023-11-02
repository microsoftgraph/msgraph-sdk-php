<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidStoreApp\Categories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MobileAppCategoryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MobileAppCategoryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MobileAppCategoryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MobileAppCategoryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MobileAppCategoryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MobileAppCategoryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MobileAppCategoryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MobileAppCategoryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MobileAppCategoryItemRequestBuilderGetQueryParameters {
        return new MobileAppCategoryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
