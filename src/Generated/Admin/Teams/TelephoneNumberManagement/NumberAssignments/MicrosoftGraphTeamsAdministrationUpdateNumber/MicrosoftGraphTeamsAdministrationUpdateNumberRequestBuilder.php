<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationUpdateNumber;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updateNumber method.
*/
class MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/telephoneNumberManagement/numberAssignments/microsoft.graph.teamsAdministration.updateNumber');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to update an existing number with optional attributes. Currently supported attributes are locationId, networkSiteId, and reverseNumberLookupOptions.
     * @param UpdateNumberPostRequestBody $body The request body
     * @param MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsadministration-numberassignment-updatenumber?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdateNumberPostRequestBody $body, ?MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method is used to update an existing number with optional attributes. Currently supported attributes are locationId, networkSiteId, and reverseNumberLookupOptions.
     * @param UpdateNumberPostRequestBody $body The request body
     * @param MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateNumberPostRequestBody $body, ?MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationUpdateNumberRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
