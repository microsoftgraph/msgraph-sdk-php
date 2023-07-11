<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Scheduled Action Configuration
*/
class DeviceComplianceActionItem extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('actionType');
        if (is_null($val) || $val instanceof DeviceComplianceActionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(DeviceComplianceActionType::class)),
            'gracePeriodHours' => fn(ParseNode $n) => $o->setGracePeriodHours($n->getIntegerValue()),
            'notificationMessageCCList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotificationMessageCCList($val);
            },
            'notificationTemplateId' => fn(ParseNode $n) => $o->setNotificationTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the gracePeriodHours property value. Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     * @return int|null
    */
    public function getGracePeriodHours(): ?int {
        $val = $this->getBackingStore()->get('gracePeriodHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodHours'");
    }

    /**
     * Gets the notificationMessageCCList property value. A list of group IDs to speicify who to CC this notification message to.
     * @return array<string>|null
    */
    public function getNotificationMessageCCList(): ?array {
        $val = $this->getBackingStore()->get('notificationMessageCCList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationMessageCCList'");
    }

    /**
     * Gets the notificationTemplateId property value. What notification Message template to use
     * @return string|null
    */
    public function getNotificationTemplateId(): ?string {
        $val = $this->getBackingStore()->get('notificationTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationTemplateId'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
