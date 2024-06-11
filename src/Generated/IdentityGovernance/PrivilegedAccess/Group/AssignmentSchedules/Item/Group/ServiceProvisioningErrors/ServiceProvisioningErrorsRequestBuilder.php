<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\Item\Group\ServiceProvisioningErrors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentSchedules\Item\Group\ServiceProvisioningErrors\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServiceProvisioningErrorCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /identityGovernance/privilegedAccess/group/assignmentSchedules/{privilegedAccessGroupAssignmentSchedule-id}/group/serviceProvisioningErrors
*/
class ServiceProvisioningErrorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ServiceProvisioningErrorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/assignmentSchedules/{privilegedAccessGroupAssignmentSchedule%2Did}/group/serviceProvisioningErrors{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @param ServiceProvisioningErrorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceProvisioningErrorCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ServiceProvisioningErrorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceProvisioningErrorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Errors published by a federated service describing a nontransient, service-specific error regarding the properties or link from a group object.  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @param ServiceProvisioningErrorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServiceProvisioningErrorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ServiceProvisioningErrorsRequestBuilder
    */
    public function withUrl(string $rawUrl): ServiceProvisioningErrorsRequestBuilder {
        return new ServiceProvisioningErrorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
