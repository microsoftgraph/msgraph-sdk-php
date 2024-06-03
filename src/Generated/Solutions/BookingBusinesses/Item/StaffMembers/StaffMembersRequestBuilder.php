<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\BookingStaffMemberBase;
use Microsoft\Graph\Generated\Models\BookingStaffMemberBaseCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\Item\BookingStaffMemberBaseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
*/
class StaffMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
     * @param string $bookingStaffMemberBaseId The unique identifier of bookingStaffMemberBase
     * @return BookingStaffMemberBaseItemRequestBuilder
    */
    public function byBookingStaffMemberBaseId(string $bookingStaffMemberBaseId): BookingStaffMemberBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingStaffMemberBase%2Did'] = $bookingStaffMemberBaseId;
        return new BookingStaffMemberBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new StaffMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}/staffMembers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of bookingStaffMember objects in the specified bookingBusiness.
     * @param StaffMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingStaffMemberBaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-list-staffmembers?view=graph-rest-1.0 Find more info here
    */
    public function get(?StaffMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingStaffMemberBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new bookingStaffMember in the specified bookingBusiness.
     * @param BookingStaffMemberBase $body The request body
     * @param StaffMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingStaffMemberBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-post-staffmembers?view=graph-rest-1.0 Find more info here
    */
    public function post(BookingStaffMemberBase $body, ?StaffMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingStaffMemberBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of bookingStaffMember objects in the specified bookingBusiness.
     * @param StaffMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?StaffMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new bookingStaffMember in the specified bookingBusiness.
     * @param BookingStaffMemberBase $body The request body
     * @param StaffMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BookingStaffMemberBase $body, ?StaffMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StaffMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): StaffMembersRequestBuilder {
        return new StaffMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
