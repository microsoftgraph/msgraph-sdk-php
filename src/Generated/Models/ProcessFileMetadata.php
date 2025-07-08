<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProcessFileMetadata extends ProcessContentMetadataBase implements Parsable 
{
    /**
     * Instantiates a new ProcessFileMetadata and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.processFileMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessFileMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessFileMetadata {
        return new ProcessFileMetadata();
    }

    /**
     * Gets the customProperties property value. A dictionary containing custom metadata associated with the file, potentially extracted by the calling application.
     * @return CustomMetadataDictionary|null
    */
    public function getCustomProperties(): ?CustomMetadataDictionary {
        $val = $this->getBackingStore()->get('customProperties');
        if (is_null($val) || $val instanceof CustomMetadataDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customProperties'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customProperties' => fn(ParseNode $n) => $o->setCustomProperties($n->getObjectValue([CustomMetadataDictionary::class, 'createFromDiscriminatorValue'])),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ownerId property value. The unique identifier (for example, Entra User ID or UPN) of the owner of the file.
     * @return string|null
    */
    public function getOwnerId(): ?string {
        $val = $this->getBackingStore()->get('ownerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customProperties', $this->getCustomProperties());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
    }

    /**
     * Sets the customProperties property value. A dictionary containing custom metadata associated with the file, potentially extracted by the calling application.
     * @param CustomMetadataDictionary|null $value Value to set for the customProperties property.
    */
    public function setCustomProperties(?CustomMetadataDictionary $value): void {
        $this->getBackingStore()->set('customProperties', $value);
    }

    /**
     * Sets the ownerId property value. The unique identifier (for example, Entra User ID or UPN) of the owner of the file.
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->getBackingStore()->set('ownerId', $value);
    }

}
