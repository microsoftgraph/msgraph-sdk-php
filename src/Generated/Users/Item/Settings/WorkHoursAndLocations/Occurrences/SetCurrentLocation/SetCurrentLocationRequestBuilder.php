<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\WorkHoursAndLocations\Occurrences\SetCurrentLocation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setCurrentLocation method.
*/
class SetCurrentLocationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetCurrentLocationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/settings/workHoursAndLocations/occurrences/setCurrentLocation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update your work location for the current day or current active segment. This action allows you to quickly update your work location without modifying individual occurrences.
     * @param SetCurrentLocationPostRequestBody $body The request body
     * @param SetCurrentLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/workplanoccurrence-setcurrentlocation?view=graph-rest-1.0 Find more info here
    */
    public function post(SetCurrentLocationPostRequestBody $body, ?SetCurrentLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Update your work location for the current day or current active segment. This action allows you to quickly update your work location without modifying individual occurrences.
     * @param SetCurrentLocationPostRequestBody $body The request body
     * @param SetCurrentLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetCurrentLocationPostRequestBody $body, ?SetCurrentLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SetCurrentLocationRequestBuilder
    */
    public function withUrl(string $rawUrl): SetCurrentLocationRequestBuilder {
        return new SetCurrentLocationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
