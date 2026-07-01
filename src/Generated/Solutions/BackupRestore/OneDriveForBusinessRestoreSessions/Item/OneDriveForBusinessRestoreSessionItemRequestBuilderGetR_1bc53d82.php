<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OneDriveForBusinessRestoreSessionItemRequestBuilderGetRequestConfiguration
*/
class OneDriveForBusinessRestoreSessionItemRequestBuilderGetR_1bc53d82 extends BaseRequestConfiguration 
{
    /**
     * @var OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b|null $queryParameters Request query parameters
    */
    public ?OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b $queryParameters = null;
    
    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionItemRequestBuilderGetR_1bc53d82 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b {
        return new OneDriveForBusinessRestoreSessionItemRequestBuilderGetQ_9dae841b($expand, $select);
    }

}
