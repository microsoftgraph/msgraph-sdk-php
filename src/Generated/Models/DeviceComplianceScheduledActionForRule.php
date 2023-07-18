<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Scheduled Action for Rule
*/
class DeviceComplianceScheduledActionForRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceComplianceScheduledActionForRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScheduledActionForRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScheduledActionForRule {
        return new DeviceComplianceScheduledActionForRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleName' => fn(ParseNode $n) => $o->setRuleName($n->getStringValue()),
            'scheduledActionConfigurations' => fn(ParseNode $n) => $o->setScheduledActionConfigurations($n->getCollectionOfObjectValues([DeviceComplianceActionItem::class, 'createFromDiscriminatorValue'])),
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
     * Gets the ruleName property value. Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
     * @return string|null
    */
    public function getRuleName(): ?string {
        $val = $this->getBackingStore()->get('ruleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleName'");
    }

    /**
     * Gets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
     * @return array<DeviceComplianceActionItem>|null
    */
    public function getScheduledActionConfigurations(): ?array {
        $val = $this->getBackingStore()->get('scheduledActionConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceComplianceActionItem::class);
            /** @var array<DeviceComplianceActionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledActionConfigurations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('ruleName', $this->getRuleName());
        $writer->writeCollectionOfObjectValues('scheduledActionConfigurations', $this->getScheduledActionConfigurations());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ruleName property value. Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
     * @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value): void {
        $this->getBackingStore()->set('ruleName', $value);
    }

    /**
     * Sets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
     * @param array<DeviceComplianceActionItem>|null $value Value to set for the scheduledActionConfigurations property.
    */
    public function setScheduledActionConfigurations(?array $value): void {
        $this->getBackingStore()->set('scheduledActionConfigurations', $value);
    }

}
