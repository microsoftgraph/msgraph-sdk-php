<?php

namespace Microsoft\Graph\Generated\Admin\Teams\Policy\MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getPolicyId method.
*/
class MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $name Usage: name='{name}'
     * @param string|null $type Usage: type='{type}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $name = null, ?string $type = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/policy/microsoft.graph.teamsAdministration.getPolicyId(type=\'{type}\',name=\'{name}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['name'] = $name;
            $urlTplParams['type'] = $type;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the policy ID for a given policy name and policy type within Teams administration.
     * @param MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetPolicyIdWithTypeWithNameGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsadministration-teamspolicyassignment-getpolicyid?view=graph-rest-1.0 Find more info here
    */
    public function get(?MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetPolicyIdWithTypeWithNameGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the policy ID for a given policy name and policy type within Teams administration.
     * @param MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilder {
        return new MicrosoftGraphTeamsAdministrationGetPolicyIdWithTypeWithNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
