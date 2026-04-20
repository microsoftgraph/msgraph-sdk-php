<?php

namespace Microsoft\Graph\Generated\Admin\People\ProfilePropertySettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\People\ProfilePropertySettings\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\People\ProfilePropertySettings\Item\ProfilePropertySettingItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ProfilePropertySetting;
use Microsoft\Graph\Generated\Models\ProfilePropertySettingCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the profilePropertySettings property of the microsoft.graph.peopleAdminSettings entity.
*/
class ProfilePropertySettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profilePropertySettings property of the microsoft.graph.peopleAdminSettings entity.
     * @param string $profilePropertySettingId The unique identifier of profilePropertySetting
     * @return ProfilePropertySettingItemRequestBuilder
    */
    public function byProfilePropertySettingId(string $profilePropertySettingId): ProfilePropertySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePropertySetting%2Did'] = $profilePropertySettingId;
        return new ProfilePropertySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfilePropertySettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/people/profilePropertySettings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of profilePropertySetting objects that define the configuration for user profile properties in an organization. The id property identifies each resource object uniquely.
     * @param ProfilePropertySettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfilePropertySettingCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-list-profilepropertysettings?view=graph-rest-1.0 Find more info here
    */
    public function get(?ProfilePropertySettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfilePropertySettingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new profilePropertySetting object.
     * @param ProfilePropertySetting $body The request body
     * @param ProfilePropertySettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfilePropertySetting|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-post-profilepropertysettings?view=graph-rest-1.0 Find more info here
    */
    public function post(ProfilePropertySetting $body, ?ProfilePropertySettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfilePropertySetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of profilePropertySetting objects that define the configuration for user profile properties in an organization. The id property identifies each resource object uniquely.
     * @param ProfilePropertySettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProfilePropertySettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new profilePropertySetting object.
     * @param ProfilePropertySetting $body The request body
     * @param ProfilePropertySettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProfilePropertySetting $body, ?ProfilePropertySettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProfilePropertySettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProfilePropertySettingsRequestBuilder {
        return new ProfilePropertySettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
