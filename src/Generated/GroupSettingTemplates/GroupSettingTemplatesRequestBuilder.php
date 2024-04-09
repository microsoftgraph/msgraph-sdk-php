<?php

namespace Microsoft\Graph\Generated\GroupSettingTemplates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\GroupSettingTemplates\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\GetAvailableExtensionProperties\GetAvailableExtensionPropertiesRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\GetByIds\GetByIdsRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\Item\GroupSettingTemplateItemRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\GroupSettingTemplate;
use Microsoft\Graph\Generated\Models\GroupSettingTemplateCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of groupSettingTemplate entities.
*/
class GroupSettingTemplatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Provides operations to manage the collection of groupSettingTemplate entities.
     * @param string $groupSettingTemplateId The unique identifier of groupSettingTemplate
     * @return GroupSettingTemplateItemRequestBuilder
    */
    public function byGroupSettingTemplateId(string $groupSettingTemplateId): GroupSettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSettingTemplate%2Did'] = $groupSettingTemplateId;
        return new GroupSettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupSettingTemplatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groupSettingTemplates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Group setting templates represents a set of templates from which group settings may be created and used within a tenant. This operation retrieves the list of available groupSettingTemplates objects.
     * @param GroupSettingTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupSettingTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/groupsettingtemplate-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?GroupSettingTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupSettingTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add new entity to groupSettingTemplates
     * @param GroupSettingTemplate $body The request body
     * @param GroupSettingTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupSettingTemplate|null>
     * @throws Exception
    */
    public function post(GroupSettingTemplate $body, ?GroupSettingTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupSettingTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Group setting templates represents a set of templates from which group settings may be created and used within a tenant. This operation retrieves the list of available groupSettingTemplates objects.
     * @param GroupSettingTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupSettingTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add new entity to groupSettingTemplates
     * @param GroupSettingTemplate $body The request body
     * @param GroupSettingTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GroupSettingTemplate $body, ?GroupSettingTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupSettingTemplatesRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupSettingTemplatesRequestBuilder {
        return new GroupSettingTemplatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
