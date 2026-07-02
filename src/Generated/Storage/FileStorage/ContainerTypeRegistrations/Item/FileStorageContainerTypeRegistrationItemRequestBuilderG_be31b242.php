<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: FileStorageContainerTypeRegistrationItemRequestBuilderGetRequestConfiguration
*/
class FileStorageContainerTypeRegistrationItemRequestBuilderG_be31b242 extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0 $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerTypeRegistrationItemRequestBuilderG_be31b242 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0 {
        return new FileStorageContainerTypeRegistrationItemRequestBuilderG_0a2130c0($expand, $select);
    }

}
