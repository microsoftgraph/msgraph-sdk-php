<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotAdminLimitedMode extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotAdminLimitedMode and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotAdminLimitedMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotAdminLimitedMode {
        return new CopilotAdminLimitedMode();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'isEnabledForGroup' => fn(ParseNode $n) => $o->setIsEnabledForGroup($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the groupId property value. The ID of a Microsoft Entra group, for which the value of isEnabledForGroup is applied. The default value is null. If isEnabledForGroup is set to true, the groupId value must be provided for the Copilot limited mode in Teams meetings to be enabled for the members of the group. Optional.
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the isEnabledForGroup property value. Enables the user to be in limited mode for Copilot in Teams meetings. When copilotAdminLimitedMode=true, users in this mode can ask any questions, but Copilot doesn't respond to certain questions related to inferring emotions, behavior, or judgments. When copilotAdminLimitedMode=false, it responds to all types of questions grounded to the meeting conversation. The default value is false.
     * @return bool|null
    */
    public function getIsEnabledForGroup(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledForGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledForGroup'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeBooleanValue('isEnabledForGroup', $this->getIsEnabledForGroup());
    }

    /**
     * Sets the groupId property value. The ID of a Microsoft Entra group, for which the value of isEnabledForGroup is applied. The default value is null. If isEnabledForGroup is set to true, the groupId value must be provided for the Copilot limited mode in Teams meetings to be enabled for the members of the group. Optional.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the isEnabledForGroup property value. Enables the user to be in limited mode for Copilot in Teams meetings. When copilotAdminLimitedMode=true, users in this mode can ask any questions, but Copilot doesn't respond to certain questions related to inferring emotions, behavior, or judgments. When copilotAdminLimitedMode=false, it responds to all types of questions grounded to the meeting conversation. The default value is false.
     * @param bool|null $value Value to set for the isEnabledForGroup property.
    */
    public function setIsEnabledForGroup(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForGroup', $value);
    }

}
