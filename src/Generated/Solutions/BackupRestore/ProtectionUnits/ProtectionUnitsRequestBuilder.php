<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\ProtectionUnitBaseCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\GraphDriveProtectionUnit\GraphDriveProtectionUnitRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\GraphMailboxProtectionUnit\GraphMailboxProtectionUnitRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\GraphSiteProtectionUnit\GraphSiteProtectionUnitRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ProtectionUnits\Item\ProtectionUnitBaseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the protectionUnits property of the microsoft.graph.backupRestoreRoot entity.
*/
class ProtectionUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to driveProtectionUnit.
    */
    public function graphDriveProtectionUnit(): GraphDriveProtectionUnitRequestBuilder {
        return new GraphDriveProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to mailboxProtectionUnit.
    */
    public function graphMailboxProtectionUnit(): GraphMailboxProtectionUnitRequestBuilder {
        return new GraphMailboxProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to siteProtectionUnit.
    */
    public function graphSiteProtectionUnit(): GraphSiteProtectionUnitRequestBuilder {
        return new GraphSiteProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the protectionUnits property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $protectionUnitBaseId The unique identifier of protectionUnitBase
     * @return ProtectionUnitBaseItemRequestBuilder
    */
    public function byProtectionUnitBaseId(string $protectionUnitBaseId): ProtectionUnitBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['protectionUnitBase%2Did'] = $protectionUnitBaseId;
        return new ProtectionUnitBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProtectionUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/protectionUnits{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of a protectionUnitBase object.
     * @param ProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProtectionUnitBaseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProtectionUnitBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of a protectionUnitBase object.
     * @param ProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProtectionUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProtectionUnitsRequestBuilder {
        return new ProtectionUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
