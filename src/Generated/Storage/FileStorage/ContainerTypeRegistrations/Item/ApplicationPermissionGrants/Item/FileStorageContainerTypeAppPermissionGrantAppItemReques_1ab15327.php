<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration
*/
class FileStorageContainerTypeAppPermissionGrantAppItemReques_1ab15327 extends BaseRequestConfiguration 
{
    /**
     * @var FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d|null $queryParameters Request query parameters
    */
    public ?FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d $queryParameters = null;
    
    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrantAppItemReques_1ab15327 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d {
        return new FileStorageContainerTypeAppPermissionGrantAppItemReques_7c39753d($expand, $select);
    }

}
