<?php

namespace Microsoft\Graph\Generated\Me\DirectReports\Item\GraphOrgContact;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphOrgContactRequestBuilderGetRequestConfiguration 
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
     * @var GraphOrgContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphOrgContactRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphOrgContactRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphOrgContactRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphOrgContactRequestBuilderGetQueryParameters {
        return new GraphOrgContactRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphOrgContactRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GraphOrgContactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphOrgContactRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
