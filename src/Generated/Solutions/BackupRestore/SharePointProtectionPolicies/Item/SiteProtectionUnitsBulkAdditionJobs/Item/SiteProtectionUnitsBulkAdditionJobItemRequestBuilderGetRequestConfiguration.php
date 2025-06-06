<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters {
        return new SiteProtectionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
