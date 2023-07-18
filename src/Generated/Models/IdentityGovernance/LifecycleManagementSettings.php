<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\EmailSettings;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LifecycleManagementSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new lifecycleManagementSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecycleManagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecycleManagementSettings {
        return new LifecycleManagementSettings();
    }

    /**
     * Gets the emailSettings property value. The emailSettings property
     * @return EmailSettings|null
    */
    public function getEmailSettings(): ?EmailSettings {
        $val = $this->getBackingStore()->get('emailSettings');
        if (is_null($val) || $val instanceof EmailSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailSettings' => fn(ParseNode $n) => $o->setEmailSettings($n->getObjectValue([EmailSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'workflowScheduleIntervalInHours' => fn(ParseNode $n) => $o->setWorkflowScheduleIntervalInHours($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the workflowScheduleIntervalInHours property value. The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
     * @return int|null
    */
    public function getWorkflowScheduleIntervalInHours(): ?int {
        $val = $this->getBackingStore()->get('workflowScheduleIntervalInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowScheduleIntervalInHours'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('emailSettings', $this->getEmailSettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('workflowScheduleIntervalInHours', $this->getWorkflowScheduleIntervalInHours());
    }

    /**
     * Sets the emailSettings property value. The emailSettings property
     * @param EmailSettings|null $value Value to set for the emailSettings property.
    */
    public function setEmailSettings(?EmailSettings $value): void {
        $this->getBackingStore()->set('emailSettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the workflowScheduleIntervalInHours property value. The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
     * @param int|null $value Value to set for the workflowScheduleIntervalInHours property.
    */
    public function setWorkflowScheduleIntervalInHours(?int $value): void {
        $this->getBackingStore()->set('workflowScheduleIntervalInHours', $value);
    }

}
