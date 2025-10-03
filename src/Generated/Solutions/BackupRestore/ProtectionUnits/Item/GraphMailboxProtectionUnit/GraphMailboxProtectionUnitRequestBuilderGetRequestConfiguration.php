<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\Item\GraphMailboxProtectionUnit;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphMailboxProtectionUnitRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphMailboxProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphMailboxProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphMailboxProtectionUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphMailboxProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphMailboxProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphMailboxProtectionUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphMailboxProtectionUnitRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphMailboxProtectionUnitRequestBuilderGetQueryParameters {
        return new GraphMailboxProtectionUnitRequestBuilderGetQueryParameters($expand, $select);
    }

}
