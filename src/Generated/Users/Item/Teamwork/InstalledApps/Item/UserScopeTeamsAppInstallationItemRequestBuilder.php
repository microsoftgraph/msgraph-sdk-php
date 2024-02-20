<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserScopeTeamsAppInstallation;
use Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item\Chat\ChatRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item\TeamsApp\TeamsAppRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Teamwork\InstalledApps\Item\TeamsAppDefinition\TeamsAppDefinitionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the installedApps property of the microsoft.graph.userTeamwork entity.
*/
class UserScopeTeamsAppInstallationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the chat property of the microsoft.graph.userScopeTeamsAppInstallation entity.
    */
    public function chat(): ChatRequestBuilder {
        return new ChatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamsApp property of the microsoft.graph.teamsAppInstallation entity.
    */
    public function teamsApp(): TeamsAppRequestBuilder {
        return new TeamsAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamsAppDefinition property of the microsoft.graph.teamsAppInstallation entity.
    */
    public function teamsAppDefinition(): TeamsAppDefinitionRequestBuilder {
        return new TeamsAppDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UserScopeTeamsAppInstallationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/installedApps/{userScopeTeamsAppInstallation%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Uninstall an app from the personal scope of the specified user.
     * @param UserScopeTeamsAppInstallationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/userteamwork-delete-installedapps?view=graph-rest-1.0 Find more info here
    */
    public function delete(?UserScopeTeamsAppInstallationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the app installed in the personal scope of the specified user.
     * @param UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserScopeTeamsAppInstallation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/userteamwork-get-installedapps?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserScopeTeamsAppInstallation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property installedApps in users
     * @param UserScopeTeamsAppInstallation $body The request body
     * @param UserScopeTeamsAppInstallationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserScopeTeamsAppInstallation|null>
     * @throws Exception
    */
    public function patch(UserScopeTeamsAppInstallation $body, ?UserScopeTeamsAppInstallationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserScopeTeamsAppInstallation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Uninstall an app from the personal scope of the specified user.
     * @param UserScopeTeamsAppInstallationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserScopeTeamsAppInstallationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/teamwork/installedApps/{userScopeTeamsAppInstallation%2Did}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve the app installed in the personal scope of the specified user.
     * @param UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property installedApps in users
     * @param UserScopeTeamsAppInstallation $body The request body
     * @param UserScopeTeamsAppInstallationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserScopeTeamsAppInstallation $body, ?UserScopeTeamsAppInstallationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/teamwork/installedApps/{userScopeTeamsAppInstallation%2Did}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return UserScopeTeamsAppInstallationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UserScopeTeamsAppInstallationItemRequestBuilder {
        return new UserScopeTeamsAppInstallationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
