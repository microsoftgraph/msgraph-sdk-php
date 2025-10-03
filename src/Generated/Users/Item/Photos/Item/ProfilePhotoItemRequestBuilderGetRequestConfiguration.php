<?php

namespace Microsoft\\Graph\\Generated\Users\Item\Photos\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProfilePhotoItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProfilePhotoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProfilePhotoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProfilePhotoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProfilePhotoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProfilePhotoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProfilePhotoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProfilePhotoItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProfilePhotoItemRequestBuilderGetQueryParameters {
        return new ProfilePhotoItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
