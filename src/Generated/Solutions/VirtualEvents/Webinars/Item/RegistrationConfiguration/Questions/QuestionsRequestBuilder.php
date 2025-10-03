<?php

namespace Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\Questions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\VirtualEventRegistrationQuestionBase;
use Microsoft\\Graph\\Generated\Models\VirtualEventRegistrationQuestionBaseCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\Questions\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\Questions\Item\VirtualEventRegistrationQuestionBaseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the questions property of the microsoft.graph.virtualEventRegistrationConfiguration entity.
*/
class QuestionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the questions property of the microsoft.graph.virtualEventRegistrationConfiguration entity.
     * @param string $virtualEventRegistrationQuestionBaseId The unique identifier of virtualEventRegistrationQuestionBase
     * @return VirtualEventRegistrationQuestionBaseItemRequestBuilder
    */
    public function byVirtualEventRegistrationQuestionBaseId(string $virtualEventRegistrationQuestionBaseId): VirtualEventRegistrationQuestionBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['virtualEventRegistrationQuestionBase%2Did'] = $virtualEventRegistrationQuestionBaseId;
        return new VirtualEventRegistrationQuestionBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new QuestionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars/{virtualEventWebinar%2Did}/registrationConfiguration/questions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of all registration questions for a webinar. The list can include either predefined registration questions or custom registration questions.
     * @param QuestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventRegistrationQuestionBaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventregistrationconfiguration-list-questions?view=graph-rest-1.0 Find more info here
    */
    public function get(?QuestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventRegistrationQuestionBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a registration question for a webinar. You can create either a predefined registration question or a custom registration question.
     * @param VirtualEventRegistrationQuestionBase $body The request body
     * @param QuestionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventRegistrationQuestionBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventregistrationconfiguration-post-questions?view=graph-rest-1.0 Find more info here
    */
    public function post(VirtualEventRegistrationQuestionBase $body, ?QuestionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventRegistrationQuestionBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of all registration questions for a webinar. The list can include either predefined registration questions or custom registration questions.
     * @param QuestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?QuestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a registration question for a webinar. You can create either a predefined registration question or a custom registration question.
     * @param VirtualEventRegistrationQuestionBase $body The request body
     * @param QuestionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VirtualEventRegistrationQuestionBase $body, ?QuestionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return QuestionsRequestBuilder
    */
    public function withUrl(string $rawUrl): QuestionsRequestBuilder {
        return new QuestionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
