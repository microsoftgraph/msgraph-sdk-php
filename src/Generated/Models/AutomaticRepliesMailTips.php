<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AutomaticRepliesMailTips implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new automaticRepliesMailTips and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomaticRepliesMailTips
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomaticRepliesMailTips {
        return new AutomaticRepliesMailTips();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'messageLanguage' => fn(ParseNode $n) => $o->setMessageLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduledEndTime' => fn(ParseNode $n) => $o->setScheduledEndTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'scheduledStartTime' => fn(ParseNode $n) => $o->setScheduledStartTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the message property value. The automatic reply message.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the messageLanguage property value. The language that the automatic reply message is in.
     * @return LocaleInfo|null
    */
    public function getMessageLanguage(): ?LocaleInfo {
        return $this->getBackingStore()->get('messageLanguage');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the scheduledEndTime property value. The date and time that automatic replies are set to end.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledEndTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('scheduledEndTime');
    }

    /**
     * Gets the scheduledStartTime property value. The date and time that automatic replies are set to begin.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledStartTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('scheduledStartTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeObjectValue('messageLanguage', $this->getMessageLanguage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('scheduledEndTime', $this->getScheduledEndTime());
        $writer->writeObjectValue('scheduledStartTime', $this->getScheduledStartTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the message property value. The automatic reply message.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the messageLanguage property value. The language that the automatic reply message is in.
     * @param LocaleInfo|null $value Value to set for the messageLanguage property.
    */
    public function setMessageLanguage(?LocaleInfo $value): void {
        $this->getBackingStore()->set('messageLanguage', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the scheduledEndTime property value. The date and time that automatic replies are set to end.
     * @param DateTimeTimeZone|null $value Value to set for the scheduledEndTime property.
    */
    public function setScheduledEndTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('scheduledEndTime', $value);
    }

    /**
     * Sets the scheduledStartTime property value. The date and time that automatic replies are set to begin.
     * @param DateTimeTimeZone|null $value Value to set for the scheduledStartTime property.
    */
    public function setScheduledStartTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('scheduledStartTime', $value);
    }

}
