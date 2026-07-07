<?php

namespace Microsoft\Graph\Generated\Security\AuditLog\Queries\Item\Records\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuditLogRecordItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuditLogRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuditLogRecordItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuditLogRecordItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuditLogRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuditLogRecordItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuditLogRecordItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuditLogRecordItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuditLogRecordItemRequestBuilderGetQueryParameters {
        return new AuditLogRecordItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
