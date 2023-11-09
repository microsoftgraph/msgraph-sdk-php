<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\Items\Item\DocumentSetVersions\Item\Fields;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FieldsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FieldsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FieldsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new fieldsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FieldsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FieldsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new fieldsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FieldsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FieldsRequestBuilderGetQueryParameters {
        return new FieldsRequestBuilderGetQueryParameters($expand, $select);
    }

}
