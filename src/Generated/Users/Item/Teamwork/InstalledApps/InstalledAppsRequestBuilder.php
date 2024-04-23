<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserScopeTeamsAppInstallation;
use Microsoft\Graph\Generated\Models\UserScopeTeamsAppInstallationCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item\UserScopeTeamsAppInstallationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the installedApps property of the microsoft.graph.userTeamwork entity.
*/
class InstalledAppsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.userTeamwork entity.
     * @param string $userScopeTeamsAppInstallationId The unique identifier of userScopeTeamsAppInstallation
     * @return UserScopeTeamsAppInstallationItemRequestBuilder
    */
    public function byUserScopeTeamsAppInstallationId(string $userScopeTeamsAppInstallationId): UserScopeTeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userScopeTeamsAppInstallation%2Did'] = $userScopeTeamsAppInstallationId;
        return new UserScopeTeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InstalledAppsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/installedApps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The apps installed in the personal scope of this user.
     * @param InstalledAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserScopeTeamsAppInstallationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?InstalledAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserScopeTeamsAppInstallationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to installedApps for users
     * @param UserScopeTeamsAppInstallation $body The request body
     * @param InstalledAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserScopeTeamsAppInstallation|null>
     * @throws Exception
    */
    public function post(UserScopeTeamsAppInstallation $body, ?InstalledAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserScopeTeamsAppInstallation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The apps installed in the personal scope of this user.
     * @param InstalledAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InstalledAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to installedApps for users
     * @param UserScopeTeamsAppInstallation $body The request body
     * @param InstalledAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserScopeTeamsAppInstallation $body, ?InstalledAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InstalledAppsRequestBuilder
    */
    public function withUrl(string $rawUrl): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
