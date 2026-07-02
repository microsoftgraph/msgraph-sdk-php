<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OneDriveForBusinessProtectionPolicyItemRequestBuilderGetRequestConfiguration
*/
class OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_889f2f6e extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6 $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_889f2f6e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6 {
        return new OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6($expand, $select);
    }

}
