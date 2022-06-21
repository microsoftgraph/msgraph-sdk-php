<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Team\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\AllChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemTeamAllChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Channels\Item\ChannelItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemTeamChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\EscapedClone\CloneRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\IncomingChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphGeneratedGroupsItemTeamIncomingChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Operations\Item\TeamsAsyncOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\PrimaryChannel\PrimaryChannelRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Schedule\ScheduleRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Template\TemplateRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Team;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TeamRequestBuilder 
{
    /**
     * The allChannels property
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The archive property
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The channels property
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The completeMigration property
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The clone property
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The group property
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incomingChannels property
    */
    public function incomingChannels(): IncomingChannelsRequestBuilder {
        return new IncomingChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The installedApps property
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The primaryChannel property
    */
    public function primaryChannel(): PrimaryChannelRequestBuilder {
        return new PrimaryChannelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The schedule property
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendActivityNotification property
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The template property
    */
    public function template(): TemplateRequestBuilder {
        return new TemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unarchive property
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.allChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemTeamAllChannelsItemChannelItemRequestBuilder
    */
    public function allChannelsById(string $id): MicrosoftGraphGeneratedGroupsItemTeamAllChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemTeamAllChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.channels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemTeamChannelsItemChannelItemRequestBuilder
    */
    public function channelsById(string $id): MicrosoftGraphGeneratedGroupsItemTeamChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemTeamChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/team{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property team for groups
     * @param TeamRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?TeamRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The team associated with this group.
     * @param TeamRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?TeamRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property team in groups
     * @param Team $body 
     * @param TeamRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Team $body, ?TeamRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property team for groups
     * @param TeamRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?TeamRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The team associated with this group.
     * @param TeamRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?TeamRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Team::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.incomingChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedGroupsItemTeamIncomingChannelsItemChannelItemRequestBuilder
    */
    public function incomingChannelsById(string $id): MicrosoftGraphGeneratedGroupsItemTeamIncomingChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphGeneratedGroupsItemTeamIncomingChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.installedApps.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.members.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.team.operations.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation%2Did'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property team in groups
     * @param Team $body 
     * @param TeamRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Team $body, ?TeamRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
