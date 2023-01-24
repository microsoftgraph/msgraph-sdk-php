<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Scheduled Action Configuration
*/
class DeviceComplianceActionItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceComplianceActionItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceActionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceActionItem {
        return new DeviceComplianceActionItem();
    }

    /**
     * Gets the actionType property value. Scheduled Action Type Enum
     * @return DeviceComplianceActionType|null
    */
    public function getActionType(): ?DeviceComplianceActionType {
        return $this->getBackingStore()->get('actionType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(DeviceComplianceActionType::class)),
            'gracePeriodHours' => fn(ParseNode $n) => $o->setGracePeriodHours($n->getIntegerValue()),
            'notificationMessageCCList' => fn(ParseNode $n) => $o->setNotificationMessageCCList($n->getCollectionOfPrimitiveValues()),
            'notificationTemplateId' => fn(ParseNode $n) => $o->setNotificationTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the gracePeriodHours property value. Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     * @return int|null
    */
    public function getGracePeriodHours(): ?int {
        return $this->getBackingStore()->get('gracePeriodHours');
    }

    /**
     * Gets the notificationMessageCCList property value. A list of group IDs to speicify who to CC this notification message to.
     * @return array<string>|null
    */
    public function getNotificationMessageCCList(): ?array {
        return $this->getBackingStore()->get('notificationMessageCCList');
    }

    /**
     * Gets the notificationTemplateId property value. What notification Message template to use
     * @return string|null
    */
    public function getNotificationTemplateId(): ?string {
        return $this->getBackingStore()->get('notificationTemplateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeIntegerValue('gracePeriodHours', $this->getGracePeriodHours());
        $writer->writeCollectionOfPrimitiveValues('notificationMessageCCList', $this->getNotificationMessageCCList());
        $writer->writeStringValue('notificationTemplateId', $this->getNotificationTemplateId());
    }

    /**
     * Sets the actionType property value. Scheduled Action Type Enum
     * @param DeviceComplianceActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?DeviceComplianceActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the gracePeriodHours property value. Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     * @param int|null $value Value to set for the gracePeriodHours property.
    */
    public function setGracePeriodHours(?int $value): void {
        $this->getBackingStore()->set('gracePeriodHours', $value);
    }

    /**
     * Sets the notificationMessageCCList property value. A list of group IDs to speicify who to CC this notification message to.
     * @param array<string>|null $value Value to set for the notificationMessageCCList property.
    */
    public function setNotificationMessageCCList(?array $value): void {
        $this->getBackingStore()->set('notificationMessageCCList', $value);
    }

    /**
     * Sets the notificationTemplateId property value. What notification Message template to use
     * @param string|null $value Value to set for the notificationTemplateId property.
    */
    public function setNotificationTemplateId(?string $value): void {
        $this->getBackingStore()->set('notificationTemplateId', $value);
    }

}
