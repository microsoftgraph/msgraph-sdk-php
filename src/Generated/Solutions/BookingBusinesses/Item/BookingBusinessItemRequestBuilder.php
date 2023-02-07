<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\BookingBusiness;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\AppointmentsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\CustomersRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\Item\BookingCustomerBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\CustomQuestionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\Item\BookingCustomQuestionItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\MicrosoftGraphGetStaffAvailability\MicrosoftGraphGetStaffAvailabilityRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\MicrosoftGraphPublish\MicrosoftGraphPublishRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\MicrosoftGraphUnpublish\MicrosoftGraphUnpublishRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\Item\BookingServiceItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\ServicesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\Item\BookingStaffMemberBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\StaffMembersRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the bookingBusinesses property of the microsoft.graph.solutionsRoot entity.
*/
class BookingBusinessItemRequestBuilder 
{
    /**
     * Provides operations to manage the appointments property of the microsoft.graph.bookingBusiness entity.
    */
    public function appointments(): AppointmentsRequestBuilder {
        return new AppointmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.bookingBusiness entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customers property of the microsoft.graph.bookingBusiness entity.
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customQuestions property of the microsoft.graph.bookingBusiness entity.
    */
    public function customQuestions(): CustomQuestionsRequestBuilder {
        return new CustomQuestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getStaffAvailability method.
    */
    public function microsoftGraphGetStaffAvailability(): MicrosoftGraphGetStaffAvailabilityRequestBuilder {
        return new MicrosoftGraphGetStaffAvailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the publish method.
    */
    public function microsoftGraphPublish(): MicrosoftGraphPublishRequestBuilder {
        return new MicrosoftGraphPublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unpublish method.
    */
    public function microsoftGraphUnpublish(): MicrosoftGraphUnpublishRequestBuilder {
        return new MicrosoftGraphUnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the services property of the microsoft.graph.bookingBusiness entity.
    */
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
    */
    public function staffMembers(): StaffMembersRequestBuilder {
        return new StaffMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the appointments property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\Item\BookingAppointmentItemRequestBuilder
    */
    public function appointmentsById(string $id): \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\Item\BookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\Item\BookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder
    */
    public function calendarViewById(string $id): \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BookingBusinessItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the customers property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return BookingCustomerBaseItemRequestBuilder
    */
    public function customersById(string $id): BookingCustomerBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomerBase%2Did'] = $id;
        return new BookingCustomerBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the customQuestions property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return BookingCustomQuestionItemRequestBuilder
    */
    public function customQuestionsById(string $id): BookingCustomQuestionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomQuestion%2Did'] = $id;
        return new BookingCustomQuestionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property bookingBusinesses for solutions
     * @param BookingBusinessItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get bookingBusinesses from solutions
     * @param BookingBusinessItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [BookingBusiness::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property bookingBusinesses in solutions
     * @param BookingBusiness $body The request body
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [BookingBusiness::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the services property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return BookingServiceItemRequestBuilder
    */
    public function servicesById(string $id): BookingServiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingService%2Did'] = $id;
        return new BookingServiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return BookingStaffMemberBaseItemRequestBuilder
    */
    public function staffMembersById(string $id): BookingStaffMemberBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingStaffMemberBase%2Did'] = $id;
        return new BookingStaffMemberBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property bookingBusinesses for solutions
     * @param BookingBusinessItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get bookingBusinesses from solutions
     * @param BookingBusinessItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property bookingBusinesses in solutions
     * @param BookingBusiness $body The request body
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
