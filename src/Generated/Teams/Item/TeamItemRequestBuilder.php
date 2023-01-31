<?php

namespace Microsoft\Graph\Generated\Teams\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Team;
use Microsoft\Graph\Generated\Teams\Item\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\MicrosoftGraphArchive\ArchiveRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\MicrosoftGraphClone\CloneRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\MicrosoftGraphCompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\MicrosoftGraphSendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\MicrosoftGraphUnarchive\UnarchiveRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Operations\Item\TeamsAsyncOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\PrimaryChannelRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\ScheduleRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Tags\Item\TeamworkTagItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Tags\TagsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Template\TemplateRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of team entities.
*/
class TeamItemRequestBuilder 
{
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.team entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incomingChannels property of the microsoft.graph.team entity.
    */
    public function incomingChannels(): IncomingChannelsRequestBuilder {
        return new IncomingChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.team entity.
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.team entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the archive method.
    */
    public function microsoftGraphArchive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clone method.
    */
    public function microsoftGraphClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the completeMigration method.
    */
    public function microsoftGraphCompleteMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendActivityNotification method.
    */
    public function microsoftGraphSendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unarchive method.
    */
    public function microsoftGraphUnarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.team entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.team entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the primaryChannel property of the microsoft.graph.team entity.
    */
    public function primaryChannel(): PrimaryChannelRequestBuilder {
        return new PrimaryChannelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the schedule property of the microsoft.graph.team entity.
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tags property of the microsoft.graph.team entity.
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the template property of the microsoft.graph.team entity.
    */
    public function template(): TemplateRequestBuilder {
        return new TemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Teams\Item\AllChannels\Item\ChannelItemRequestBuilder
    */
    public function allChannelsById(string $id): \Microsoft\Graph\Generated\Teams\Item\AllChannels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Teams\Item\AllChannels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Teams\Item\Channels\Item\ChannelItemRequestBuilder
    */
    public function channelsById(string $id): \Microsoft\Graph\Generated\Teams\Item\Channels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Teams\Item\Channels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $teamId key: id of team
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $teamId = null) {
        $this->urlTemplate = '{+baseurl}/teams/{team%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['teamId'] = $teamId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete entity from teams
     * @param TeamItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?TeamItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties and relationships of the specified team.
     * @param TeamItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/team-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TeamItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the incomingChannels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Teams\Item\IncomingChannels\Item\ChannelItemRequestBuilder
    */
    public function incomingChannelsById(string $id): \Microsoft\Graph\Generated\Teams\Item\IncomingChannels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Teams\Item\IncomingChannels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the members property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation%2Did'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of the specified team.
     * @param TeamItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/team-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Team $body, ?TeamItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the tags property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamworkTagItemRequestBuilder
    */
    public function tagsById(string $id): TeamworkTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkTag%2Did'] = $id;
        return new TeamworkTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from teams
     * @param TeamItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TeamItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of the specified team.
     * @param TeamItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the properties of the specified team.
     * @param TeamItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Team $body, ?TeamItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
