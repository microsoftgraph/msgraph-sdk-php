<?php

namespace Microsoft\Graph\Generated\Teamwork\DeletedTeams;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeletedTeam;
use Microsoft\Graph\Generated\Models\DeletedTeamCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teamwork\DeletedTeams\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\DeletedTeams\GetAllMessages\GetAllMessagesRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\DeletedTeamItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deletedTeams property of the microsoft.graph.teamwork entity.
*/
class DeletedTeamsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllMessages method.
    */
    public function getAllMessages(): GetAllMessagesRequestBuilder {
        return new GetAllMessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deletedTeams property of the microsoft.graph.teamwork entity.
     * @param string $deletedTeamId The unique identifier of deletedTeam
     * @return DeletedTeamItemRequestBuilder
    */
    public function byDeletedTeamId(string $deletedTeamId): DeletedTeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deletedTeam%2Did'] = $deletedTeamId;
        return new DeletedTeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeletedTeamsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/deletedTeams{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the deletedTeam objects and their properties.
     * @param DeletedTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeletedTeamCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamwork-list-deletedteams?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeletedTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeletedTeamCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deletedTeams for teamwork
     * @param DeletedTeam $body The request body
     * @param DeletedTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeletedTeam|null>
     * @throws Exception
    */
    public function post(DeletedTeam $body, ?DeletedTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeletedTeam::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the deletedTeam objects and their properties.
     * @param DeletedTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeletedTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deletedTeams for teamwork
     * @param DeletedTeam $body The request body
     * @param DeletedTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeletedTeam $body, ?DeletedTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeletedTeamsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeletedTeamsRequestBuilder {
        return new DeletedTeamsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
