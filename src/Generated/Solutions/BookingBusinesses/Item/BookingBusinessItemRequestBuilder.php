<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\BookingBusiness;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\AppointmentsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Appointments\Item\BookingAppointmentItemRequestBuilder as MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder as MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\CustomersRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Customers\Item\BookingCustomerBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\CustomQuestionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\Item\BookingCustomQuestionItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\GetStaffAvailability\GetStaffAvailabilityRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\Item\BookingServiceItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Services\ServicesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\Item\BookingStaffMemberBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\StaffMembers\StaffMembersRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

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
    public function getStaffAvailability(): GetStaffAvailabilityRequestBuilder {
        return new GetStaffAvailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the publish method.
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Provides operations to call the unpublish method.
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the appointments property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder
    */
    public function appointmentsById(string $id): MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.bookingBusiness entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BookingBusinessItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property bookingBusinesses for solutions
     * @param BookingBusinessItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
    public function createGetRequestInformation(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * @param BookingBusiness $body 
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
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
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get bookingBusinesses from solutions
     * @param BookingBusinessItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [BookingBusiness::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property bookingBusinesses in solutions
     * @param BookingBusiness $body 
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [BookingBusiness::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
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

}
