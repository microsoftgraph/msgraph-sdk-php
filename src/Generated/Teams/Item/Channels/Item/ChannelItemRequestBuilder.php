<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Channel;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalName\DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\FilesFolder\FilesFolderRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\ProvisionEmail\ProvisionEmailRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\RemoveEmail\RemoveEmailRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\SharedWithTeams\SharedWithTeamsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Tabs\TabsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the channels property of the microsoft.graph.team entity.
*/
class ChannelItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the completeMigration method.
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the doesUserHaveAccess method.
    */
    public function doesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalName(): DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilder {
        return new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the filesFolder property of the microsoft.graph.channel entity.
    */
    public function filesFolder(): FilesFolderRequestBuilder {
        return new FilesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.channel entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messages property of the microsoft.graph.channel entity.
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the provisionEmail method.
    */
    public function provisionEmail(): ProvisionEmailRequestBuilder {
        return new ProvisionEmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeEmail method.
    */
    public function removeEmail(): RemoveEmailRequestBuilder {
        return new RemoveEmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedWithTeams property of the microsoft.graph.channel entity.
    */
    public function sharedWithTeams(): SharedWithTeamsRequestBuilder {
        return new SharedWithTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tabs property of the microsoft.graph.channel entity.
    */
    public function tabs(): TabsRequestBuilder {
        return new TabsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ChannelItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels/{channel%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete the channel.
     * @param ChannelItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ChannelItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a channel. This method supports federation. Only a user who is a member of the shared channel can retrieve channel information.
     * @param ChannelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Channel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ChannelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Channel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of the specified channel.
     * @param Channel $body The request body
     * @param ChannelItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Channel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-patch?view=graph-rest-1.0 Find more info here
    */
    public function patch(Channel $body, ?ChannelItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Channel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete the channel.
     * @param ChannelItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ChannelItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * Retrieve the properties and relationships of a channel. This method supports federation. Only a user who is a member of the shared channel can retrieve channel information.
     * @param ChannelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChannelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of the specified channel.
     * @param Channel $body The request body
     * @param ChannelItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Channel $body, ?ChannelItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return ChannelItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ChannelItemRequestBuilder {
        return new ChannelItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
