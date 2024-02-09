<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReportsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReportsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReportsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReportsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReportsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReportsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReportsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReportsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReportsRequestBuilderGetQueryParameters {
        return new ReportsRequestBuilderGetQueryParameters($expand, $select);
    }

}
