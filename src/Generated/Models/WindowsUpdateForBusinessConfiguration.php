<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUpdateForBusinessConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var AutomaticUpdateMode|null $automaticUpdateMode Possible values for automatic update mode.
    */
    private ?AutomaticUpdateMode $automaticUpdateMode = null;
    
    /**
     * @var WindowsUpdateType|null $businessReadyUpdatesOnly Which branch devices will receive their updates from
    */
    private ?WindowsUpdateType $businessReadyUpdatesOnly = null;
    
    /**
     * @var WindowsDeliveryOptimizationMode|null $deliveryOptimizationMode Delivery optimization mode for peer distribution
    */
    private ?WindowsDeliveryOptimizationMode $deliveryOptimizationMode = null;
    
    /**
     * @var bool|null $driversExcluded Exclude Windows update Drivers
    */
    private ?bool $driversExcluded = null;
    
    /**
     * @var int|null $featureUpdatesDeferralPeriodInDays Defer Feature Updates by these many days
    */
    private ?int $featureUpdatesDeferralPeriodInDays = null;
    
    /**
     * @var bool|null $featureUpdatesPaused Pause Feature Updates
    */
    private ?bool $featureUpdatesPaused = null;
    
    /**
     * @var DateTime|null $featureUpdatesPauseExpiryDateTime Feature Updates Pause Expiry datetime
    */
    private ?DateTime $featureUpdatesPauseExpiryDateTime = null;
    
    /**
     * @var WindowsUpdateInstallScheduleType|null $installationSchedule Installation schedule
    */
    private ?WindowsUpdateInstallScheduleType $installationSchedule = null;
    
    /**
     * @var bool|null $microsoftUpdateServiceAllowed Allow Microsoft Update Service
    */
    private ?bool $microsoftUpdateServiceAllowed = null;
    
    /**
     * @var PrereleaseFeatures|null $prereleaseFeatures Possible values for pre-release features.
    */
    private ?PrereleaseFeatures $prereleaseFeatures = null;
    
    /**
     * @var int|null $qualityUpdatesDeferralPeriodInDays Defer Quality Updates by these many days
    */
    private ?int $qualityUpdatesDeferralPeriodInDays = null;
    
    /**
     * @var bool|null $qualityUpdatesPaused Pause Quality Updates
    */
    private ?bool $qualityUpdatesPaused = null;
    
    /**
     * @var DateTime|null $qualityUpdatesPauseExpiryDateTime Quality Updates Pause Expiry datetime
    */
    private ?DateTime $qualityUpdatesPauseExpiryDateTime = null;
    
    /**
     * Instantiates a new WindowsUpdateForBusinessConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdateForBusinessConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateForBusinessConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateForBusinessConfiguration {
        return new WindowsUpdateForBusinessConfiguration();
    }

    /**
     * Gets the automaticUpdateMode property value. Possible values for automatic update mode.
     * @return AutomaticUpdateMode|null
    */
    public function getAutomaticUpdateMode(): ?AutomaticUpdateMode {
        return $this->automaticUpdateMode;
    }

    /**
     * Gets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     * @return WindowsUpdateType|null
    */
    public function getBusinessReadyUpdatesOnly(): ?WindowsUpdateType {
        return $this->businessReadyUpdatesOnly;
    }

    /**
     * Gets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     * @return WindowsDeliveryOptimizationMode|null
    */
    public function getDeliveryOptimizationMode(): ?WindowsDeliveryOptimizationMode {
        return $this->deliveryOptimizationMode;
    }

    /**
     * Gets the driversExcluded property value. Exclude Windows update Drivers
     * @return bool|null
    */
    public function getDriversExcluded(): ?bool {
        return $this->driversExcluded;
    }

    /**
     * Gets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days
     * @return int|null
    */
    public function getFeatureUpdatesDeferralPeriodInDays(): ?int {
        return $this->featureUpdatesDeferralPeriodInDays;
    }

    /**
     * Gets the featureUpdatesPaused property value. Pause Feature Updates
     * @return bool|null
    */
    public function getFeatureUpdatesPaused(): ?bool {
        return $this->featureUpdatesPaused;
    }

    /**
     * Gets the featureUpdatesPauseExpiryDateTime property value. Feature Updates Pause Expiry datetime
     * @return DateTime|null
    */
    public function getFeatureUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->featureUpdatesPauseExpiryDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'automaticUpdateMode' => function (ParseNode $n) use ($o) { $o->setAutomaticUpdateMode($n->getEnumValue(AutomaticUpdateMode::class)); },
            'businessReadyUpdatesOnly' => function (ParseNode $n) use ($o) { $o->setBusinessReadyUpdatesOnly($n->getEnumValue(WindowsUpdateType::class)); },
            'deliveryOptimizationMode' => function (ParseNode $n) use ($o) { $o->setDeliveryOptimizationMode($n->getEnumValue(WindowsDeliveryOptimizationMode::class)); },
            'driversExcluded' => function (ParseNode $n) use ($o) { $o->setDriversExcluded($n->getBooleanValue()); },
            'featureUpdatesDeferralPeriodInDays' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesDeferralPeriodInDays($n->getIntegerValue()); },
            'featureUpdatesPaused' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesPaused($n->getBooleanValue()); },
            'featureUpdatesPauseExpiryDateTime' => function (ParseNode $n) use ($o) { $o->setFeatureUpdatesPauseExpiryDateTime($n->getDateTimeValue()); },
            'installationSchedule' => function (ParseNode $n) use ($o) { $o->setInstallationSchedule($n->getObjectValue(array(WindowsUpdateInstallScheduleType::class, 'createFromDiscriminatorValue'))); },
            'microsoftUpdateServiceAllowed' => function (ParseNode $n) use ($o) { $o->setMicrosoftUpdateServiceAllowed($n->getBooleanValue()); },
            'prereleaseFeatures' => function (ParseNode $n) use ($o) { $o->setPrereleaseFeatures($n->getEnumValue(PrereleaseFeatures::class)); },
            'qualityUpdatesDeferralPeriodInDays' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesDeferralPeriodInDays($n->getIntegerValue()); },
            'qualityUpdatesPaused' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesPaused($n->getBooleanValue()); },
            'qualityUpdatesPauseExpiryDateTime' => function (ParseNode $n) use ($o) { $o->setQualityUpdatesPauseExpiryDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the installationSchedule property value. Installation schedule
     * @return WindowsUpdateInstallScheduleType|null
    */
    public function getInstallationSchedule(): ?WindowsUpdateInstallScheduleType {
        return $this->installationSchedule;
    }

    /**
     * Gets the microsoftUpdateServiceAllowed property value. Allow Microsoft Update Service
     * @return bool|null
    */
    public function getMicrosoftUpdateServiceAllowed(): ?bool {
        return $this->microsoftUpdateServiceAllowed;
    }

    /**
     * Gets the prereleaseFeatures property value. Possible values for pre-release features.
     * @return PrereleaseFeatures|null
    */
    public function getPrereleaseFeatures(): ?PrereleaseFeatures {
        return $this->prereleaseFeatures;
    }

    /**
     * Gets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days
     * @return int|null
    */
    public function getQualityUpdatesDeferralPeriodInDays(): ?int {
        return $this->qualityUpdatesDeferralPeriodInDays;
    }

    /**
     * Gets the qualityUpdatesPaused property value. Pause Quality Updates
     * @return bool|null
    */
    public function getQualityUpdatesPaused(): ?bool {
        return $this->qualityUpdatesPaused;
    }

    /**
     * Gets the qualityUpdatesPauseExpiryDateTime property value. Quality Updates Pause Expiry datetime
     * @return DateTime|null
    */
    public function getQualityUpdatesPauseExpiryDateTime(): ?DateTime {
        return $this->qualityUpdatesPauseExpiryDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('automaticUpdateMode', $this->automaticUpdateMode);
        $writer->writeEnumValue('businessReadyUpdatesOnly', $this->businessReadyUpdatesOnly);
        $writer->writeEnumValue('deliveryOptimizationMode', $this->deliveryOptimizationMode);
        $writer->writeBooleanValue('driversExcluded', $this->driversExcluded);
        $writer->writeIntegerValue('featureUpdatesDeferralPeriodInDays', $this->featureUpdatesDeferralPeriodInDays);
        $writer->writeBooleanValue('featureUpdatesPaused', $this->featureUpdatesPaused);
        $writer->writeDateTimeValue('featureUpdatesPauseExpiryDateTime', $this->featureUpdatesPauseExpiryDateTime);
        $writer->writeObjectValue('installationSchedule', $this->installationSchedule);
        $writer->writeBooleanValue('microsoftUpdateServiceAllowed', $this->microsoftUpdateServiceAllowed);
        $writer->writeEnumValue('prereleaseFeatures', $this->prereleaseFeatures);
        $writer->writeIntegerValue('qualityUpdatesDeferralPeriodInDays', $this->qualityUpdatesDeferralPeriodInDays);
        $writer->writeBooleanValue('qualityUpdatesPaused', $this->qualityUpdatesPaused);
        $writer->writeDateTimeValue('qualityUpdatesPauseExpiryDateTime', $this->qualityUpdatesPauseExpiryDateTime);
    }

    /**
     * Sets the automaticUpdateMode property value. Possible values for automatic update mode.
     *  @param AutomaticUpdateMode|null $value Value to set for the automaticUpdateMode property.
    */
    public function setAutomaticUpdateMode(?AutomaticUpdateMode $value ): void {
        $this->automaticUpdateMode = $value;
    }

    /**
     * Sets the businessReadyUpdatesOnly property value. Which branch devices will receive their updates from
     *  @param WindowsUpdateType|null $value Value to set for the businessReadyUpdatesOnly property.
    */
    public function setBusinessReadyUpdatesOnly(?WindowsUpdateType $value ): void {
        $this->businessReadyUpdatesOnly = $value;
    }

    /**
     * Sets the deliveryOptimizationMode property value. Delivery optimization mode for peer distribution
     *  @param WindowsDeliveryOptimizationMode|null $value Value to set for the deliveryOptimizationMode property.
    */
    public function setDeliveryOptimizationMode(?WindowsDeliveryOptimizationMode $value ): void {
        $this->deliveryOptimizationMode = $value;
    }

    /**
     * Sets the driversExcluded property value. Exclude Windows update Drivers
     *  @param bool|null $value Value to set for the driversExcluded property.
    */
    public function setDriversExcluded(?bool $value ): void {
        $this->driversExcluded = $value;
    }

    /**
     * Sets the featureUpdatesDeferralPeriodInDays property value. Defer Feature Updates by these many days
     *  @param int|null $value Value to set for the featureUpdatesDeferralPeriodInDays property.
    */
    public function setFeatureUpdatesDeferralPeriodInDays(?int $value ): void {
        $this->featureUpdatesDeferralPeriodInDays = $value;
    }

    /**
     * Sets the featureUpdatesPaused property value. Pause Feature Updates
     *  @param bool|null $value Value to set for the featureUpdatesPaused property.
    */
    public function setFeatureUpdatesPaused(?bool $value ): void {
        $this->featureUpdatesPaused = $value;
    }

    /**
     * Sets the featureUpdatesPauseExpiryDateTime property value. Feature Updates Pause Expiry datetime
     *  @param DateTime|null $value Value to set for the featureUpdatesPauseExpiryDateTime property.
    */
    public function setFeatureUpdatesPauseExpiryDateTime(?DateTime $value ): void {
        $this->featureUpdatesPauseExpiryDateTime = $value;
    }

    /**
     * Sets the installationSchedule property value. Installation schedule
     *  @param WindowsUpdateInstallScheduleType|null $value Value to set for the installationSchedule property.
    */
    public function setInstallationSchedule(?WindowsUpdateInstallScheduleType $value ): void {
        $this->installationSchedule = $value;
    }

    /**
     * Sets the microsoftUpdateServiceAllowed property value. Allow Microsoft Update Service
     *  @param bool|null $value Value to set for the microsoftUpdateServiceAllowed property.
    */
    public function setMicrosoftUpdateServiceAllowed(?bool $value ): void {
        $this->microsoftUpdateServiceAllowed = $value;
    }

    /**
     * Sets the prereleaseFeatures property value. Possible values for pre-release features.
     *  @param PrereleaseFeatures|null $value Value to set for the prereleaseFeatures property.
    */
    public function setPrereleaseFeatures(?PrereleaseFeatures $value ): void {
        $this->prereleaseFeatures = $value;
    }

    /**
     * Sets the qualityUpdatesDeferralPeriodInDays property value. Defer Quality Updates by these many days
     *  @param int|null $value Value to set for the qualityUpdatesDeferralPeriodInDays property.
    */
    public function setQualityUpdatesDeferralPeriodInDays(?int $value ): void {
        $this->qualityUpdatesDeferralPeriodInDays = $value;
    }

    /**
     * Sets the qualityUpdatesPaused property value. Pause Quality Updates
     *  @param bool|null $value Value to set for the qualityUpdatesPaused property.
    */
    public function setQualityUpdatesPaused(?bool $value ): void {
        $this->qualityUpdatesPaused = $value;
    }

    /**
     * Sets the qualityUpdatesPauseExpiryDateTime property value. Quality Updates Pause Expiry datetime
     *  @param DateTime|null $value Value to set for the qualityUpdatesPauseExpiryDateTime property.
    */
    public function setQualityUpdatesPauseExpiryDateTime(?DateTime $value ): void {
        $this->qualityUpdatesPauseExpiryDateTime = $value;
    }

}
