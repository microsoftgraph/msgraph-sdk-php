<?php

namespace Microsoft\Graph\Generated\Groups\Item\PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ResourceSpecificPermissionGrantItemRequestBuilderGetRequestConfiguration
*/
class ResourceSpecificPermissionGrantItemRequestBuilderGetReq_c7368aef extends BaseRequestConfiguration 
{
    /**
     * @var ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c|null $queryParameters Request query parameters
    */
    public ?ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c $queryParameters = null;
    
    /**
     * Instantiates a new ResourceSpecificPermissionGrantItemRequestBuilderGetReq_c7368aef and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c {
        return new ResourceSpecificPermissionGrantItemRequestBuilderGetQue_b4016e9c($expand, $select);
    }

}
