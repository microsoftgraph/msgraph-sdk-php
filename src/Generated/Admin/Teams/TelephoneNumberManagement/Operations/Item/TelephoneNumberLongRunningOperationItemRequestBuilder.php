<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\Operations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamsAdministration\TelephoneNumberLongRunningOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the operations property of the microsoft.graph.teamsAdministration.telephoneNumberManagementRoot entity.
*/
class TelephoneNumberLongRunningOperationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TelephoneNumberLongRunningOperationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/teams/telephoneNumberManagement/operations/{telephoneNumberLongRunningOperation%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property operations for admin
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderDe_cf339917|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TelephoneNumberLongRunningOperationItemRequestBuilderDe_cf339917 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of microsoft.graph.teamsAdministration.telephoneNumberLongRunningOperation object. This method is used to query the status of an assign or unassign number action using Graph API. This link is returned in the Location response header found in assign or unassign operation result.
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TelephoneNumberLongRunningOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamsadministration-telephonenumberlongrunningoperation-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TelephoneNumberLongRunningOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property operations in admin
     * @param TelephoneNumberLongRunningOperation $body The request body
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderPa_f14cbd97|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TelephoneNumberLongRunningOperation|null>
     * @throws Exception
    */
    public function patch(TelephoneNumberLongRunningOperation $body, ?TelephoneNumberLongRunningOperationItemRequestBuilderPa_f14cbd97 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TelephoneNumberLongRunningOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property operations for admin
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderDe_cf339917|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TelephoneNumberLongRunningOperationItemRequestBuilderDe_cf339917 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of microsoft.graph.teamsAdministration.telephoneNumberLongRunningOperation object. This method is used to query the status of an assign or unassign number action using Graph API. This link is returned in the Location response header found in assign or unassign operation result.
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TelephoneNumberLongRunningOperationItemRequestBuilderGe_b0fdba2d $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property operations in admin
     * @param TelephoneNumberLongRunningOperation $body The request body
     * @param TelephoneNumberLongRunningOperationItemRequestBuilderPa_f14cbd97|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TelephoneNumberLongRunningOperation $body, ?TelephoneNumberLongRunningOperationItemRequestBuilderPa_f14cbd97 $requestConfiguration = null): RequestInformation {
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
     * @return TelephoneNumberLongRunningOperationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TelephoneNumberLongRunningOperationItemRequestBuilder {
        return new TelephoneNumberLongRunningOperationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
