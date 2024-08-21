<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SiteProtectionUnitCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnits\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnits\Item\SiteProtectionUnitItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteProtectionUnits property of the microsoft.graph.sharePointProtectionPolicy entity.
*/
class SiteProtectionUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnits property of the microsoft.graph.sharePointProtectionPolicy entity.
     * @param string $siteProtectionUnitId The unique identifier of siteProtectionUnit
     * @return SiteProtectionUnitItemRequestBuilder
    */
    public function bySiteProtectionUnitId(string $siteProtectionUnitId): SiteProtectionUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteProtectionUnit%2Did'] = $siteProtectionUnitId;
        return new SiteProtectionUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteProtectionUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointProtectionPolicies/{sharePointProtectionPolicy%2Did}/siteProtectionUnits{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the siteProtectionUnit objects that are associated with a sharePointProtectionPolicy.
     * @param SiteProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteProtectionUnitCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-list-siteprotectionunits?view=graph-rest-1.0 Find more info here
    */
    public function get(?SiteProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteProtectionUnitCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the siteProtectionUnit objects that are associated with a sharePointProtectionPolicy.
     * @param SiteProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteProtectionUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteProtectionUnitsRequestBuilder {
        return new SiteProtectionUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
