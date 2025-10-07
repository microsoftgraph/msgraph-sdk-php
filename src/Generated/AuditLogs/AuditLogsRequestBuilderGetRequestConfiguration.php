<?php

namespace Microsoft\\Graph\\Generated\AuditLogs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuditLogsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuditLogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuditLogsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuditLogsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuditLogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuditLogsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuditLogsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuditLogsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuditLogsRequestBuilderGetQueryParameters {
        return new AuditLogsRequestBuilderGetQueryParameters($expand, $select);
    }

}
