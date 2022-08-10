<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDevicePerformance extends Entity implements Parsable 
{
    /**
     * @var float|null $averageBlueScreens Average (mean) number of Blue Screens per device in the last 14 days. Valid values 0 to 9999999
    */
    private ?float $averageBlueScreens = null;
    
    /**
     * @var float|null $averageRestarts Average (mean) number of Restarts per device in the last 14 days. Valid values 0 to 9999999
    */
    private ?float $averageRestarts = null;
    
    /**
     * @var int|null $blueScreenCount Number of Blue Screens in the last 14 days. Valid values 0 to 9999999
    */
    private ?int $blueScreenCount = null;
    
    /**
     * @var int|null $bootScore The user experience analytics device boot score.
    */
    private ?int $bootScore = null;
    
    /**
     * @var int|null $coreBootTimeInMs The user experience analytics device core boot time in milliseconds.
    */
    private ?int $coreBootTimeInMs = null;
    
    /**
     * @var int|null $coreLoginTimeInMs The user experience analytics device core login time in milliseconds.
    */
    private ?int $coreLoginTimeInMs = null;
    
    /**
     * @var int|null $deviceCount User experience analytics summarized device count.
    */
    private ?int $deviceCount = null;
    
    /**
     * @var string|null $deviceName The user experience analytics device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var DiskType|null $diskType The diskType property
    */
    private ?DiskType $diskType = null;
    
    /**
     * @var int|null $groupPolicyBootTimeInMs The user experience analytics device group policy boot time in milliseconds.
    */
    private ?int $groupPolicyBootTimeInMs = null;
    
    /**
     * @var int|null $groupPolicyLoginTimeInMs The user experience analytics device group policy login time in milliseconds.
    */
    private ?int $groupPolicyLoginTimeInMs = null;
    
    /**
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The healthStatus property
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var int|null $loginScore The user experience analytics device login score.
    */
    private ?int $loginScore = null;
    
    /**
     * @var string|null $manufacturer The user experience analytics device manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience analytics device model.
    */
    private ?string $model = null;
    
    /**
     * @var float|null $modelStartupPerformanceScore The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $modelStartupPerformanceScore = null;
    
    /**
     * @var string|null $operatingSystemVersion The user experience analytics device Operating System version.
    */
    private ?string $operatingSystemVersion = null;
    
    /**
     * @var int|null $responsiveDesktopTimeInMs The user experience analytics responsive desktop time in milliseconds.
    */
    private ?int $responsiveDesktopTimeInMs = null;
    
    /**
     * @var int|null $restartCount Number of Restarts in the last 14 days. Valid values 0 to 9999999
    */
    private ?int $restartCount = null;
    
    /**
     * @var float|null $startupPerformanceScore The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $startupPerformanceScore = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDevicePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsDevicePerformance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDevicePerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDevicePerformance {
        return new UserExperienceAnalyticsDevicePerformance();
    }

    /**
     * Gets the averageBlueScreens property value. Average (mean) number of Blue Screens per device in the last 14 days. Valid values 0 to 9999999
     * @return float|null
    */
    public function getAverageBlueScreens(): ?float {
        return $this->averageBlueScreens;
    }

    /**
     * Gets the averageRestarts property value. Average (mean) number of Restarts per device in the last 14 days. Valid values 0 to 9999999
     * @return float|null
    */
    public function getAverageRestarts(): ?float {
        return $this->averageRestarts;
    }

    /**
     * Gets the blueScreenCount property value. Number of Blue Screens in the last 14 days. Valid values 0 to 9999999
     * @return int|null
    */
    public function getBlueScreenCount(): ?int {
        return $this->blueScreenCount;
    }

    /**
     * Gets the bootScore property value. The user experience analytics device boot score.
     * @return int|null
    */
    public function getBootScore(): ?int {
        return $this->bootScore;
    }

    /**
     * Gets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     * @return int|null
    */
    public function getCoreBootTimeInMs(): ?int {
        return $this->coreBootTimeInMs;
    }

    /**
     * Gets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @return int|null
    */
    public function getCoreLoginTimeInMs(): ?int {
        return $this->coreLoginTimeInMs;
    }

    /**
     * Gets the deviceCount property value. User experience analytics summarized device count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * Gets the deviceName property value. The user experience analytics device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the diskType property value. The diskType property
     * @return DiskType|null
    */
    public function getDiskType(): ?DiskType {
        return $this->diskType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageBlueScreens' => function (ParseNode $n) use ($o) { $o->setAverageBlueScreens($n->getFloatValue()); },
            'averageRestarts' => function (ParseNode $n) use ($o) { $o->setAverageRestarts($n->getFloatValue()); },
            'blueScreenCount' => function (ParseNode $n) use ($o) { $o->setBlueScreenCount($n->getIntegerValue()); },
            'bootScore' => function (ParseNode $n) use ($o) { $o->setBootScore($n->getIntegerValue()); },
            'coreBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setCoreBootTimeInMs($n->getIntegerValue()); },
            'coreLoginTimeInMs' => function (ParseNode $n) use ($o) { $o->setCoreLoginTimeInMs($n->getIntegerValue()); },
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'diskType' => function (ParseNode $n) use ($o) { $o->setDiskType($n->getEnumValue(DiskType::class)); },
            'groupPolicyBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setGroupPolicyBootTimeInMs($n->getIntegerValue()); },
            'groupPolicyLoginTimeInMs' => function (ParseNode $n) use ($o) { $o->setGroupPolicyLoginTimeInMs($n->getIntegerValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'loginScore' => function (ParseNode $n) use ($o) { $o->setLoginScore($n->getIntegerValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'modelStartupPerformanceScore' => function (ParseNode $n) use ($o) { $o->setModelStartupPerformanceScore($n->getFloatValue()); },
            'operatingSystemVersion' => function (ParseNode $n) use ($o) { $o->setOperatingSystemVersion($n->getStringValue()); },
            'responsiveDesktopTimeInMs' => function (ParseNode $n) use ($o) { $o->setResponsiveDesktopTimeInMs($n->getIntegerValue()); },
            'restartCount' => function (ParseNode $n) use ($o) { $o->setRestartCount($n->getIntegerValue()); },
            'startupPerformanceScore' => function (ParseNode $n) use ($o) { $o->setStartupPerformanceScore($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the groupPolicyBootTimeInMs property value. The user experience analytics device group policy boot time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyBootTimeInMs(): ?int {
        return $this->groupPolicyBootTimeInMs;
    }

    /**
     * Gets the groupPolicyLoginTimeInMs property value. The user experience analytics device group policy login time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyLoginTimeInMs(): ?int {
        return $this->groupPolicyLoginTimeInMs;
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->healthStatus;
    }

    /**
     * Gets the loginScore property value. The user experience analytics device login score.
     * @return int|null
    */
    public function getLoginScore(): ?int {
        return $this->loginScore;
    }

    /**
     * Gets the manufacturer property value. The user experience analytics device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The user experience analytics device model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the modelStartupPerformanceScore property value. The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getModelStartupPerformanceScore(): ?float {
        return $this->modelStartupPerformanceScore;
    }

    /**
     * Gets the operatingSystemVersion property value. The user experience analytics device Operating System version.
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        return $this->operatingSystemVersion;
    }

    /**
     * Gets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @return int|null
    */
    public function getResponsiveDesktopTimeInMs(): ?int {
        return $this->responsiveDesktopTimeInMs;
    }

    /**
     * Gets the restartCount property value. Number of Restarts in the last 14 days. Valid values 0 to 9999999
     * @return int|null
    */
    public function getRestartCount(): ?int {
        return $this->restartCount;
    }

    /**
     * Gets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStartupPerformanceScore(): ?float {
        return $this->startupPerformanceScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('averageBlueScreens', $this->averageBlueScreens);
        $writer->writeFloatValue('averageRestarts', $this->averageRestarts);
        $writer->writeIntegerValue('blueScreenCount', $this->blueScreenCount);
        $writer->writeIntegerValue('bootScore', $this->bootScore);
        $writer->writeIntegerValue('coreBootTimeInMs', $this->coreBootTimeInMs);
        $writer->writeIntegerValue('coreLoginTimeInMs', $this->coreLoginTimeInMs);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeEnumValue('diskType', $this->diskType);
        $writer->writeIntegerValue('groupPolicyBootTimeInMs', $this->groupPolicyBootTimeInMs);
        $writer->writeIntegerValue('groupPolicyLoginTimeInMs', $this->groupPolicyLoginTimeInMs);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeIntegerValue('loginScore', $this->loginScore);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeFloatValue('modelStartupPerformanceScore', $this->modelStartupPerformanceScore);
        $writer->writeStringValue('operatingSystemVersion', $this->operatingSystemVersion);
        $writer->writeIntegerValue('responsiveDesktopTimeInMs', $this->responsiveDesktopTimeInMs);
        $writer->writeIntegerValue('restartCount', $this->restartCount);
        $writer->writeFloatValue('startupPerformanceScore', $this->startupPerformanceScore);
    }

    /**
     * Sets the averageBlueScreens property value. Average (mean) number of Blue Screens per device in the last 14 days. Valid values 0 to 9999999
     *  @param float|null $value Value to set for the averageBlueScreens property.
    */
    public function setAverageBlueScreens(?float $value ): void {
        $this->averageBlueScreens = $value;
    }

    /**
     * Sets the averageRestarts property value. Average (mean) number of Restarts per device in the last 14 days. Valid values 0 to 9999999
     *  @param float|null $value Value to set for the averageRestarts property.
    */
    public function setAverageRestarts(?float $value ): void {
        $this->averageRestarts = $value;
    }

    /**
     * Sets the blueScreenCount property value. Number of Blue Screens in the last 14 days. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the blueScreenCount property.
    */
    public function setBlueScreenCount(?int $value ): void {
        $this->blueScreenCount = $value;
    }

    /**
     * Sets the bootScore property value. The user experience analytics device boot score.
     *  @param int|null $value Value to set for the bootScore property.
    */
    public function setBootScore(?int $value ): void {
        $this->bootScore = $value;
    }

    /**
     * Sets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     *  @param int|null $value Value to set for the coreBootTimeInMs property.
    */
    public function setCoreBootTimeInMs(?int $value ): void {
        $this->coreBootTimeInMs = $value;
    }

    /**
     * Sets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     *  @param int|null $value Value to set for the coreLoginTimeInMs property.
    */
    public function setCoreLoginTimeInMs(?int $value ): void {
        $this->coreLoginTimeInMs = $value;
    }

    /**
     * Sets the deviceCount property value. User experience analytics summarized device count.
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the deviceName property value. The user experience analytics device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the diskType property value. The diskType property
     *  @param DiskType|null $value Value to set for the diskType property.
    */
    public function setDiskType(?DiskType $value ): void {
        $this->diskType = $value;
    }

    /**
     * Sets the groupPolicyBootTimeInMs property value. The user experience analytics device group policy boot time in milliseconds.
     *  @param int|null $value Value to set for the groupPolicyBootTimeInMs property.
    */
    public function setGroupPolicyBootTimeInMs(?int $value ): void {
        $this->groupPolicyBootTimeInMs = $value;
    }

    /**
     * Sets the groupPolicyLoginTimeInMs property value. The user experience analytics device group policy login time in milliseconds.
     *  @param int|null $value Value to set for the groupPolicyLoginTimeInMs property.
    */
    public function setGroupPolicyLoginTimeInMs(?int $value ): void {
        $this->groupPolicyLoginTimeInMs = $value;
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the loginScore property value. The user experience analytics device login score.
     *  @param int|null $value Value to set for the loginScore property.
    */
    public function setLoginScore(?int $value ): void {
        $this->loginScore = $value;
    }

    /**
     * Sets the manufacturer property value. The user experience analytics device manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the modelStartupPerformanceScore property value. The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the modelStartupPerformanceScore property.
    */
    public function setModelStartupPerformanceScore(?float $value ): void {
        $this->modelStartupPerformanceScore = $value;
    }

    /**
     * Sets the operatingSystemVersion property value. The user experience analytics device Operating System version.
     *  @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value ): void {
        $this->operatingSystemVersion = $value;
    }

    /**
     * Sets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     *  @param int|null $value Value to set for the responsiveDesktopTimeInMs property.
    */
    public function setResponsiveDesktopTimeInMs(?int $value ): void {
        $this->responsiveDesktopTimeInMs = $value;
    }

    /**
     * Sets the restartCount property value. Number of Restarts in the last 14 days. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the restartCount property.
    */
    public function setRestartCount(?int $value ): void {
        $this->restartCount = $value;
    }

    /**
     * Sets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value ): void {
        $this->startupPerformanceScore = $value;
    }

}
