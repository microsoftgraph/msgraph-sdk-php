<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InsightsSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new InsightsSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InsightsSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InsightsSettings {
        return new InsightsSettings();
    }

    /**
     * Gets the disabledForGroup property value. The ID of a Microsoft Entra group, of which the specified type of insights are disabled for its members. The default value is null. Optional.
     * @return string|null
    */
    public function getDisabledForGroup(): ?string {
        $val = $this->getBackingStore()->get('disabledForGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disabledForGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'disabledForGroup' => fn(ParseNode $n) => $o->setDisabledForGroup($n->getStringValue()),
            'isEnabledInOrganization' => fn(ParseNode $n) => $o->setIsEnabledInOrganization($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabledInOrganization property value. true if insights of the specified type are enabled for the organization; false if insights of the specified type are disabled for all users without exceptions. The default value is true. Optional.
     * @return bool|null
    */
    public function getIsEnabledInOrganization(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledInOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledInOrganization'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('disabledForGroup', $this->getDisabledForGroup());
        $writer->writeBooleanValue('isEnabledInOrganization', $this->getIsEnabledInOrganization());
    }

    /**
     * Sets the disabledForGroup property value. The ID of a Microsoft Entra group, of which the specified type of insights are disabled for its members. The default value is null. Optional.
     * @param string|null $value Value to set for the disabledForGroup property.
    */
    public function setDisabledForGroup(?string $value): void {
        $this->getBackingStore()->set('disabledForGroup', $value);
    }

    /**
     * Sets the isEnabledInOrganization property value. true if insights of the specified type are enabled for the organization; false if insights of the specified type are disabled for all users without exceptions. The default value is true. Optional.
     * @param bool|null $value Value to set for the isEnabledInOrganization property.
    */
    public function setIsEnabledInOrganization(?bool $value): void {
        $this->getBackingStore()->set('isEnabledInOrganization', $value);
    }

}
