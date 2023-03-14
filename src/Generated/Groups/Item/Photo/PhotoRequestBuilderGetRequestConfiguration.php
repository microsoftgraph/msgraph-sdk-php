<?php

namespace Microsoft\Graph\Generated\Groups\Item\Photo;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhotoRequestBuilderGetRequestConfiguration 
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
     * @var PhotoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhotoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new photoRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return PhotoRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): PhotoRequestBuilderGetQueryParameters {
        return new PhotoRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new photoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PhotoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PhotoRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
