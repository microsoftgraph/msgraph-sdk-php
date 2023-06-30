<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChatMessageMention implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new chatMessageMention and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageMention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageMention {
        return new ChatMessageMention();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'mentioned' => fn(ParseNode $n) => $o->setMentioned($n->getObjectValue([ChatMessageMentionedIdentitySet::class, 'createFromDiscriminatorValue'])),
            'mentionText' => fn(ParseNode $n) => $o->setMentionText($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body.
     * @return int|null
    */
    public function getId(): ?int {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the mentioned property value. The entity (user, application, team, or channel) that was @mentioned.
     * @return ChatMessageMentionedIdentitySet|null
    */
    public function getMentioned(): ?ChatMessageMentionedIdentitySet {
        $val = $this->getBackingStore()->get('mentioned');
        if (is_null($val) || $val instanceof ChatMessageMentionedIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentioned'");
    }

    /**
     * Gets the mentionText property value. String used to represent the mention. For example, a user's display name, a team name.
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
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeObjectValue('mentioned', $this->getMentioned());
        $writer->writeStringValue('mentionText', $this->getMentionText());
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
     * Sets the id property value. Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body.
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the mentioned property value. The entity (user, application, team, or channel) that was @mentioned.
     * @param ChatMessageMentionedIdentitySet|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?ChatMessageMentionedIdentitySet $value): void {
        $this->getBackingStore()->set('mentioned', $value);
    }

    /**
     * Sets the mentionText property value. String used to represent the mention. For example, a user's display name, a team name.
     * @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value): void {
        $this->getBackingStore()->set('mentionText', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
