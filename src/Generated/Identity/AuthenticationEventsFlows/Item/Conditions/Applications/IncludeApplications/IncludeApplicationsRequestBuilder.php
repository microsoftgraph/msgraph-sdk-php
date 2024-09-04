<?php

namespace Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications\IncludeApplications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications\IncludeApplications\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\Applications\IncludeApplications\Item\AuthenticationConditionApplicationAppItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AuthenticationConditionApplication;
use Microsoft\Graph\Generated\Models\AuthenticationConditionApplicationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the includeApplications property of the microsoft.graph.authenticationConditionsApplications entity.
*/
class IncludeApplicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the includeApplications property of the microsoft.graph.authenticationConditionsApplications entity.
     * @param string $authenticationConditionApplicationAppId The unique identifier of authenticationConditionApplication
     * @return AuthenticationConditionApplicationAppItemRequestBuilder
    */
    public function byAuthenticationConditionApplicationAppId(string $authenticationConditionApplicationAppId): AuthenticationConditionApplicationAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationConditionApplication%2DappId'] = $authenticationConditionApplicationAppId;
        return new AuthenticationConditionApplicationAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncludeApplicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}/conditions/applications/includeApplications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the applications linked to an external identities self-service sign up user flow that's represented by an externalUsersSelfServiceSignupEventsFlow object. These are the applications for which the authentication experience that's defined by the user flow is enabled. To find the user flow that's linked to an application, see Example 4: List user flow associated with specific application ID.
     * @param IncludeApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationConditionApplicationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationconditionsapplications-list-includeapplications?view=graph-rest-1.0 Find more info here
    */
    public function get(?IncludeApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationConditionApplicationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add or link an application to a user flow, or authenticationEventsFlow. This enables the authentication experience defined by the user flow to be enabled for the application. An application can only be linked to one user flow. The app must have an associated service principal in the tenant.
     * @param AuthenticationConditionApplication $body The request body
     * @param IncludeApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationConditionApplication|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationconditionsapplications-post-includeapplications?view=graph-rest-1.0 Find more info here
    */
    public function post(AuthenticationConditionApplication $body, ?IncludeApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationConditionApplication::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the applications linked to an external identities self-service sign up user flow that's represented by an externalUsersSelfServiceSignupEventsFlow object. These are the applications for which the authentication experience that's defined by the user flow is enabled. To find the user flow that's linked to an application, see Example 4: List user flow associated with specific application ID.
     * @param IncludeApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncludeApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Add or link an application to a user flow, or authenticationEventsFlow. This enables the authentication experience defined by the user flow to be enabled for the application. An application can only be linked to one user flow. The app must have an associated service principal in the tenant.
     * @param AuthenticationConditionApplication $body The request body
     * @param IncludeApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationConditionApplication $body, ?IncludeApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IncludeApplicationsRequestBuilder
    */
    public function withUrl(string $rawUrl): IncludeApplicationsRequestBuilder {
        return new IncludeApplicationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
