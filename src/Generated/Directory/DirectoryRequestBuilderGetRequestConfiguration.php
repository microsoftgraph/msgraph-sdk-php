<?php

namespace Microsoft\Graph\Generated\Directory;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DirectoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new directoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DirectoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new directoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DirectoryRequestBuilderGetQueryParameters {
        return new DirectoryRequestBuilderGetQueryParameters($expand, $select);
    }

}
