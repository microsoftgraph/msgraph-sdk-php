<?php

namespace Microsoft\Graph\Generated\Users\Item\CloudPCs\Item\RetrieveCloudPcLaunchDetail;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CloudPcLaunchDetail;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveCloudPcLaunchDetail method.
*/
class RetrieveCloudPcLaunchDetailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveCloudPcLaunchDetailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/cloudPCs/{cloudPC%2Did}/retrieveCloudPcLaunchDetail()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the cloudPcLaunchDetail for a specific cloudPC that belongs to the current signed-in user.
     * @param RetrieveCloudPcLaunchDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcLaunchDetail|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-retrievecloudpclaunchdetail?view=graph-rest-1.0 Find more info here
    */
    public function get(?RetrieveCloudPcLaunchDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcLaunchDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the cloudPcLaunchDetail for a specific cloudPC that belongs to the current signed-in user.
     * @param RetrieveCloudPcLaunchDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveCloudPcLaunchDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveCloudPcLaunchDetailRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveCloudPcLaunchDetailRequestBuilder {
        return new RetrieveCloudPcLaunchDetailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
