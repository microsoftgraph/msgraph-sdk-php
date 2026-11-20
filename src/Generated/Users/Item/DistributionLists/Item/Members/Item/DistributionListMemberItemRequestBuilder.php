<?php

namespace Microsoft\Graph\Generated\Users\Item\DistributionLists\Item\Members\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DistributionListMember;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\DistributionLists\Item\Members\Item\Contact\ContactRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the members property of the microsoft.graph.distributionList entity.
*/
class DistributionListMemberItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the contact property of the microsoft.graph.distributionListMember entity.
    */
    public function contact(): ContactRequestBuilder {
        return new ContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DistributionListMemberItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/distributionLists/{distributionList%2Did}/members/{distributionListMember%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The members of the distribution list. Not returned by default; use $expand=members to include. Read-only.
     * @param DistributionListMemberItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DistributionListMember|null>
     * @throws Exception
    */
    public function get(?DistributionListMemberItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DistributionListMember::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The members of the distribution list. Not returned by default; use $expand=members to include. Read-only.
     * @param DistributionListMemberItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DistributionListMemberItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DistributionListMemberItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DistributionListMemberItemRequestBuilder {
        return new DistributionListMemberItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
