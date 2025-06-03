<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Schedule\TimeCards\ClockIn;

use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ClockInPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ClockInPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClockInPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClockInPostRequestBody {
        return new ClockInPostRequestBody();
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
            'isAtApprovedLocation' => fn(ParseNode $n) => $o->setIsAtApprovedLocation($n->getBooleanValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'onBehalfOfUserId' => fn(ParseNode $n) => $o->setOnBehalfOfUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAtApprovedLocation property value. The isAtApprovedLocation property
     * @return bool|null
    */
    public function getIsAtApprovedLocation(): ?bool {
        $val = $this->getBackingStore()->get('isAtApprovedLocation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAtApprovedLocation'");
    }

    /**
     * Gets the notes property value. The notes property
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the onBehalfOfUserId property value. The onBehalfOfUserId property
     * @return string|null
    */
    public function getOnBehalfOfUserId(): ?string {
        $val = $this->getBackingStore()->get('onBehalfOfUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onBehalfOfUserId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isAtApprovedLocation', $this->getIsAtApprovedLocation());
        $writer->writeObjectValue('notes', $this->getNotes());
        $writer->writeStringValue('onBehalfOfUserId', $this->getOnBehalfOfUserId());
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
     * Sets the isAtApprovedLocation property value. The isAtApprovedLocation property
     * @param bool|null $value Value to set for the isAtApprovedLocation property.
    */
    public function setIsAtApprovedLocation(?bool $value): void {
        $this->getBackingStore()->set('isAtApprovedLocation', $value);
    }

    /**
     * Sets the notes property value. The notes property
     * @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the onBehalfOfUserId property value. The onBehalfOfUserId property
     * @param string|null $value Value to set for the onBehalfOfUserId property.
    */
    public function setOnBehalfOfUserId(?string $value): void {
        $this->getBackingStore()->set('onBehalfOfUserId', $value);
    }

}
