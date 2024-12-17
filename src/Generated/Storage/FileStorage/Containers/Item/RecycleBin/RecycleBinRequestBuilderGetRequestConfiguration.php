<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\RecycleBin;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecycleBinRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecycleBinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecycleBinRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecycleBinRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecycleBinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecycleBinRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecycleBinRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecycleBinRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecycleBinRequestBuilderGetQueryParameters {
        return new RecycleBinRequestBuilderGetQueryParameters($expand, $select);
    }

}
