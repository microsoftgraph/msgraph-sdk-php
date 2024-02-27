<?php

namespace Microsoft\Graph\Generated\Groups\Item\Photos;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhotosRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PhotosRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhotosRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PhotosRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PhotosRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PhotosRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PhotosRequestBuilderGetQueryParameters.
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return PhotosRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): PhotosRequestBuilderGetQueryParameters {
        return new PhotosRequestBuilderGetQueryParameters($filter, $orderby, $select, $skip, $top);
    }

}
