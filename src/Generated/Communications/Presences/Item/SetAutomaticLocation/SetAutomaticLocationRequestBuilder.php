<?php

namespace Microsoft\Graph\Generated\Communications\Presences\Item\SetAutomaticLocation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setAutomaticLocation method.
*/
class SetAutomaticLocationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetAutomaticLocationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/presences/{presence%2Did}/setAutomaticLocation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update the automatic work location for a user. The automatic layer participates in the standard precedence model: Use this operation from clients or services that automatically detect location (for example, Teams, network and location agents, or OEM docking apps). It doesn't clear manual or scheduled signals.
     * @param SetAutomaticLocationPostRequestBody $body The request body
     * @param SetAutomaticLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/presence-setautomaticlocation?view=graph-rest-1.0 Find more info here
    */
    public function post(SetAutomaticLocationPostRequestBody $body, ?SetAutomaticLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Update the automatic work location for a user. The automatic layer participates in the standard precedence model: Use this operation from clients or services that automatically detect location (for example, Teams, network and location agents, or OEM docking apps). It doesn't clear manual or scheduled signals.
     * @param SetAutomaticLocationPostRequestBody $body The request body
     * @param SetAutomaticLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetAutomaticLocationPostRequestBody $body, ?SetAutomaticLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SetAutomaticLocationRequestBuilder
    */
    public function withUrl(string $rawUrl): SetAutomaticLocationRequestBuilder {
        return new SetAutomaticLocationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
