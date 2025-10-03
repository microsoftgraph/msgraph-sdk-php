<?php

namespace Microsoft\\Graph\\Generated\Storage\FileStorage\DeletedContainers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileStorageContainerItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerItemRequestBuilderGetQueryParameters {
        return new FileStorageContainerItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
