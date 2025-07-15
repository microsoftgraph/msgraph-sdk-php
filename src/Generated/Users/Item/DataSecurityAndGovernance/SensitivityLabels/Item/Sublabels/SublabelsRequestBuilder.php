<?php

namespace Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SensitivityLabel;
use Microsoft\Graph\Generated\Models\SensitivityLabelCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\ComputeInheritanceWithLabelIdsWithLocaleWithContentFormats\ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\ComputeRightsAndInheritance\ComputeRightsAndInheritanceRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\Item\SensitivityLabelItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sublabels property of the microsoft.graph.sensitivityLabel entity.
*/
class SublabelsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the computeRightsAndInheritance method.
    */
    public function computeRightsAndInheritance(): ComputeRightsAndInheritanceRequestBuilder {
        return new ComputeRightsAndInheritanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sublabels property of the microsoft.graph.sensitivityLabel entity.
     * @param string $sensitivityLabelId1 The unique identifier of sensitivityLabel
     * @return SensitivityLabelItemRequestBuilder
    */
    public function bySensitivityLabelId1(string $sensitivityLabelId1): SensitivityLabelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensitivityLabel%2Did1'] = $sensitivityLabelId1;
        return new SensitivityLabelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the computeInheritance method.
     * @param string $contentFormats Usage: contentFormats={contentFormats}
     * @param string $labelIds Usage: labelIds={labelIds}
     * @param string $locale Usage: locale='{locale}'
     * @return ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder
    */
    public function computeInheritanceWithLabelIdsWithLocaleWithContentFormats(string $contentFormats, string $labelIds, string $locale): ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder {
        return new ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder($this->pathParameters, $this->requestAdapter, $contentFormats, $labelIds, $locale);
    }

    /**
     * Instantiates a new SublabelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/dataSecurityAndGovernance/sensitivityLabels/{sensitivityLabel%2Did}/sublabels{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get sublabels from users
     * @param SublabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensitivityLabelCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SublabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sublabels for users
     * @param SensitivityLabel $body The request body
     * @param SublabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensitivityLabel|null>
     * @throws Exception
    */
    public function post(SensitivityLabel $body, ?SublabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get sublabels from users
     * @param SublabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SublabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sublabels for users
     * @param SensitivityLabel $body The request body
     * @param SublabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SensitivityLabel $body, ?SublabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SublabelsRequestBuilder
    */
    public function withUrl(string $rawUrl): SublabelsRequestBuilder {
        return new SublabelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
