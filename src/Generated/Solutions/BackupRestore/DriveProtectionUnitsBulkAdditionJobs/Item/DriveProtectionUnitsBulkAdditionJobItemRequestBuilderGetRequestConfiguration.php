<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters {
        return new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
