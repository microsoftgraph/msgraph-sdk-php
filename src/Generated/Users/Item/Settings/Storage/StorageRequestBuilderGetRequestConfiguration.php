<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\Storage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StorageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StorageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StorageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StorageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StorageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StorageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StorageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StorageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StorageRequestBuilderGetQueryParameters {
        return new StorageRequestBuilderGetQueryParameters($expand, $select);
    }

}
