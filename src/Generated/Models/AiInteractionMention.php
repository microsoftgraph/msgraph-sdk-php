<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AiInteractionMention implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AiInteractionMention and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionMention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionMention {
        return new AiInteractionMention();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'mentioned' => fn(ParseNode $n) => $o->setMentioned($n->getObjectValue([AiInteractionMentionedIdentitySet::class, 'createFromDiscriminatorValue'])),
            'mentionId' => fn(ParseNode $n) => $o->setMentionId($n->getIntegerValue()),
            'mentionText' => fn(ParseNode $n) => $o->setMentionText($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the mentioned property value. The mentioned property
     * @return AiInteractionMentionedIdentitySet|null
    */
    public function getMentioned(): ?AiInteractionMentionedIdentitySet {
        $val = $this->getBackingStore()->get('mentioned');
        if (is_null($val) || $val instanceof AiInteractionMentionedIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentioned'");
    }

    /**
     * Gets the mentionId property value. The mentionId property
     * @return int|null
    */
    public function getMentionId(): ?int {
        $val = $this->getBackingStore()->get('mentionId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentionId'");
    }

    /**
     * Gets the mentionText property value. The mentionText property
     * @return string|null
    */
    public function getMentionText(): ?string {
        $val = $this->getBackingStore()->get('mentionText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentionText'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('mentioned', $this->getMentioned());
        $writer->writeIntegerValue('mentionId', $this->getMentionId());
        $writer->writeStringValue('mentionText', $this->getMentionText());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the mentioned property value. The mentioned property
     * @param AiInteractionMentionedIdentitySet|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?AiInteractionMentionedIdentitySet $value): void {
        $this->getBackingStore()->set('mentioned', $value);
    }

    /**
     * Sets the mentionId property value. The mentionId property
     * @param int|null $value Value to set for the mentionId property.
    */
    public function setMentionId(?int $value): void {
        $this->getBackingStore()->set('mentionId', $value);
    }

    /**
     * Sets the mentionText property value. The mentionText property
     * @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value): void {
        $this->getBackingStore()->set('mentionText', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
