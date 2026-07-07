<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileStorageContainerTypeRegistrationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerTypeRegistrationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters {
        return new FileStorageContainerTypeRegistrationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
