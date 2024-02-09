<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\SendVirtualAppointmentSms;

use Microsoft\Graph\Generated\Models\AttendeeNotificationInfo;
use Microsoft\Graph\Generated\Models\VirtualAppointmentMessageType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SendVirtualAppointmentSmsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SendVirtualAppointmentSmsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendVirtualAppointmentSmsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendVirtualAppointmentSmsPostRequestBody {
        return new SendVirtualAppointmentSmsPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attendees property value. The attendees property
     * @return array<AttendeeNotificationInfo>|null
    */
    public function getAttendees(): ?array {
        $val = $this->getBackingStore()->get('attendees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttendeeNotificationInfo::class);
            /** @var array<AttendeeNotificationInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendees'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendees' => fn(ParseNode $n) => $o->setAttendees($n->getCollectionOfObjectValues([AttendeeNotificationInfo::class, 'createFromDiscriminatorValue'])),
            'messageType' => fn(ParseNode $n) => $o->setMessageType($n->getEnumValue(VirtualAppointmentMessageType::class)),
        ];
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return VirtualAppointmentMessageType|null
    */
    public function getMessageType(): ?VirtualAppointmentMessageType {
        $val = $this->getBackingStore()->get('messageType');
        if (is_null($val) || $val instanceof VirtualAppointmentMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendees', $this->getAttendees());
        $writer->writeEnumValue('messageType', $this->getMessageType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attendees property value. The attendees property
     * @param array<AttendeeNotificationInfo>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value): void {
        $this->getBackingStore()->set('attendees', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the messageType property value. The messageType property
     * @param VirtualAppointmentMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?VirtualAppointmentMessageType $value): void {
        $this->getBackingStore()->set('messageType', $value);
    }

}
