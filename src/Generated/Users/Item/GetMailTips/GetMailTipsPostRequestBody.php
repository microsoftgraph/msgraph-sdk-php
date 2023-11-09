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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the EmailAddresses property value. The EmailAddresses property
     * @return array<string>|null
    */
    public function getEmailAddresses(): ?array {
        $val = $this->getBackingStore()->get('emailAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddresses'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'EmailAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailAddresses($val);
            },
            'MailTipsOptions' => fn(ParseNode $n) => $o->setMailTipsOptions($n->getEnumValue(MailTipsType::class)),
        ];
    }

    /**
     * Gets the MailTipsOptions property value. The MailTipsOptions property
     * @return MailTipsType|null
    */
    public function getMailTipsOptions(): ?MailTipsType {
        $val = $this->getBackingStore()->get('mailTipsOptions');
        if (is_null($val) || $val instanceof MailTipsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailTipsOptions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('EmailAddresses', $this->getEmailAddresses());
        $writer->writeEnumValue('MailTipsOptions', $this->getMailTipsOptions());
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
     * Sets the EmailAddresses property value. The EmailAddresses property
     * @param array<string>|null $value Value to set for the EmailAddresses property.
    */
    public function setEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('emailAddresses', $value);
    }

    /**
     * Sets the MailTipsOptions property value. The MailTipsOptions property
     * @param MailTipsType|null $value Value to set for the MailTipsOptions property.
    */
    public function setMailTipsOptions(?MailTipsType $value): void {
        $this->getBackingStore()->set('mailTipsOptions', $value);
    }

}
