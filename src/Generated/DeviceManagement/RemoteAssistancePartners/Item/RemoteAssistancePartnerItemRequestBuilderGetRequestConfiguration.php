<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RemoteAssistancePartners\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteAssistancePartnerItemRequestBuilderGetRequestConfiguration 
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
     * @var RemoteAssistancePartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteAssistancePartnerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteAssistancePartnerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteAssistancePartnerItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RemoteAssistancePartnerItemRequestBuilderGetQueryParameters {
        return new RemoteAssistancePartnerItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RemoteAssistancePartnerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RemoteAssistancePartnerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteAssistancePartnerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
