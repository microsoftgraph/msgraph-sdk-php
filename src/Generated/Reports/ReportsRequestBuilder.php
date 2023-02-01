<?php

namespace Microsoft\Graph\Generated\Reports;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ReportRoot;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\DailyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\DailyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphDeviceConfigurationDeviceActivity\DeviceConfigurationDeviceActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphDeviceConfigurationUserActivity\DeviceConfigurationUserActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityCountsWithPeriod\GetEmailActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserCountsWithPeriod\GetEmailActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserDetailWithDate\GetEmailActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserDetailWithPeriod\GetEmailActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriod\GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserCountsWithPeriod\GetEmailAppUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithDate\GetEmailAppUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithPeriod\GetEmailAppUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod\GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppPlatformUserCountsWithPeriod\GetM365AppPlatformUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserCountsWithPeriod\GetM365AppUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserDetailWithDate\GetM365AppUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserDetailWithPeriod\GetM365AppUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageDetailWithPeriod\GetMailboxUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriod\GetMailboxUsageMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod\GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageStorageWithPeriod\GetMailboxUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationCounts\GetOffice365ActivationCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationsUserCounts\GetOffice365ActivationsUserCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationsUserDetail\GetOffice365ActivationsUserDetailRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserCountsWithPeriod\GetOffice365ActiveUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithDate\GetOffice365ActiveUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithPeriod\GetOffice365ActiveUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriod\GetOffice365GroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithDate\GetOffice365GroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriod\GetOffice365GroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriod\GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod\GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriod\GetOffice365GroupsActivityStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ServicesUserCountsWithPeriod\GetOffice365ServicesUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityFileCountsWithPeriod\GetOneDriveActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserCountsWithPeriod\GetOneDriveActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithDate\GetOneDriveActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithPeriod\GetOneDriveActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriod\GetOneDriveUsageAccountCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithDate\GetOneDriveUsageAccountDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriod\GetOneDriveUsageAccountDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageFileCountsWithPeriod\GetOneDriveUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageStorageWithPeriod\GetOneDriveUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityFileCountsWithPeriod\GetSharePointActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityPagesWithPeriod\GetSharePointActivityPagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserCountsWithPeriod\GetSharePointActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithDate\GetSharePointActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithPeriod\GetSharePointActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithDate\GetSharePointSiteUsageDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithPeriod\GetSharePointSiteUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriod\GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsagePagesWithPeriod\GetSharePointSiteUsagePagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriod\GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageStorageWithPeriod\GetSharePointSiteUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriod\GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod\GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDate\GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod\GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate\GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod\GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod\GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod\GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod\GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod\GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriod\GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDate\GetTeamsDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriod\GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityCountsWithPeriod\GetTeamsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriod\GetTeamsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithDate\GetTeamsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriod\GetTeamsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityCountsWithPeriod\GetYammerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserCountsWithPeriod\GetYammerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserDetailWithDate\GetYammerActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserDetailWithPeriod\GetYammerActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod\GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriod\GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithDate\GetYammerDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriod\GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityCountsWithPeriod\GetYammerGroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithDate\GetYammerGroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithPeriod\GetYammerGroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriod\GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetails\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailures\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod\ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\MonthlyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\MonthlyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Generated\Reports\Security\SecurityRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Provides operations to manage the reportRoot singleton.
*/
class ReportsRequestBuilder 
{
    /**
     * Provides operations to manage the dailyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageByPrinter(): DailyPrintUsageByPrinterRequestBuilder {
        return new DailyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageByUser(): DailyPrintUsageByUserRequestBuilder {
        return new DailyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deviceConfigurationDeviceActivity method.
    */
    public function microsoftGraphDeviceConfigurationDeviceActivity(): DeviceConfigurationDeviceActivityRequestBuilder {
        return new DeviceConfigurationDeviceActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deviceConfigurationUserActivity method.
    */
    public function microsoftGraphDeviceConfigurationUserActivity(): DeviceConfigurationUserActivityRequestBuilder {
        return new DeviceConfigurationUserActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationCounts method.
    */
    public function microsoftGraphGetOffice365ActivationCounts(): GetOffice365ActivationCountsRequestBuilder {
        return new GetOffice365ActivationCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserCounts method.
    */
    public function microsoftGraphGetOffice365ActivationsUserCounts(): GetOffice365ActivationsUserCountsRequestBuilder {
        return new GetOffice365ActivationsUserCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserDetail method.
    */
    public function microsoftGraphGetOffice365ActivationsUserDetail(): GetOffice365ActivationsUserDetailRequestBuilder {
        return new GetOffice365ActivationsUserDetailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetails(): ManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailures(): ManagedDeviceEnrollmentTopFailuresRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function monthlyPrintUsageByPrinter(): MonthlyPrintUsageByPrinterRequestBuilder {
        return new MonthlyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
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
     * Provides operations to manage the security property of the microsoft.graph.reportRoot entity.
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
     * Provides operations to manage the dailyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get reports
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ReportRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEmailActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityCountsWithPeriod(string $period): GetEmailActivityCountsWithPeriodRequestBuilder {
        return new GetEmailActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserCountsWithPeriod(string $period): GetEmailActivityUserCountsWithPeriodRequestBuilder {
        return new GetEmailActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithDate(Date $date): GetEmailActivityUserDetailWithDateRequestBuilder {
        return new GetEmailActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithPeriod(string $period): GetEmailActivityUserDetailWithPeriodRequestBuilder {
        return new GetEmailActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageAppsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageAppsUserCountsWithPeriod(string $period): GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserCountsWithPeriod(string $period): GetEmailAppUsageUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailAppUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithDate(Date $date): GetEmailAppUsageUserDetailWithDateRequestBuilder {
        return new GetEmailAppUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithPeriod(string $period): GetEmailAppUsageUserDetailWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageVersionsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod(string $period): GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getGroupArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $groupId Usage: groupId='{groupId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $groupId, DateTime $startDateTime): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $groupId, $startDateTime);
    }

    /**
     * Provides operations to call the getM365AppPlatformUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppPlatformUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppPlatformUserCountsWithPeriod(string $period): GetM365AppPlatformUserCountsWithPeriodRequestBuilder {
        return new GetM365AppPlatformUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserCountsWithPeriod(string $period): GetM365AppUserCountsWithPeriodRequestBuilder {
        return new GetM365AppUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetM365AppUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithDate(Date $date): GetM365AppUserDetailWithDateRequestBuilder {
        return new GetM365AppUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithPeriod(string $period): GetM365AppUserDetailWithPeriodRequestBuilder {
        return new GetM365AppUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageDetailWithPeriod(string $period): GetMailboxUsageDetailWithPeriodRequestBuilder {
        return new GetMailboxUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageMailboxCountsWithPeriod(string $period): GetMailboxUsageMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageQuotaStatusMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod(string $period): GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageStorageWithPeriod(string $period): GetMailboxUsageStorageWithPeriodRequestBuilder {
        return new GetMailboxUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserCountsWithPeriod(string $period): GetOffice365ActiveUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365ActiveUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithDate(Date $date): GetOffice365ActiveUserDetailWithDateRequestBuilder {
        return new GetOffice365ActiveUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithPeriod(string $period): GetOffice365ActiveUserDetailWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityCountsWithPeriod(string $period): GetOffice365GroupsActivityCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365GroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithDate(Date $date): GetOffice365GroupsActivityDetailWithDateRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithPeriod(string $period): GetOffice365GroupsActivityDetailWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityFileCountsWithPeriod(string $period): GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod(string $period): GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityStorageWithPeriod(string $period): GetOffice365GroupsActivityStorageWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ServicesUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ServicesUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ServicesUserCountsWithPeriod(string $period): GetOffice365ServicesUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ServicesUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityFileCountsWithPeriod(string $period): GetOneDriveActivityFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserCountsWithPeriod(string $period): GetOneDriveActivityUserCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithDate(Date $date): GetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new GetOneDriveActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithPeriod(string $period): GetOneDriveActivityUserDetailWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountCountsWithPeriod(string $period): GetOneDriveUsageAccountCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveUsageAccountDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithDate(Date $date): GetOneDriveUsageAccountDetailWithDateRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithPeriod(string $period): GetOneDriveUsageAccountDetailWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageFileCountsWithPeriod(string $period): GetOneDriveUsageFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageStorageWithPeriod(string $period): GetOneDriveUsageStorageWithPeriodRequestBuilder {
        return new GetOneDriveUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getPrinterArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $printerId Usage: printerId='{printerId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $printerId, DateTime $startDateTime): GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $printerId, $startDateTime);
    }

    /**
     * Provides operations to call the getSharePointActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityFileCountsWithPeriod(string $period): GetSharePointActivityFileCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityPages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityPagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityPagesWithPeriod(string $period): GetSharePointActivityPagesWithPeriodRequestBuilder {
        return new GetSharePointActivityPagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserCountsWithPeriod(string $period): GetSharePointActivityUserCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithDate(Date $date): GetSharePointActivityUserDetailWithDateRequestBuilder {
        return new GetSharePointActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithPeriod(string $period): GetSharePointActivityUserDetailWithPeriodRequestBuilder {
        return new GetSharePointActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointSiteUsageDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithDate(Date $date): GetSharePointSiteUsageDetailWithDateRequestBuilder {
        return new GetSharePointSiteUsageDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithPeriod(string $period): GetSharePointSiteUsageDetailWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageFileCountsWithPeriod(string $period): GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsagePages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsagePagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsagePagesWithPeriod(string $period): GetSharePointSiteUsagePagesWithPeriodRequestBuilder {
        return new GetSharePointSiteUsagePagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageSiteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageSiteCountsWithPeriod(string $period): GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageStorageWithPeriod(string $period): GetSharePointSiteUsageStorageWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityCountsWithPeriod(string $period): GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithDate(Date $date): GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod(string $period): GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate(Date $date): GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserCountsWithPeriod(string $period): GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithDate(Date $date): GetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithPeriod(string $period): GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityCountsWithPeriod(string $period): GetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserCountsWithPeriod(string $period): GetTeamsUserActivityUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsUserActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithDate(Date $date): GetTeamsUserActivityUserDetailWithDateRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithPeriod(string $period): GetTeamsUserActivityUserDetailWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getUserArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @param string $userId Usage: userId='{userId}'
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime, string $userId): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime, $userId);
    }

    /**
     * Provides operations to call the getYammerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityCountsWithPeriod(string $period): GetYammerActivityCountsWithPeriodRequestBuilder {
        return new GetYammerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserCountsWithPeriod(string $period): GetYammerActivityUserCountsWithPeriodRequestBuilder {
        return new GetYammerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithDate(Date $date): GetYammerActivityUserDetailWithDateRequestBuilder {
        return new GetYammerActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithPeriod(string $period): GetYammerActivityUserDetailWithPeriodRequestBuilder {
        return new GetYammerActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod(string $period): GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserCountsWithPeriod(string $period): GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithDate(Date $date): GetYammerDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithPeriod(string $period): GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityCountsWithPeriod(string $period): GetYammerGroupsActivityCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerGroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithDate(Date $date): GetYammerGroupsActivityDetailWithDateRequestBuilder {
        return new GetYammerGroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithPeriod(string $period): GetYammerGroupsActivityDetailWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityGroupCountsWithPeriod(string $period): GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @param string $period Usage: period='{period}'
     * @return ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod(string $period): ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update reports
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ReportRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get reports
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update reports
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
