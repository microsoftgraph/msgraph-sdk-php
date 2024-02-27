<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationMediaResource extends EducationResource implements Parsable 
{
    /**
     * Instantiates a new EducationMediaResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationMediaResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationMediaResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationMediaResource {
        return new EducationMediaResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileUrl' => fn(ParseNode $n) => $o->setFileUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileUrl property value. Location of the file on shared point folder. Required
     * @return string|null
    */
    public function getFileUrl(): ?string {
        $val = $this->getBackingStore()->get('fileUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileUrl', $this->getFileUrl());
    }

    /**
     * Sets the fileUrl property value. Location of the file on shared point folder. Required
     * @param string|null $value Value to set for the fileUrl property.
    */
    public function setFileUrl(?string $value): void {
        $this->getBackingStore()->set('fileUrl', $value);
    }

}
