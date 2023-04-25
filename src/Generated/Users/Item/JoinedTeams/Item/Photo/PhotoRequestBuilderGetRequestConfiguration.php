<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Photo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhotoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PhotoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhotoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new photoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PhotoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PhotoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new photoRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PhotoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PhotoRequestBuilderGetQueryParameters {
        return new PhotoRequestBuilderGetQueryParameters($expand, $select);
    }

}
