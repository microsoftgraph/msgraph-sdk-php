<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScheduledActionForRule extends Entity implements Parsable 
{
    /**
     * @var string|null $ruleName Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
    */
    private ?string $ruleName = null;
    
    /**
     * @var array<DeviceComplianceActionItem>|null $scheduledActionConfigurations The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
    */
    private ?array $scheduledActionConfigurations = null;
    
    /**
     * Instantiates a new deviceComplianceScheduledActionForRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceScheduledActionForRule');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ruleName' => fn(ParseNode $n) => $o->setRuleName($n->getStringValue()),
            'scheduledActionConfigurations' => fn(ParseNode $n) => $o->setScheduledActionConfigurations($n->getCollectionOfObjectValues([DeviceComplianceActionItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the ruleName property value. Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Gets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
     * @return array<DeviceComplianceActionItem>|null
    */
    public function getScheduledActionConfigurations(): ?array {
        return $this->scheduledActionConfigurations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('ruleName', $this->ruleName);
        $writer->writeCollectionOfObjectValues('scheduledActionConfigurations', $this->scheduledActionConfigurations);
    }

    /**
     * Sets the ruleName property value. Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
     *  @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value ): void {
        $this->ruleName = $value;
    }

    /**
     * Sets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action.
     *  @param array<DeviceComplianceActionItem>|null $value Value to set for the scheduledActionConfigurations property.
    */
    public function setScheduledActionConfigurations(?array $value ): void {
        $this->scheduledActionConfigurations = $value;
    }

}
