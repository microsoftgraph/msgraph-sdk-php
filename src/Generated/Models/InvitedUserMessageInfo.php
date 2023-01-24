<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InvitedUserMessageInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new invitedUserMessageInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitedUserMessageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitedUserMessageInfo {
        return new InvitedUserMessageInfo();
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
     * Gets the ccRecipients property value. Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
     * @return array<Recipient>|null
    */
    public function getCcRecipients(): ?array {
        return $this->getBackingStore()->get('ccRecipients');
    }

    /**
     * Gets the customizedMessageBody property value. Customized message body you want to send if you don't want the default message.
     * @return string|null
    */
    public function getCustomizedMessageBody(): ?string {
        return $this->getBackingStore()->get('customizedMessageBody');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ccRecipients' => fn(ParseNode $n) => $o->setCcRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'customizedMessageBody' => fn(ParseNode $n) => $o->setCustomizedMessageBody($n->getStringValue()),
            'messageLanguage' => fn(ParseNode $n) => $o->setMessageLanguage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the messageLanguage property value. The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
     * @return string|null
    */
    public function getMessageLanguage(): ?string {
        return $this->getBackingStore()->get('messageLanguage');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->getCcRecipients());
        $writer->writeStringValue('customizedMessageBody', $this->getCustomizedMessageBody());
        $writer->writeStringValue('messageLanguage', $this->getMessageLanguage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the ccRecipients property value. Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
     * @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value): void {
        $this->getBackingStore()->set('ccRecipients', $value);
    }

    /**
     * Sets the customizedMessageBody property value. Customized message body you want to send if you don't want the default message.
     * @param string|null $value Value to set for the customizedMessageBody property.
    */
    public function setCustomizedMessageBody(?string $value): void {
        $this->getBackingStore()->set('customizedMessageBody', $value);
    }

    /**
     * Sets the messageLanguage property value. The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
     * @param string|null $value Value to set for the messageLanguage property.
    */
    public function setMessageLanguage(?string $value): void {
        $this->getBackingStore()->set('messageLanguage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
