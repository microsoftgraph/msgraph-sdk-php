<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ProtectionUnits\Item\GraphDriveProtectionUnit;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphDriveProtectionUnitRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphDriveProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphDriveProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphDriveProtectionUnitRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphDriveProtectionUnitRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphDriveProtectionUnitRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphDriveProtectionUnitRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphDriveProtectionUnitRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphDriveProtectionUnitRequestBuilderGetQueryParameters {
        return new GraphDriveProtectionUnitRequestBuilderGetQueryParameters($expand, $select);
    }

}
