<?php

namespace Microsoft\Graph\Generated\Security\AuditLog;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuditLogRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuditLogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuditLogRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuditLogRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuditLogRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuditLogRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuditLogRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuditLogRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuditLogRequestBuilderGetQueryParameters {
        return new AuditLogRequestBuilderGetQueryParameters($expand, $select);
    }

}
