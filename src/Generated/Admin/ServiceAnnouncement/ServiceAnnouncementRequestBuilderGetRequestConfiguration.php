<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServiceAnnouncementRequestBuilderGetRequestConfiguration 
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
     * @var ServiceAnnouncementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServiceAnnouncementRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new serviceAnnouncementRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServiceAnnouncementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServiceAnnouncementRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new serviceAnnouncementRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServiceAnnouncementRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServiceAnnouncementRequestBuilderGetQueryParameters {
        return new ServiceAnnouncementRequestBuilderGetQueryParameters($expand, $select);
    }

}
