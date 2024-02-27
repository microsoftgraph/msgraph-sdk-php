<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AutomaticRepliesSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AutomaticRepliesSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomaticRepliesSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomaticRepliesSetting {
        return new AutomaticRepliesSetting();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the externalAudience property value. The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     * @return ExternalAudienceScope|null
    */
    public function getExternalAudience(): ?ExternalAudienceScope {
        $val = $this->getBackingStore()->get('externalAudience');
        if (is_null($val) || $val instanceof ExternalAudienceScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalAudience'");
    }

    /**
     * Gets the externalReplyMessage property value. The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
     * @return string|null
    */
    public function getExternalReplyMessage(): ?string {
        $val = $this->getBackingStore()->get('externalReplyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalReplyMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalAudience' => fn(ParseNode $n) => $o->setExternalAudience($n->getEnumValue(ExternalAudienceScope::class)),
            'externalReplyMessage' => fn(ParseNode $n) => $o->setExternalReplyMessage($n->getStringValue()),
            'internalReplyMessage' => fn(ParseNode $n) => $o->setInternalReplyMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduledEndDateTime' => fn(ParseNode $n) => $o->setScheduledEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'scheduledStartDateTime' => fn(ParseNode $n) => $o->setScheduledStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AutomaticRepliesStatus::class)),
        ];
    }

    /**
     * Gets the internalReplyMessage property value. The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
     * @return string|null
    */
    public function getInternalReplyMessage(): ?string {
        $val = $this->getBackingStore()->get('internalReplyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalReplyMessage'");
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
     * Gets the scheduledEndDateTime property value. The date and time that automatic replies are set to end, if Status is set to Scheduled.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('scheduledEndDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledEndDateTime'");
    }

    /**
     * Gets the scheduledStartDateTime property value. The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('scheduledStartDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledStartDateTime'");
    }

    /**
     * Gets the status property value. Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     * @return AutomaticRepliesStatus|null
    */
    public function getStatus(): ?AutomaticRepliesStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AutomaticRepliesStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('externalAudience', $this->getExternalAudience());
        $writer->writeStringValue('externalReplyMessage', $this->getExternalReplyMessage());
        $writer->writeStringValue('internalReplyMessage', $this->getInternalReplyMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('scheduledEndDateTime', $this->getScheduledEndDateTime());
        $writer->writeObjectValue('scheduledStartDateTime', $this->getScheduledStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the externalAudience property value. The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     * @param ExternalAudienceScope|null $value Value to set for the externalAudience property.
    */
    public function setExternalAudience(?ExternalAudienceScope $value): void {
        $this->getBackingStore()->set('externalAudience', $value);
    }

    /**
     * Sets the externalReplyMessage property value. The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
     * @param string|null $value Value to set for the externalReplyMessage property.
    */
    public function setExternalReplyMessage(?string $value): void {
        $this->getBackingStore()->set('externalReplyMessage', $value);
    }

    /**
     * Sets the internalReplyMessage property value. The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
     * @param string|null $value Value to set for the internalReplyMessage property.
    */
    public function setInternalReplyMessage(?string $value): void {
        $this->getBackingStore()->set('internalReplyMessage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduledEndDateTime property value. The date and time that automatic replies are set to end, if Status is set to Scheduled.
     * @param DateTimeTimeZone|null $value Value to set for the scheduledEndDateTime property.
    */
    public function setScheduledEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('scheduledEndDateTime', $value);
    }

    /**
     * Sets the scheduledStartDateTime property value. The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     * @param DateTimeTimeZone|null $value Value to set for the scheduledStartDateTime property.
    */
    public function setScheduledStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('scheduledStartDateTime', $value);
    }

    /**
     * Sets the status property value. Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     * @param AutomaticRepliesStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AutomaticRepliesStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
