<?php

namespace Microsoft\Graph\Generated\Groups\Item\Photos\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProfilePhotoItemRequestBuilderGetRequestConfiguration 
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
     * @var ProfilePhotoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProfilePhotoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProfilePhotoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return ProfilePhotoItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): ProfilePhotoItemRequestBuilderGetQueryParameters {
        return new ProfilePhotoItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new ProfilePhotoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ProfilePhotoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProfilePhotoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
