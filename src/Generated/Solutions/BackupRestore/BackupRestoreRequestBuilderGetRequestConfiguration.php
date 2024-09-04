<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BackupRestoreRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BackupRestoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BackupRestoreRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BackupRestoreRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BackupRestoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BackupRestoreRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BackupRestoreRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BackupRestoreRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BackupRestoreRequestBuilderGetQueryParameters {
        return new BackupRestoreRequestBuilderGetQueryParameters($expand, $select);
    }

}
