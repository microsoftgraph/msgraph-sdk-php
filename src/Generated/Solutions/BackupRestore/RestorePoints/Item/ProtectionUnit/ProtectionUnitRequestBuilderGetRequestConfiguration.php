<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\RestorePoints\Item\ProtectionUnit;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProtectionUnitRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProtectionUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProtectionUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProtectionUnitRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProtectionUnitRequestBuilderGetQueryParameters {
        return new ProtectionUnitRequestBuilderGetQueryParameters($expand, $select);
    }

}
