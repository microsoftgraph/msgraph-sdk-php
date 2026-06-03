<?php

namespace Microsoft\Graph\Generated\DeviceManagement\AuditEvents\GetAuditActivityTypesWithCategory;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getAuditActivityTypesWithCategoryRequestBuilderGetRequestConfiguration
*/
class GetAuditActivityTypesWithCategoryRequestBuilderGetReque_82721461 extends BaseRequestConfiguration 
{
    /**
     * @var GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8|null $queryParameters Request query parameters
    */
    public ?GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8 $queryParameters = null;
    
    /**
     * Instantiates a new GetAuditActivityTypesWithCategoryRequestBuilderGetReque_82721461 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8 {
        return new GetAuditActivityTypesWithCategoryRequestBuilderGetQuery_ca5911d8($count, $filter, $search, $skip, $top);
    }

}
