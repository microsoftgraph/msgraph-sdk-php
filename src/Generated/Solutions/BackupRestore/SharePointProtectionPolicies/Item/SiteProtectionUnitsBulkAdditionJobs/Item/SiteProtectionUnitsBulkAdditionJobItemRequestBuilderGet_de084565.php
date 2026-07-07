<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_de084565 extends BaseRequestConfiguration 
{
    /**
     * @var SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2|null $queryParameters Request query parameters
    */
    public ?SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2 $queryParameters = null;
    
    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_de084565 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2 {
        return new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGet_9f83d2f2($expand, $select);
    }

}
