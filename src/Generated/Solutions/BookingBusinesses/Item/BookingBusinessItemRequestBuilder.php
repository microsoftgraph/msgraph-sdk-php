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
     * The appointments property
    */
    public function appointments(): AppointmentsRequestBuilder {
        return new AppointmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customers property
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customQuestions property
    */
    public function customQuestions(): CustomQuestionsRequestBuilder {
        return new CustomQuestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The publish property
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The services property
    */
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The staffMembers property
    */
    public function staffMembers(): StaffMembersRequestBuilder {
        return new StaffMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unpublish property
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.appointments.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder
    */
    public function appointmentsById(string $id): MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment_id'] = $id;
        return new MicrosoftGraphGeneratedSolutionsBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment_id'] = $id;
        return new MicrosoftGraphGeneratedSolutionsBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BookingBusinessItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/solutions/bookingBusinesses/{bookingBusiness_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property bookingBusinesses for solutions
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get bookingBusinesses from solutions
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property bookingBusinesses in solutions
     * @param BookingBusiness $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(BookingBusiness $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.customers.item collection
     * @param string $id Unique identifier of the item
     * @return BookingCustomerBaseItemRequestBuilder
    */
    public function customersById(string $id): BookingCustomerBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomerBase_id'] = $id;
        return new BookingCustomerBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.customQuestions.item collection
     * @param string $id Unique identifier of the item
     * @return BookingCustomQuestionItemRequestBuilder
    */
    public function customQuestionsById(string $id): BookingCustomQuestionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomQuestion_id'] = $id;
        return new BookingCustomQuestionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property bookingBusinesses for solutions
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get bookingBusinesses from solutions
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, BookingBusiness::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property bookingBusinesses in solutions
     * @param BookingBusiness $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(BookingBusiness $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.services.item collection
     * @param string $id Unique identifier of the item
     * @return BookingServiceItemRequestBuilder
    */
    public function servicesById(string $id): BookingServiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingService_id'] = $id;
        return new BookingServiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.solutions.bookingBusinesses.item.staffMembers.item collection
     * @param string $id Unique identifier of the item
     * @return BookingStaffMemberBaseItemRequestBuilder
    */
    public function staffMembersById(string $id): BookingStaffMemberBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingStaffMemberBase_id'] = $id;
        return new BookingStaffMemberBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
