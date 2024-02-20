<?php

namespace Microsoft\Graph\Generated\Agreements\Item\File;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FileRequestBuilderGetQueryParameters {
        return new FileRequestBuilderGetQueryParameters($expand, $select);
    }

}
