<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\GetApplicablePolicyRequirements;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getApplicablePolicyRequirements method.
*/
class GetApplicablePolicyRequirementsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetApplicablePolicyRequirementsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}/getApplicablePolicyRequirements');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * In Microsoft Entra entitlement management, this action retrieves a list of accessPackageAssignmentRequestRequirements objects that the currently signed-in user can use to create an accessPackageAssignmentRequest.  Each requirement object corresponds to an access package assignment policy that the currently signed-in user is allowed to request an assignment for.
     * @param GetApplicablePolicyRequirementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetApplicablePolicyRequirementsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackage-getapplicablepolicyrequirements?view=graph-rest-1.0 Find more info here
    */
    public function post(?GetApplicablePolicyRequirementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetApplicablePolicyRequirementsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In Microsoft Entra entitlement management, this action retrieves a list of accessPackageAssignmentRequestRequirements objects that the currently signed-in user can use to create an accessPackageAssignmentRequest.  Each requirement object corresponds to an access package assignment policy that the currently signed-in user is allowed to request an assignment for.
     * @param GetApplicablePolicyRequirementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?GetApplicablePolicyRequirementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return GetApplicablePolicyRequirementsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetApplicablePolicyRequirementsRequestBuilder {
        return new GetApplicablePolicyRequirementsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
