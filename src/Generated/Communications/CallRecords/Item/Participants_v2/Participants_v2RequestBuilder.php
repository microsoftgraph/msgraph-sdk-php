<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\Item\Participants_v2;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\CallRecords\Item\Participants_v2\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\CallRecords\Item\Participants_v2\Item\ParticipantItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CallRecords\Participant;
use Microsoft\Graph\Generated\Models\CallRecords\ParticipantCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the participants_v2 property of the microsoft.graph.callRecords.callRecord entity.
*/
class Participants_v2RequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the participants_v2 property of the microsoft.graph.callRecords.callRecord entity.
     * @param string $participantId The unique identifier of participant
     * @return ParticipantItemRequestBuilder
    */
    public function byParticipantId(string $participantId): ParticipantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['participant%2Did'] = $participantId;
        return new ParticipantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Participants_v2RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/callRecords/{callRecord%2Did}/participants_v2{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of participant objects associated with a callRecord.
     * @param Participants_v2RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ParticipantCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/callrecords-callrecord-list-participants_v2?view=graph-rest-1.0 Find more info here
    */
    public function get(?Participants_v2RequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ParticipantCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to participants_v2 for communications
     * @param Participant $body The request body
     * @param Participants_v2RequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Participant|null>
     * @throws Exception
    */
    public function post(Participant $body, ?Participants_v2RequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Participant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of participant objects associated with a callRecord.
     * @param Participants_v2RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Participants_v2RequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to participants_v2 for communications
     * @param Participant $body The request body
     * @param Participants_v2RequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Participant $body, ?Participants_v2RequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Participants_v2RequestBuilder
    */
    public function withUrl(string $rawUrl): Participants_v2RequestBuilder {
        return new Participants_v2RequestBuilder($rawUrl, $this->requestAdapter);
    }

}
