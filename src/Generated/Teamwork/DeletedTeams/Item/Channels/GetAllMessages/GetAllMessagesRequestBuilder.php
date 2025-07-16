<?php

namespace Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\Channels\GetAllMessages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAllMessages method.
*/
class GetAllMessagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAllMessagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/deletedTeams/{deletedTeam%2Did}/channels/getAllMessages(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top,model*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve messages across all channels in a team, including text, audio, and video conversations. To learn more about how to use the Microsoft Teams export APIs to export content, see Export content with the Microsoft Teams export APIs.
     * @param GetAllMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAllMessagesGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-getallmessages?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetAllMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetAllMessagesGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve messages across all channels in a team, including text, audio, and video conversations. To learn more about how to use the Microsoft Teams export APIs to export content, see Export content with the Microsoft Teams export APIs.
     * @param GetAllMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetAllMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetAllMessagesRequestBuilder
    */
    public function withUrl(string $rawUrl): GetAllMessagesRequestBuilder {
        return new GetAllMessagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
