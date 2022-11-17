<?php

namespace Microsoft\Graph\Generated\Users\Item\GetMailTips;

use Microsoft\Graph\Generated\Models\MailTipsType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GetMailTipsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new getMailTipsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMailTipsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetMailTipsPostRequestBody {
        return new GetMailTipsPostRequestBody();
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
     * Gets the emailAddresses property value. The EmailAddresses property
     * @return array<string>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->getBackingStore()->get('emailAddresses');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailAddresses' => fn(ParseNode $n) => $o->setEmailAddresses($n->getCollectionOfPrimitiveValues()),
            'mailTipsOptions' => fn(ParseNode $n) => $o->setMailTipsOptions($n->getEnumValue(MailTipsType::class)),
        ];
    }

    /**
     * Gets the mailTipsOptions property value. The MailTipsOptions property
     * @return MailTipsType|null
    */
    public function getMailTipsOptions(): ?MailTipsType {
        return $this->getBackingStore()->get('mailTipsOptions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('emailAddresses', $this->getEmailAddresses());
        $writer->writeEnumValue('mailTipsOptions', $this->getMailTipsOptions());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the emailAddresses property value. The EmailAddresses property
     *  @param array<string>|null $value Value to set for the EmailAddresses property.
    */
    public function setEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('emailAddresses', $value);
    }

    /**
     * Sets the mailTipsOptions property value. The MailTipsOptions property
     *  @param MailTipsType|null $value Value to set for the MailTipsOptions property.
    */
    public function setMailTipsOptions(?MailTipsType $value): void {
        $this->getBackingStore()->set('mailTipsOptions', $value);
    }

}
