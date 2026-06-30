<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: FileStorageContainerTypeItemRequestBuilderGetRequestConfiguration
*/
class FileStorageContainerTypeItemRequestBuilderGetRequestCon_39af8538 extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerTypeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerTypeItemRequestBuilderGetRequestCon_39af8538 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerTypeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerTypeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerTypeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerTypeItemRequestBuilderGetQueryParameters {
        return new FileStorageContainerTypeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
