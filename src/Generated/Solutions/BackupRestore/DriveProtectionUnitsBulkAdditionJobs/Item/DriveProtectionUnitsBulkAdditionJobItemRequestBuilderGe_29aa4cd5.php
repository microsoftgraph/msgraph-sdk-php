<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_29aa4cd5 extends BaseRequestConfiguration 
{
    /**
     * @var DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6|null $queryParameters Request query parameters
    */
    public ?DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6 $queryParameters = null;
    
    /**
     * Instantiates a new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_29aa4cd5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6 {
        return new DriveProtectionUnitsBulkAdditionJobItemRequestBuilderGe_7ff14fa6($expand, $select);
    }

}
