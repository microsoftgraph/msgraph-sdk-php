<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\Reports\ExportJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementExportJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementExportJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementExportJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementExportJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementExportJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementExportJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementExportJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementExportJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementExportJobItemRequestBuilderGetQueryParameters {
        return new DeviceManagementExportJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
