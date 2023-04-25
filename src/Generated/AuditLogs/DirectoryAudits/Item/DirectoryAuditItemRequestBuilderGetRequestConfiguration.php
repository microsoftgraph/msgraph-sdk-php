<?php

namespace Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryAuditItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DirectoryAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryAuditItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DirectoryAuditItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DirectoryAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryAuditItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DirectoryAuditItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryAuditItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DirectoryAuditItemRequestBuilderGetQueryParameters {
        return new DirectoryAuditItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
