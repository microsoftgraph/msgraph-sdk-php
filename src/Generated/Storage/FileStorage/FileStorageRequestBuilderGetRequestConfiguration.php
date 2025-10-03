<?php

namespace Microsoft\\Graph\\Generated\Storage\FileStorage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileStorageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileStorageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageRequestBuilderGetQueryParameters {
        return new FileStorageRequestBuilderGetQueryParameters($expand, $select);
    }

}
