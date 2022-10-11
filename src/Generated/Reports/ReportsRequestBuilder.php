<?php

namespace Microsoft\Graph\Generated\Reports;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ReportRoot;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\DailyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphGeneratedReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\DailyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphGeneratedReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Generated\Reports\DeviceConfigurationDeviceActivity\DeviceConfigurationDeviceActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\DeviceConfigurationUserActivity\DeviceConfigurationUserActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailActivityCountsWithPeriod\GetEmailActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailActivityUserCountsWithPeriod\GetEmailActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailActivityUserDetailWithDate\GetEmailActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailActivityUserDetailWithPeriod\GetEmailActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailAppUsageAppsUserCountsWithPeriod\GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailAppUsageUserCountsWithPeriod\GetEmailAppUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailAppUsageUserDetailWithDate\GetEmailAppUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailAppUsageUserDetailWithPeriod\GetEmailAppUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetEmailAppUsageVersionsUserCountsWithPeriod\GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetM365AppPlatformUserCountsWithPeriod\GetM365AppPlatformUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetM365AppUserCountsWithPeriod\GetM365AppUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetM365AppUserDetailWithDate\GetM365AppUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetM365AppUserDetailWithPeriod\GetM365AppUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetMailboxUsageDetailWithPeriod\GetMailboxUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetMailboxUsageMailboxCountsWithPeriod\GetMailboxUsageMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetMailboxUsageQuotaStatusMailboxCountsWithPeriod\GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetMailboxUsageStorageWithPeriod\GetMailboxUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActivationCounts\GetOffice365ActivationCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActivationsUserCounts\GetOffice365ActivationsUserCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActivationsUserDetail\GetOffice365ActivationsUserDetailRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActiveUserCountsWithPeriod\GetOffice365ActiveUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActiveUserDetailWithDate\GetOffice365ActiveUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ActiveUserDetailWithPeriod\GetOffice365ActiveUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityCountsWithPeriod\GetOffice365GroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityDetailWithDate\GetOffice365GroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityDetailWithPeriod\GetOffice365GroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityFileCountsWithPeriod\GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityGroupCountsWithPeriod\GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365GroupsActivityStorageWithPeriod\GetOffice365GroupsActivityStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOffice365ServicesUserCountsWithPeriod\GetOffice365ServicesUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveActivityFileCountsWithPeriod\GetOneDriveActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveActivityUserCountsWithPeriod\GetOneDriveActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveActivityUserDetailWithDate\GetOneDriveActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveActivityUserDetailWithPeriod\GetOneDriveActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveUsageAccountCountsWithPeriod\GetOneDriveUsageAccountCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveUsageAccountDetailWithDate\GetOneDriveUsageAccountDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveUsageAccountDetailWithPeriod\GetOneDriveUsageAccountDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveUsageFileCountsWithPeriod\GetOneDriveUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetOneDriveUsageStorageWithPeriod\GetOneDriveUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointActivityFileCountsWithPeriod\GetSharePointActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointActivityPagesWithPeriod\GetSharePointActivityPagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointActivityUserCountsWithPeriod\GetSharePointActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointActivityUserDetailWithDate\GetSharePointActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointActivityUserDetailWithPeriod\GetSharePointActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsageDetailWithDate\GetSharePointSiteUsageDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsageDetailWithPeriod\GetSharePointSiteUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsageFileCountsWithPeriod\GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsagePagesWithPeriod\GetSharePointSiteUsagePagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsageSiteCountsWithPeriod\GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSharePointSiteUsageStorageWithPeriod\GetSharePointSiteUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessActivityCountsWithPeriod\GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessActivityUserCountsWithPeriod\GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessActivityUserDetailWithDate\GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessActivityUserDetailWithPeriod\GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessDeviceUsageUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessDeviceUsageUserDetailWithDate\GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessDeviceUsageUserDetailWithPeriod\GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessOrganizerActivityCountsWithPeriod\GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriod\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessParticipantActivityCountsWithPeriod\GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessParticipantActivityUserCountsWithPeriod\GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsDeviceUsageDistributionUserCountsWithPeriod\GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsDeviceUsageUserCountsWithPeriod\GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsDeviceUsageUserDetailWithDate\GetTeamsDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsDeviceUsageUserDetailWithPeriod\GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsUserActivityCountsWithPeriod\GetTeamsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsUserActivityUserCountsWithPeriod\GetTeamsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsUserActivityUserDetailWithDate\GetTeamsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetTeamsUserActivityUserDetailWithPeriod\GetTeamsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerActivityCountsWithPeriod\GetYammerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerActivityUserCountsWithPeriod\GetYammerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerActivityUserDetailWithDate\GetYammerActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerActivityUserDetailWithPeriod\GetYammerActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerDeviceUsageDistributionUserCountsWithPeriod\GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerDeviceUsageUserCountsWithPeriod\GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerDeviceUsageUserDetailWithDate\GetYammerDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerDeviceUsageUserDetailWithPeriod\GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerGroupsActivityCountsWithPeriod\GetYammerGroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerGroupsActivityDetailWithDate\GetYammerGroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerGroupsActivityDetailWithPeriod\GetYammerGroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\GetYammerGroupsActivityGroupCountsWithPeriod\GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentFailureDetails\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentTopFailures\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentTopFailuresWithPeriod\ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphGeneratedReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\MonthlyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphGeneratedReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\MonthlyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Generated\Reports\Security\SecurityRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Microsoft\Kiota\Abstractions\Types\Date;

class ReportsRequestBuilder 
{
    /**
     * The dailyPrintUsageByPrinter property
    */
    public function dailyPrintUsageByPrinter(): DailyPrintUsageByPrinterRequestBuilder {
        return new DailyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyPrintUsageByUser property
    */
    public function dailyPrintUsageByUser(): DailyPrintUsageByUserRequestBuilder {
        return new DailyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageByPrinter property
    */
    public function monthlyPrintUsageByPrinter(): MonthlyPrintUsageByPrinterRequestBuilder {
        return new MonthlyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageByUser property
    */
    public function monthlyPrintUsageByUser(): MonthlyPrintUsageByUserRequestBuilder {
        return new MonthlyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The security property
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get reports
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update reports
     * @param ReportRoot $body 
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Generated.reports.dailyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): MicrosoftGraphGeneratedReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphGeneratedReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.reports.dailyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): MicrosoftGraphGeneratedReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphGeneratedReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the deviceConfigurationDeviceActivity method.
     * @return DeviceConfigurationDeviceActivityRequestBuilder
    */
    public function deviceConfigurationDeviceActivity(): DeviceConfigurationDeviceActivityRequestBuilder {
        return new DeviceConfigurationDeviceActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the deviceConfigurationUserActivity method.
     * @return DeviceConfigurationUserActivityRequestBuilder
    */
    public function deviceConfigurationUserActivity(): DeviceConfigurationUserActivityRequestBuilder {
        return new DeviceConfigurationUserActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Get reports
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ReportRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEmailActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityCountsWithPeriodRequestBuilder
    */
    public function getEmailActivityCountsWithPeriod(string $period): GetEmailActivityCountsWithPeriodRequestBuilder {
        return new GetEmailActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserCountsWithPeriodRequestBuilder
    */
    public function getEmailActivityUserCountsWithPeriod(string $period): GetEmailActivityUserCountsWithPeriodRequestBuilder {
        return new GetEmailActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailActivityUserDetailWithDateRequestBuilder
    */
    public function getEmailActivityUserDetailWithDate(Date $date): GetEmailActivityUserDetailWithDateRequestBuilder {
        return new GetEmailActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserDetailWithPeriodRequestBuilder
    */
    public function getEmailActivityUserDetailWithPeriod(string $period): GetEmailActivityUserDetailWithPeriodRequestBuilder {
        return new GetEmailActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageAppsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageAppsUserCountsWithPeriod(string $period): GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageUserCountsWithPeriod(string $period): GetEmailAppUsageUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailAppUsageUserDetailWithDateRequestBuilder
    */
    public function getEmailAppUsageUserDetailWithDate(Date $date): GetEmailAppUsageUserDetailWithDateRequestBuilder {
        return new GetEmailAppUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserDetailWithPeriodRequestBuilder
    */
    public function getEmailAppUsageUserDetailWithPeriod(string $period): GetEmailAppUsageUserDetailWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageVersionsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageVersionsUserCountsWithPeriod(string $period): GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getGroupArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $groupId Usage: groupId='{groupId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $groupId, DateTime $startDateTime): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $groupId, $startDateTime);
    }

    /**
     * Provides operations to call the getM365AppPlatformUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppPlatformUserCountsWithPeriodRequestBuilder
    */
    public function getM365AppPlatformUserCountsWithPeriod(string $period): GetM365AppPlatformUserCountsWithPeriodRequestBuilder {
        return new GetM365AppPlatformUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserCountsWithPeriodRequestBuilder
    */
    public function getM365AppUserCountsWithPeriod(string $period): GetM365AppUserCountsWithPeriodRequestBuilder {
        return new GetM365AppUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetM365AppUserDetailWithDateRequestBuilder
    */
    public function getM365AppUserDetailWithDate(Date $date): GetM365AppUserDetailWithDateRequestBuilder {
        return new GetM365AppUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserDetailWithPeriodRequestBuilder
    */
    public function getM365AppUserDetailWithPeriod(string $period): GetM365AppUserDetailWithPeriodRequestBuilder {
        return new GetM365AppUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageDetailWithPeriodRequestBuilder
    */
    public function getMailboxUsageDetailWithPeriod(string $period): GetMailboxUsageDetailWithPeriodRequestBuilder {
        return new GetMailboxUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageMailboxCountsWithPeriodRequestBuilder
    */
    public function getMailboxUsageMailboxCountsWithPeriod(string $period): GetMailboxUsageMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageQuotaStatusMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder
    */
    public function getMailboxUsageQuotaStatusMailboxCountsWithPeriod(string $period): GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageStorageWithPeriodRequestBuilder
    */
    public function getMailboxUsageStorageWithPeriod(string $period): GetMailboxUsageStorageWithPeriodRequestBuilder {
        return new GetMailboxUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActivationCounts method.
     * @return GetOffice365ActivationCountsRequestBuilder
    */
    public function getOffice365ActivationCounts(): GetOffice365ActivationCountsRequestBuilder {
        return new GetOffice365ActivationCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActivationsUserCounts method.
     * @return GetOffice365ActivationsUserCountsRequestBuilder
    */
    public function getOffice365ActivationsUserCounts(): GetOffice365ActivationsUserCountsRequestBuilder {
        return new GetOffice365ActivationsUserCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActivationsUserDetail method.
     * @return GetOffice365ActivationsUserDetailRequestBuilder
    */
    public function getOffice365ActivationsUserDetail(): GetOffice365ActivationsUserDetailRequestBuilder {
        return new GetOffice365ActivationsUserDetailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserCountsWithPeriodRequestBuilder
    */
    public function getOffice365ActiveUserCountsWithPeriod(string $period): GetOffice365ActiveUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365ActiveUserDetailWithDateRequestBuilder
    */
    public function getOffice365ActiveUserDetailWithDate(Date $date): GetOffice365ActiveUserDetailWithDateRequestBuilder {
        return new GetOffice365ActiveUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserDetailWithPeriodRequestBuilder
    */
    public function getOffice365ActiveUserDetailWithPeriod(string $period): GetOffice365ActiveUserDetailWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityCountsWithPeriod(string $period): GetOffice365GroupsActivityCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365GroupsActivityDetailWithDateRequestBuilder
    */
    public function getOffice365GroupsActivityDetailWithDate(Date $date): GetOffice365GroupsActivityDetailWithDateRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityDetailWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityDetailWithPeriod(string $period): GetOffice365GroupsActivityDetailWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityFileCountsWithPeriod(string $period): GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityGroupCountsWithPeriod(string $period): GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityStorageWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityStorageWithPeriod(string $period): GetOffice365GroupsActivityStorageWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ServicesUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ServicesUserCountsWithPeriodRequestBuilder
    */
    public function getOffice365ServicesUserCountsWithPeriod(string $period): GetOffice365ServicesUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ServicesUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityFileCountsWithPeriodRequestBuilder
    */
    public function getOneDriveActivityFileCountsWithPeriod(string $period): GetOneDriveActivityFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserCountsWithPeriodRequestBuilder
    */
    public function getOneDriveActivityUserCountsWithPeriod(string $period): GetOneDriveActivityUserCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function getOneDriveActivityUserDetailWithDate(Date $date): GetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new GetOneDriveActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserDetailWithPeriodRequestBuilder
    */
    public function getOneDriveActivityUserDetailWithPeriod(string $period): GetOneDriveActivityUserDetailWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountCountsWithPeriodRequestBuilder
    */
    public function getOneDriveUsageAccountCountsWithPeriod(string $period): GetOneDriveUsageAccountCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveUsageAccountDetailWithDateRequestBuilder
    */
    public function getOneDriveUsageAccountDetailWithDate(Date $date): GetOneDriveUsageAccountDetailWithDateRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountDetailWithPeriodRequestBuilder
    */
    public function getOneDriveUsageAccountDetailWithPeriod(string $period): GetOneDriveUsageAccountDetailWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageFileCountsWithPeriodRequestBuilder
    */
    public function getOneDriveUsageFileCountsWithPeriod(string $period): GetOneDriveUsageFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageStorageWithPeriodRequestBuilder
    */
    public function getOneDriveUsageStorageWithPeriod(string $period): GetOneDriveUsageStorageWithPeriodRequestBuilder {
        return new GetOneDriveUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getPrinterArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $printerId Usage: printerId='{printerId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $printerId, DateTime $startDateTime): GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $printerId, $startDateTime);
    }

    /**
     * Provides operations to call the getSharePointActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityFileCountsWithPeriodRequestBuilder
    */
    public function getSharePointActivityFileCountsWithPeriod(string $period): GetSharePointActivityFileCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityPages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityPagesWithPeriodRequestBuilder
    */
    public function getSharePointActivityPagesWithPeriod(string $period): GetSharePointActivityPagesWithPeriodRequestBuilder {
        return new GetSharePointActivityPagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSharePointActivityUserCountsWithPeriod(string $period): GetSharePointActivityUserCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointActivityUserDetailWithDateRequestBuilder
    */
    public function getSharePointActivityUserDetailWithDate(Date $date): GetSharePointActivityUserDetailWithDateRequestBuilder {
        return new GetSharePointActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserDetailWithPeriodRequestBuilder
    */
    public function getSharePointActivityUserDetailWithPeriod(string $period): GetSharePointActivityUserDetailWithPeriodRequestBuilder {
        return new GetSharePointActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointSiteUsageDetailWithDateRequestBuilder
    */
    public function getSharePointSiteUsageDetailWithDate(Date $date): GetSharePointSiteUsageDetailWithDateRequestBuilder {
        return new GetSharePointSiteUsageDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageDetailWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageDetailWithPeriod(string $period): GetSharePointSiteUsageDetailWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageFileCountsWithPeriod(string $period): GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsagePages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsagePagesWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsagePagesWithPeriod(string $period): GetSharePointSiteUsagePagesWithPeriodRequestBuilder {
        return new GetSharePointSiteUsagePagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageSiteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageSiteCountsWithPeriod(string $period): GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageStorageWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageStorageWithPeriod(string $period): GetSharePointSiteUsageStorageWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityCountsWithPeriod(string $period): GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder
    */
    public function getSkypeForBusinessActivityUserDetailWithDate(Date $date): GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityUserDetailWithPeriod(string $period): GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserDetailWithDate(Date $date): GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserDetailWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageDistributionUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageUserCountsWithPeriod(string $period): GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getTeamsDeviceUsageUserDetailWithDate(Date $date): GetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageUserDetailWithPeriod(string $period): GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityCountsWithPeriod(string $period): GetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityUserCountsWithPeriod(string $period): GetTeamsUserActivityUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsUserActivityUserDetailWithDateRequestBuilder
    */
    public function getTeamsUserActivityUserDetailWithDate(Date $date): GetTeamsUserActivityUserDetailWithDateRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityUserDetailWithPeriod(string $period): GetTeamsUserActivityUserDetailWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getUserArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @param string $userId Usage: userId='{userId}'
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime, string $userId): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime, $userId);
    }

    /**
     * Provides operations to call the getYammerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityCountsWithPeriodRequestBuilder
    */
    public function getYammerActivityCountsWithPeriod(string $period): GetYammerActivityCountsWithPeriodRequestBuilder {
        return new GetYammerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getYammerActivityUserCountsWithPeriod(string $period): GetYammerActivityUserCountsWithPeriodRequestBuilder {
        return new GetYammerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerActivityUserDetailWithDateRequestBuilder
    */
    public function getYammerActivityUserDetailWithDate(Date $date): GetYammerActivityUserDetailWithDateRequestBuilder {
        return new GetYammerActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserDetailWithPeriodRequestBuilder
    */
    public function getYammerActivityUserDetailWithPeriod(string $period): GetYammerActivityUserDetailWithPeriodRequestBuilder {
        return new GetYammerActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageDistributionUserCountsWithPeriod(string $period): GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageUserCountsWithPeriod(string $period): GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getYammerDeviceUsageUserDetailWithDate(Date $date): GetYammerDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageUserDetailWithPeriod(string $period): GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityCountsWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityCountsWithPeriod(string $period): GetYammerGroupsActivityCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerGroupsActivityDetailWithDateRequestBuilder
    */
    public function getYammerGroupsActivityDetailWithDate(Date $date): GetYammerGroupsActivityDetailWithDateRequestBuilder {
        return new GetYammerGroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityDetailWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityDetailWithPeriod(string $period): GetYammerGroupsActivityDetailWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityGroupCountsWithPeriod(string $period): GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @return ManagedDeviceEnrollmentFailureDetailsRequestBuilder
    */
    public function managedDeviceEnrollmentFailureDetails(): ManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function managedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @return ManagedDeviceEnrollmentTopFailuresRequestBuilder
    */
    public function managedDeviceEnrollmentTopFailures(): ManagedDeviceEnrollmentTopFailuresRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @param string $period Usage: period='{period}'
     * @return ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder
    */
    public function managedDeviceEnrollmentTopFailuresWithPeriod(string $period): ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.reports.monthlyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): MicrosoftGraphGeneratedReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphGeneratedReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.reports.monthlyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): MicrosoftGraphGeneratedReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphGeneratedReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update reports
     * @param ReportRoot $body 
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ReportRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
