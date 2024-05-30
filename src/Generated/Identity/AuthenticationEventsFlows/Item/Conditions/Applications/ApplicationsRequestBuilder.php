<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications;

use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications\IncludeApplications\IncludeApplicationsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/conditions/applications
*/
class ApplicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the includeApplications property of the microsoft.graph.authenticationConditionsApplications entity.
    */
    public function includeApplications(): IncludeApplicationsRequestBuilder {
        return new IncludeApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApplicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/conditions/applications');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
