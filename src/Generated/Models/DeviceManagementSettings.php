<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $deviceComplianceCheckinThresholdDays The number of days a device is allowed to go without checking in to remain compliant.
    */
    private ?int $deviceComplianceCheckinThresholdDays = null;
    
    /**
     * @var bool|null $isScheduledActionEnabled Is feature enabled or not for scheduled action for rule.
    */
    private ?bool $isScheduledActionEnabled = null;
    
    /**
     * @var bool|null $secureByDefault Device should be noncompliant when there is no compliance policy targeted when this is true
    */
    private ?bool $secureByDefault = null;
    
    /**
     * Instantiates a new deviceManagementSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettings {
        return new DeviceManagementSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     * @return int|null
    */
    public function getDeviceComplianceCheckinThresholdDays(): ?int {
        return $this->deviceComplianceCheckinThresholdDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceComplianceCheckinThresholdDays' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceCheckinThresholdDays($n->getIntegerValue()); },
            'isScheduledActionEnabled' => function (ParseNode $n) use ($o) { $o->setIsScheduledActionEnabled($n->getBooleanValue()); },
            'secureByDefault' => function (ParseNode $n) use ($o) { $o->setSecureByDefault($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     * @return bool|null
    */
    public function getIsScheduledActionEnabled(): ?bool {
        return $this->isScheduledActionEnabled;
    }

    /**
     * Gets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     * @return bool|null
    */
    public function getSecureByDefault(): ?bool {
        return $this->secureByDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceComplianceCheckinThresholdDays', $this->deviceComplianceCheckinThresholdDays);
        $writer->writeBooleanValue('isScheduledActionEnabled', $this->isScheduledActionEnabled);
        $writer->writeBooleanValue('secureByDefault', $this->secureByDefault);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     *  @param int|null $value Value to set for the deviceComplianceCheckinThresholdDays property.
    */
    public function setDeviceComplianceCheckinThresholdDays(?int $value ): void {
        $this->deviceComplianceCheckinThresholdDays = $value;
    }

    /**
     * Sets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     *  @param bool|null $value Value to set for the isScheduledActionEnabled property.
    */
    public function setIsScheduledActionEnabled(?bool $value ): void {
        $this->isScheduledActionEnabled = $value;
    }

    /**
     * Sets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     *  @param bool|null $value Value to set for the secureByDefault property.
    */
    public function setSecureByDefault(?bool $value ): void {
        $this->secureByDefault = $value;
    }

}
