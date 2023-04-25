<?php

namespace Microsoft\Graph\Generated\PermissionGrants;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ResourceSpecificPermissionGrant;
use Microsoft\Graph\Generated\Models\ResourceSpecificPermissionGrantCollectionResponse;
use Microsoft\Graph\Generated\PermissionGrants\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\GetAvailableExtensionProperties\GetAvailableExtensionPropertiesRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\GetByIds\GetByIdsRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
*/
class PermissionGrantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAvailableExtensionProperties method.
    */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getByIds method.
    */
    public function getByIds(): GetByIdsRequestBuilder {
        return new GetByIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateProperties method.
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
     * @param string $resourceSpecificPermissionGrantId Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function byResourceSpecificPermissionGrantId(string $resourceSpecificPermissionGrantId): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $resourceSpecificPermissionGrantId;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PermissionGrantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/permissionGrants{?%24search,%24filter,%24orderby,%24select,%24expand}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from permissionGrants
     * @param PermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ResourceSpecificPermissionGrantCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Add new entity to permissionGrants
     * @param ResourceSpecificPermissionGrant $body The request body
     * @param PermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(ResourceSpecificPermissionGrant $body, ?PermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get entities from permissionGrants
     * @param PermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Add new entity to permissionGrants
     * @param ResourceSpecificPermissionGrant $body The request body
     * @param PermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ResourceSpecificPermissionGrant $body, ?PermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
