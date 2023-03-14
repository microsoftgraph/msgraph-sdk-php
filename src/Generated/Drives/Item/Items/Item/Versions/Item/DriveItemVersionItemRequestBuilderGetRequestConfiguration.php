<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriveItemVersionItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DriveItemVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriveItemVersionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DriveItemVersionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveItemVersionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DriveItemVersionItemRequestBuilderGetQueryParameters {
        return new DriveItemVersionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DriveItemVersionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveItemVersionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveItemVersionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
