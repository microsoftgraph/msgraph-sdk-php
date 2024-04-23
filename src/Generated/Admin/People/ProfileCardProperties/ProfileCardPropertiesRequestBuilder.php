<?php

namespace Microsoft\Graph\Generated\Admin\People\ProfileCardProperties;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\People\ProfileCardProperties\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\People\ProfileCardProperties\Item\ProfileCardPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ProfileCardProperty;
use Microsoft\Graph\Generated\Models\ProfileCardPropertyCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the profileCardProperties property of the microsoft.graph.peopleAdminSettings entity.
*/
class ProfileCardPropertiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profileCardProperties property of the microsoft.graph.peopleAdminSettings entity.
     * @param string $profileCardPropertyId The unique identifier of profileCardProperty
     * @return ProfileCardPropertyItemRequestBuilder
    */
    public function byProfileCardPropertyId(string $profileCardPropertyId): ProfileCardPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profileCardProperty%2Did'] = $profileCardPropertyId;
        return new ProfileCardPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfileCardPropertiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/people/profileCardProperties{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @param ProfileCardPropertiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfileCardPropertyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProfileCardPropertiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfileCardPropertyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to profileCardProperties for admin
     * @param ProfileCardProperty $body The request body
     * @param ProfileCardPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfileCardProperty|null>
     * @throws Exception
    */
    public function post(ProfileCardProperty $body, ?ProfileCardPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfileCardProperty::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card.
     * @param ProfileCardPropertiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProfileCardPropertiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to profileCardProperties for admin
     * @param ProfileCardProperty $body The request body
     * @param ProfileCardPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProfileCardProperty $body, ?ProfileCardPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProfileCardPropertiesRequestBuilder
    */
    public function withUrl(string $rawUrl): ProfileCardPropertiesRequestBuilder {
        return new ProfileCardPropertiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
