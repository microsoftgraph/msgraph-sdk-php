<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OneDriveForBusinessRestoreSessionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters {
        return new OneDriveForBusinessRestoreSessionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
