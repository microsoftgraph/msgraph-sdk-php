<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters {
        return new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
