<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendar\Events\Item\Instances\Item\Forward;

use Microsoft\Graph\Generated\Models\Recipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ForwardPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ForwardPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardPostRequestBody {
        return new ForwardPostRequestBody();
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
     * Gets the Comment property value. The Comment property
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'ToRecipients' => fn(ParseNode $n) => $o->setToRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ToRecipients property value. The ToRecipients property
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        $val = $this->getBackingStore()->get('toRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toRecipients'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Comment', $this->getComment());
        $writer->writeCollectionOfObjectValues('ToRecipients', $this->getToRecipients());
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
     * Sets the Comment property value. The Comment property
     * @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the ToRecipients property value. The ToRecipients property
     * @param array<Recipient>|null $value Value to set for the ToRecipients property.
    */
    public function setToRecipients(?array $value): void {
        $this->getBackingStore()->set('toRecipients', $value);
    }

}
