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
use Microsoft\Graph\Generated\Reports\MicrosoftGraphDeviceConfigurationDeviceActivity\MicrosoftGraphDeviceConfigurationDeviceActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphDeviceConfigurationUserActivity\MicrosoftGraphDeviceConfigurationUserActivityRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityCountsWithPeriod\MicrosoftGraphGetEmailActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserCountsWithPeriod\MicrosoftGraphGetEmailActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserDetailWithDate\MicrosoftGraphGetEmailActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailActivityUserDetailWithPeriod\MicrosoftGraphGetEmailActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriod\MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserCountsWithPeriod\MicrosoftGraphGetEmailAppUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithDate\MicrosoftGraphGetEmailAppUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithPeriod\MicrosoftGraphGetEmailAppUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod\MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime\MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppPlatformUserCountsWithPeriod\MicrosoftGraphGetM365AppPlatformUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserCountsWithPeriod\MicrosoftGraphGetM365AppUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserDetailWithDate\MicrosoftGraphGetM365AppUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetM365AppUserDetailWithPeriod\MicrosoftGraphGetM365AppUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageDetailWithPeriod\MicrosoftGraphGetMailboxUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriod\MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod\MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetMailboxUsageStorageWithPeriod\MicrosoftGraphGetMailboxUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationCounts\MicrosoftGraphGetOffice365ActivationCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationsUserCounts\MicrosoftGraphGetOffice365ActivationsUserCountsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActivationsUserDetail\MicrosoftGraphGetOffice365ActivationsUserDetailRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserCountsWithPeriod\MicrosoftGraphGetOffice365ActiveUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithDate\MicrosoftGraphGetOffice365ActiveUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithPeriod\MicrosoftGraphGetOffice365ActiveUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriod\MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithDate\MicrosoftGraphGetOffice365GroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriod\MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriod\MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod\MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriod\MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOffice365ServicesUserCountsWithPeriod\MicrosoftGraphGetOffice365ServicesUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityFileCountsWithPeriod\MicrosoftGraphGetOneDriveActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserCountsWithPeriod\MicrosoftGraphGetOneDriveActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithDate\MicrosoftGraphGetOneDriveActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithPeriod\MicrosoftGraphGetOneDriveActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriod\MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithDate\MicrosoftGraphGetOneDriveUsageAccountDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriod\MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageFileCountsWithPeriod\MicrosoftGraphGetOneDriveUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetOneDriveUsageStorageWithPeriod\MicrosoftGraphGetOneDriveUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime\MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityFileCountsWithPeriod\MicrosoftGraphGetSharePointActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityPagesWithPeriod\MicrosoftGraphGetSharePointActivityPagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserCountsWithPeriod\MicrosoftGraphGetSharePointActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithDate\MicrosoftGraphGetSharePointActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithPeriod\MicrosoftGraphGetSharePointActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithDate\MicrosoftGraphGetSharePointSiteUsageDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithPeriod\MicrosoftGraphGetSharePointSiteUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriod\MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsagePagesWithPeriod\MicrosoftGraphGetSharePointSiteUsagePagesWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriod\MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSharePointSiteUsageStorageWithPeriod\MicrosoftGraphGetSharePointSiteUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDate\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod\MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriod\MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDate\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriod\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityCountsWithPeriod\MicrosoftGraphGetTeamsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriod\MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithDate\MicrosoftGraphGetTeamsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriod\MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime\MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityCountsWithPeriod\MicrosoftGraphGetYammerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserCountsWithPeriod\MicrosoftGraphGetYammerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserDetailWithDate\MicrosoftGraphGetYammerActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerActivityUserDetailWithPeriod\MicrosoftGraphGetYammerActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod\MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriod\MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithDate\MicrosoftGraphGetYammerDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriod\MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityCountsWithPeriod\MicrosoftGraphGetYammerGroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithDate\MicrosoftGraphGetYammerGroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithPeriod\MicrosoftGraphGetYammerGroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriod\MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetails\MicrosoftGraphManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken\MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailures\MicrosoftGraphManagedDeviceEnrollmentTopFailuresRequestBuilder;
use Microsoft\Graph\Generated\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod\MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder;
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
    public function microsoftGraphDeviceConfigurationDeviceActivity(): MicrosoftGraphDeviceConfigurationDeviceActivityRequestBuilder {
        return new MicrosoftGraphDeviceConfigurationDeviceActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deviceConfigurationUserActivity method.
    */
    public function microsoftGraphDeviceConfigurationUserActivity(): MicrosoftGraphDeviceConfigurationUserActivityRequestBuilder {
        return new MicrosoftGraphDeviceConfigurationUserActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationCounts method.
    */
    public function microsoftGraphGetOffice365ActivationCounts(): MicrosoftGraphGetOffice365ActivationCountsRequestBuilder {
        return new MicrosoftGraphGetOffice365ActivationCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserCounts method.
    */
    public function microsoftGraphGetOffice365ActivationsUserCounts(): MicrosoftGraphGetOffice365ActivationsUserCountsRequestBuilder {
        return new MicrosoftGraphGetOffice365ActivationsUserCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserDetail method.
    */
    public function microsoftGraphGetOffice365ActivationsUserDetail(): MicrosoftGraphGetOffice365ActivationsUserDetailRequestBuilder {
        return new MicrosoftGraphGetOffice365ActivationsUserDetailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetails(): MicrosoftGraphManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new MicrosoftGraphManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailures(): MicrosoftGraphManagedDeviceEnrollmentTopFailuresRequestBuilder {
        return new MicrosoftGraphManagedDeviceEnrollmentTopFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the dailyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
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
     * @return MicrosoftGraphGetEmailActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityCountsWithPeriod(string $period): MicrosoftGraphGetEmailActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetEmailActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetEmailActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithDate(Date $date): MicrosoftGraphGetEmailActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetEmailActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetEmailActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageAppsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageAppsUserCountsWithPeriod(string $period): MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailAppUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserCountsWithPeriod(string $period): MicrosoftGraphGetEmailAppUsageUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailAppUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetEmailAppUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithDate(Date $date): MicrosoftGraphGetEmailAppUsageUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetEmailAppUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailAppUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithPeriod(string $period): MicrosoftGraphGetEmailAppUsageUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailAppUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageVersionsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod(string $period): MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getGroupArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $groupId Usage: groupId='{groupId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $groupId, DateTime $startDateTime): MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $groupId, $startDateTime);
    }

    /**
     * Provides operations to call the getM365AppPlatformUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetM365AppPlatformUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppPlatformUserCountsWithPeriod(string $period): MicrosoftGraphGetM365AppPlatformUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetM365AppPlatformUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetM365AppUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserCountsWithPeriod(string $period): MicrosoftGraphGetM365AppUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetM365AppUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetM365AppUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithDate(Date $date): MicrosoftGraphGetM365AppUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetM365AppUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetM365AppUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithPeriod(string $period): MicrosoftGraphGetM365AppUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetM365AppUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetMailboxUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageDetailWithPeriod(string $period): MicrosoftGraphGetMailboxUsageDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetMailboxUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageMailboxCountsWithPeriod(string $period): MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageQuotaStatusMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod(string $period): MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetMailboxUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageStorageWithPeriod(string $period): MicrosoftGraphGetMailboxUsageStorageWithPeriodRequestBuilder {
        return new MicrosoftGraphGetMailboxUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365ActiveUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserCountsWithPeriod(string $period): MicrosoftGraphGetOffice365ActiveUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365ActiveUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetOffice365ActiveUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithDate(Date $date): MicrosoftGraphGetOffice365ActiveUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetOffice365ActiveUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365ActiveUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithPeriod(string $period): MicrosoftGraphGetOffice365ActiveUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365ActiveUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityCountsWithPeriod(string $period): MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetOffice365GroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithDate(Date $date): MicrosoftGraphGetOffice365GroupsActivityDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithPeriod(string $period): MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityFileCountsWithPeriod(string $period): MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod(string $period): MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityStorage method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityStorageWithPeriod(string $period): MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ServicesUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOffice365ServicesUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ServicesUserCountsWithPeriod(string $period): MicrosoftGraphGetOffice365ServicesUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOffice365ServicesUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityFileCountsWithPeriod(string $period): MicrosoftGraphGetOneDriveActivityFileCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetOneDriveActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithDate(Date $date): MicrosoftGraphGetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetOneDriveActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetOneDriveActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountCountsWithPeriod(string $period): MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetOneDriveUsageAccountDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithDate(Date $date): MicrosoftGraphGetOneDriveUsageAccountDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetOneDriveUsageAccountDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithPeriod(string $period): MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageFileCountsWithPeriod(string $period): MicrosoftGraphGetOneDriveUsageFileCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetOneDriveUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageStorageWithPeriod(string $period): MicrosoftGraphGetOneDriveUsageStorageWithPeriodRequestBuilder {
        return new MicrosoftGraphGetOneDriveUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getPrinterArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $printerId Usage: printerId='{printerId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $printerId, DateTime $startDateTime): MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $printerId, $startDateTime);
    }

    /**
     * Provides operations to call the getSharePointActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityFileCountsWithPeriod(string $period): MicrosoftGraphGetSharePointActivityFileCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityPages method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointActivityPagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityPagesWithPeriod(string $period): MicrosoftGraphGetSharePointActivityPagesWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointActivityPagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetSharePointActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetSharePointActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithDate(Date $date): MicrosoftGraphGetSharePointActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetSharePointActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetSharePointActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetSharePointSiteUsageDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithDate(Date $date): MicrosoftGraphGetSharePointSiteUsageDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsageDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointSiteUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithPeriod(string $period): MicrosoftGraphGetSharePointSiteUsageDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageFileCountsWithPeriod(string $period): MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsagePages method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointSiteUsagePagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsagePagesWithPeriod(string $period): MicrosoftGraphGetSharePointSiteUsagePagesWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsagePagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageSiteCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageSiteCountsWithPeriod(string $period): MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSharePointSiteUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageStorageWithPeriod(string $period): MicrosoftGraphGetSharePointSiteUsageStorageWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSharePointSiteUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithDate(Date $date): MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate(Date $date): MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod(string $period): MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserCountsWithPeriod(string $period): MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithDate(Date $date): MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithPeriod(string $period): MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityCountsWithPeriod(string $period): MicrosoftGraphGetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetTeamsUserActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithDate(Date $date): MicrosoftGraphGetTeamsUserActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetTeamsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getUserArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @param string $userId Usage: userId='{userId}'
     * @return MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime, string $userId): MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime, $userId);
    }

    /**
     * Provides operations to call the getYammerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityCountsWithPeriod(string $period): MicrosoftGraphGetYammerActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserCountsWithPeriod(string $period): MicrosoftGraphGetYammerActivityUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetYammerActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithDate(Date $date): MicrosoftGraphGetYammerActivityUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetYammerActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithPeriod(string $period): MicrosoftGraphGetYammerActivityUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod(string $period): MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserCountsWithPeriod(string $period): MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetYammerDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithDate(Date $date): MicrosoftGraphGetYammerDeviceUsageUserDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetYammerDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithPeriod(string $period): MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerGroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityCountsWithPeriod(string $period): MicrosoftGraphGetYammerGroupsActivityCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerGroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return MicrosoftGraphGetYammerGroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithDate(Date $date): MicrosoftGraphGetYammerGroupsActivityDetailWithDateRequestBuilder {
        return new MicrosoftGraphGetYammerGroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerGroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithPeriod(string $period): MicrosoftGraphGetYammerGroupsActivityDetailWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerGroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityGroupCountsWithPeriod(string $period): MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @param string $period Usage: period='{period}'
     * @return MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod(string $period): MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder {
        return new MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Update reports
     * @param ReportRoot $body The request body
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
     * @param ReportRoot $body The request body
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
