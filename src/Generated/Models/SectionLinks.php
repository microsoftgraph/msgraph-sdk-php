<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SectionLinks implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SectionLinks and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SectionLinks
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SectionLinks {
        return new SectionLinks();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'oneNoteClientUrl' => fn(ParseNode $n) => $o->setOneNoteClientUrl($n->getObjectValue([ExternalLink::class, 'createFromDiscriminatorValue'])),
            'oneNoteWebUrl' => fn(ParseNode $n) => $o->setOneNoteWebUrl($n->getObjectValue([ExternalLink::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the oneNoteClientUrl property value. Opens the section in the OneNote native client if it's installed.
     * @return ExternalLink|null
    */
    public function getOneNoteClientUrl(): ?ExternalLink {
        $val = $this->getBackingStore()->get('oneNoteClientUrl');
        if (is_null($val) || $val instanceof ExternalLink) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneNoteClientUrl'");
    }

    /**
     * Gets the oneNoteWebUrl property value. Opens the section in OneNote on the web.
     * @return ExternalLink|null
    */
    public function getOneNoteWebUrl(): ?ExternalLink {
        $val = $this->getBackingStore()->get('oneNoteWebUrl');
        if (is_null($val) || $val instanceof ExternalLink) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneNoteWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('oneNoteClientUrl', $this->getOneNoteClientUrl());
        $writer->writeObjectValue('oneNoteWebUrl', $this->getOneNoteWebUrl());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the oneNoteClientUrl property value. Opens the section in the OneNote native client if it's installed.
     * @param ExternalLink|null $value Value to set for the oneNoteClientUrl property.
    */
    public function setOneNoteClientUrl(?ExternalLink $value): void {
        $this->getBackingStore()->set('oneNoteClientUrl', $value);
    }

    /**
     * Sets the oneNoteWebUrl property value. Opens the section in OneNote on the web.
     * @param ExternalLink|null $value Value to set for the oneNoteWebUrl property.
    */
    public function setOneNoteWebUrl(?ExternalLink $value): void {
        $this->getBackingStore()->set('oneNoteWebUrl', $value);
    }

}
