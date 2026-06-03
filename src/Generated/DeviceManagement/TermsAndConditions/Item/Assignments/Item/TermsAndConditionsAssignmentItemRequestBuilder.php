<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TermsAndConditionsAssignment;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.termsAndConditions entity.
*/
class TermsAndConditionsAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TermsAndConditionsAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/termsAndConditions/{termsAndConditions%2Did}/assignments/{termsAndConditionsAssignment%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param TermsAndConditionsAssignmentItemRequestBuilderDeleteReq_f11939ce|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TermsAndConditionsAssignmentItemRequestBuilderDeleteReq_f11939ce $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of assignments for this T&C policy.
     * @param TermsAndConditionsAssignmentItemRequestBuilderGetReques_7a9821e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TermsAndConditionsAssignment|null>
     * @throws Exception
    */
    public function get(?TermsAndConditionsAssignmentItemRequestBuilderGetReques_7a9821e0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TermsAndConditionsAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignments in deviceManagement
     * @param TermsAndConditionsAssignment $body The request body
     * @param TermsAndConditionsAssignmentItemRequestBuilderPatchRequ_c19e623c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TermsAndConditionsAssignment|null>
     * @throws Exception
    */
    public function patch(TermsAndConditionsAssignment $body, ?TermsAndConditionsAssignmentItemRequestBuilderPatchRequ_c19e623c $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TermsAndConditionsAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param TermsAndConditionsAssignmentItemRequestBuilderDeleteReq_f11939ce|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TermsAndConditionsAssignmentItemRequestBuilderDeleteReq_f11939ce $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The list of assignments for this T&C policy.
     * @param TermsAndConditionsAssignmentItemRequestBuilderGetReques_7a9821e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TermsAndConditionsAssignmentItemRequestBuilderGetReques_7a9821e0 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignments in deviceManagement
     * @param TermsAndConditionsAssignment $body The request body
     * @param TermsAndConditionsAssignmentItemRequestBuilderPatchRequ_c19e623c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TermsAndConditionsAssignment $body, ?TermsAndConditionsAssignmentItemRequestBuilderPatchRequ_c19e623c $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return TermsAndConditionsAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TermsAndConditionsAssignmentItemRequestBuilder {
        return new TermsAndConditionsAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
