<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackageCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the incompatibleAccessPackages property of the microsoft.graph.accessPackage entity.
*/
class IncompatibleAccessPackagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of identityGovernance entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Generated.identityGovernance.entitlementManagement.accessPackages.item.incompatibleAccessPackages.item collection
     * @param string $accessPackageId1 Unique identifier of the item
     * @return AccessPackageItemRequestBuilder
    */
    public function byAccessPackageId1(string $accessPackageId1): AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did1'] = $accessPackageId1;
        return new AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncompatibleAccessPackagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}/incompatibleAccessPackages{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of the accessPackage objects that have been marked as incompatible on an accessPackage.  
     * @param IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/accesspackage-list-incompatibleaccesspackages?view=graph-rest-1.0 Find more info here
    */
    public function get(?IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a list of the accessPackage objects that have been marked as incompatible on an accessPackage.  
     * @param IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

}
