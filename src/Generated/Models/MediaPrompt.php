<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaPrompt extends Prompt implements Parsable 
{
    /**
     * Instantiates a new mediaPrompt and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mediaPrompt');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaPrompt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaPrompt {
        return new MediaPrompt();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mediaInfo' => fn(ParseNode $n) => $o->setMediaInfo($n->getObjectValue([MediaInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mediaInfo property value. The mediaInfo property
     * @return MediaInfo|null
    */
    public function getMediaInfo(): ?MediaInfo {
        $val = $this->getBackingStore()->get('mediaInfo');
        if (is_null($val) || $val instanceof MediaInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaInfo'");
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
        parent::serialize($writer);
        $writer->writeObjectValue('mediaInfo', $this->getMediaInfo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the mediaInfo property value. The mediaInfo property
     * @param MediaInfo|null $value Value to set for the mediaInfo property.
    */
    public function setMediaInfo(?MediaInfo $value): void {
        $this->getBackingStore()->set('mediaInfo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
