<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Items\Item\MicrosoftGraphExternalConnectorsAddActivities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the addActivities method.
*/
class MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/connections/{externalConnection%2Did}/items/{externalItem%2Did}/microsoft.graph.externalConnectors.addActivities');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action addActivities
     * @param AddActivitiesPostRequestBody $body The request body
     * @param MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AddActivitiesPostResponse|null>
     * @throws Exception
    */
    public function post(AddActivitiesPostRequestBody $body, ?MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AddActivitiesPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action addActivities
     * @param AddActivitiesPostRequestBody $body The request body
     * @param MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddActivitiesPostRequestBody $body, ?MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilder {
        return new MicrosoftGraphExternalConnectorsAddActivitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
