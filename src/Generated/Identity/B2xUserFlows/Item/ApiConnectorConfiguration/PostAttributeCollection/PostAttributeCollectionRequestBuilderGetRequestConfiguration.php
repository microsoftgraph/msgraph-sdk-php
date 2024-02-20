<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PostAttributeCollection;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PostAttributeCollectionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PostAttributeCollectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PostAttributeCollectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PostAttributeCollectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PostAttributeCollectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PostAttributeCollectionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PostAttributeCollectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PostAttributeCollectionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PostAttributeCollectionRequestBuilderGetQueryParameters {
        return new PostAttributeCollectionRequestBuilderGetQueryParameters($expand, $select);
    }

}
