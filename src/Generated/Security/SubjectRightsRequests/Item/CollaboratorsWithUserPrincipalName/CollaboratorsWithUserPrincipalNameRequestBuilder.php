<?php

namespace Microsoft\Graph\Generated\Security\SubjectRightsRequests\Item\CollaboratorsWithUserPrincipalName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collaborators property of the microsoft.graph.subjectRightsRequest entity.
*/
class CollaboratorsWithUserPrincipalNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CollaboratorsWithUserPrincipalNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $userPrincipalName Alternate key of user
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $userPrincipalName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/subjectRightsRequests/{subjectRightsRequest%2Did}/collaborators(userPrincipalName=\'{userPrincipalName}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['userPrincipalName'] = $userPrincipalName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of users who can collaborate on the request.
     * @param CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<User|null>
     * @throws Exception
    */
    public function get(?CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [User::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of users who can collaborate on the request.
     * @param CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CollaboratorsWithUserPrincipalNameRequestBuilder
    */
    public function withUrl(string $rawUrl): CollaboratorsWithUserPrincipalNameRequestBuilder {
        return new CollaboratorsWithUserPrincipalNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
