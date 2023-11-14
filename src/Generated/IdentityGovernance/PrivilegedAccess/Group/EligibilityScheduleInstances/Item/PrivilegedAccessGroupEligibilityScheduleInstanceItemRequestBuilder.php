<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupEligibilityScheduleInstance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the eligibilityScheduleInstances property of the microsoft.graph.privilegedAccessGroup entity.
*/
class PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the group property of the microsoft.graph.privilegedAccessGroupEligibilityScheduleInstance entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.privilegedAccessGroupEligibilityScheduleInstance entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/eligibilityScheduleInstances/{privilegedAccessGroupEligibilityScheduleInstance%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property eligibilityScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a privilegedAccessGroupEligibilityScheduleInstance object. This API is available in the following national cloud deployments.
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilityScheduleInstance|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroupeligibilityscheduleinstance-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property eligibilityScheduleInstances in identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleInstance $body The request body
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilityScheduleInstance|null>
     * @throws Exception
    */
    public function patch(PrivilegedAccessGroupEligibilityScheduleInstance $body, ?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property eligibilityScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a privilegedAccessGroupEligibilityScheduleInstance object. This API is available in the following national cloud deployments.
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property eligibilityScheduleInstances in identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleInstance $body The request body
     * @param PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PrivilegedAccessGroupEligibilityScheduleInstance $body, ?PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilder {
        return new PrivilegedAccessGroupEligibilityScheduleInstanceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
