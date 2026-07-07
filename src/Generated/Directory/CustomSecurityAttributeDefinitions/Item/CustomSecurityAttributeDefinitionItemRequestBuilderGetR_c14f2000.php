<?php

namespace Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CustomSecurityAttributeDefinitionItemRequestBuilderGetRequestConfiguration
*/
class CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000 extends BaseRequestConfiguration 
{
    /**
     * @var CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f|null $queryParameters Request query parameters
    */
    public ?CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f $queryParameters = null;
    
    /**
     * Instantiates a new CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f {
        return new CustomSecurityAttributeDefinitionItemRequestBuilderGetQ_6466444f($expand, $select);
    }

}
