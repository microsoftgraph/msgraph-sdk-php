<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Team\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\EscapedClone\CloneRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\PrimaryChannel\PrimaryChannelRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Schedule\ScheduleRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Tags\TagsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Template\TemplateRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Team;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the team property of the microsoft.graph.group entity.
*/
class TeamRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the archive method.
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the completeMigration method.
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clone method.
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the operations property of the microsoft.graph.team entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.team entity.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Provides operations to manage the schedule property of the microsoft.graph.team entity.
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendActivityNotification method.
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the unarchive method.
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TeamRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/team{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property team for groups
     * @param TeamRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TeamRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The team associated with this group.
     * @param TeamRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Team|null>
     * @throws Exception
    */
    public function get(?TeamRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new team under a group. In order to create a team, the group must have a least one owner. If the creation of the team call is delayed, you can retry the call up to three times before you have to wait for 15 minutes due to a propagation delay. If the group was created less than 15 minutes ago, the call might fail with a 404 error code due to replication delays. If the group was created less than 15 minutes ago, it's possible for a call to create a team to fail with a 404 error code, due to ongoing replication delays.The recommended pattern is to retry the Create team call three times, with a 10 second delay between calls.
     * @param Team $body The request body
     * @param TeamRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Team|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/team-put-teams?view=graph-rest-1.0 Find more info here
    */
    public function put(Team $body, ?TeamRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property team for groups
     * @param TeamRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TeamRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The team associated with this group.
     * @param TeamRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new team under a group. In order to create a team, the group must have a least one owner. If the creation of the team call is delayed, you can retry the call up to three times before you have to wait for 15 minutes due to a propagation delay. If the group was created less than 15 minutes ago, the call might fail with a 404 error code due to replication delays. If the group was created less than 15 minutes ago, it's possible for a call to create a team to fail with a 404 error code, due to ongoing replication delays.The recommended pattern is to retry the Create team call three times, with a 10 second delay between calls.
     * @param Team $body The request body
     * @param TeamRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(Team $body, ?TeamRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return TeamRequestBuilder
    */
    public function withUrl(string $rawUrl): TeamRequestBuilder {
        return new TeamRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
