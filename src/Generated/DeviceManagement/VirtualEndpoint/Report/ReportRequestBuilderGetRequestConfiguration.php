<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\Report;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReportRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReportRequestBuilderGetQueryParameters {
        return new ReportRequestBuilderGetQueryParameters($expand, $select);
    }

}
