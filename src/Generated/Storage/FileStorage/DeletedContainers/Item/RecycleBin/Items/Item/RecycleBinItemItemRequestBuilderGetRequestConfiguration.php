<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\RecycleBin\Items\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecycleBinItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecycleBinItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecycleBinItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecycleBinItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecycleBinItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecycleBinItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecycleBinItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecycleBinItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecycleBinItemItemRequestBuilderGetQueryParameters {
        return new RecycleBinItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
