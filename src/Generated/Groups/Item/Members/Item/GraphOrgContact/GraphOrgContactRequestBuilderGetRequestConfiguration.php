<?php

namespace Microsoft\Graph\Generated\Groups\Item\Members\Item\GraphOrgContact;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphOrgContactRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphOrgContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphOrgContactRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphOrgContactRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphOrgContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphOrgContactRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphOrgContactRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphOrgContactRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphOrgContactRequestBuilderGetQueryParameters {
        return new GraphOrgContactRequestBuilderGetQueryParameters($expand, $select);
    }

}
