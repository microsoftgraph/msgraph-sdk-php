<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\ExternalColumns\ExternalColumnsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Lists\ListsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\GetByPathWithPath1\TermStores\TermStoresRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Site;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getByPath method.
*/
class GetByPathWithPath1RequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.site entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.site entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.site entity.
    */
    public function contentTypes(): ContentTypesRequestBuilder {
        return new ContentTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdByUser property of the microsoft.graph.baseItem entity.
    */
    public function createdByUser(): CreatedByUserRequestBuilder {
        return new CreatedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.site entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.site entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalColumns property of the microsoft.graph.site entity.
    */
    public function externalColumns(): ExternalColumnsRequestBuilder {
        return new ExternalColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.site entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastModifiedByUser property of the microsoft.graph.baseItem entity.
    */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder {
        return new LastModifiedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lists property of the microsoft.graph.site entity.
    */
    public function lists(): ListsRequestBuilder {
        return new ListsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.site entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.site entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.site entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sites property of the microsoft.graph.site entity.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termStore property of the microsoft.graph.site entity.
    */
    public function termStore(): TermStoreRequestBuilder {
        return new TermStoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termStores property of the microsoft.graph.site entity.
    */
    public function termStores(): TermStoresRequestBuilder {
        return new TermStoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GetByPathWithPath1RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $path1 Usage: path='{path1}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $path1 = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/getByPath(path=\'{path}\')/getByPath(path=\'{path1}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['path1'] = $path1;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getByPath
     * @param GetByPathWithPath1RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Site|null>
     * @throws Exception
    */
    public function get(?GetByPathWithPath1RequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Site::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getByPath
     * @param GetByPathWithPath1RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetByPathWithPath1RequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetByPathWithPath1RequestBuilder
    */
    public function withUrl(string $rawUrl): GetByPathWithPath1RequestBuilder {
        return new GetByPathWithPath1RequestBuilder($rawUrl, $this->requestAdapter);
    }

}
