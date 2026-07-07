<?php

namespace Microsoft\Graph\Generated\Admin\Teams\Policy\UserAssignments\MicrosoftGraphTeamsAdministrationAssign;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the assign method.
*/
class MicrosoftGraphTeamsAdministrationAssignRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTeamsAdministrationAssignRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/policy/userAssignments/microsoft.graph.teamsAdministration.assign');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Assign a Teams policy to a user using the user ID, policy type, and policy ID.
     * @param AssignPostRequestBody $body The request body
     * @param MicrosoftGraphTeamsAdministrationAssignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsadministration-teamspolicyuserassignment-assign?view=graph-rest-1.0 Find more info here
    */
    public function post(AssignPostRequestBody $body, ?MicrosoftGraphTeamsAdministrationAssignRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Assign a Teams policy to a user using the user ID, policy type, and policy ID.
     * @param AssignPostRequestBody $body The request body
     * @param MicrosoftGraphTeamsAdministrationAssignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AssignPostRequestBody $body, ?MicrosoftGraphTeamsAdministrationAssignRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphTeamsAdministrationAssignRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTeamsAdministrationAssignRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationAssignRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
