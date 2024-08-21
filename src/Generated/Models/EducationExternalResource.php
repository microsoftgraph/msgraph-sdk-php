<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationExternalResource extends EducationResource implements Parsable 
{
    /**
     * Instantiates a new EducationExternalResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationExternalResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationExternalResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationExternalResource {
        return new EducationExternalResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the webUrl property value. Location of the resource. Required.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the webUrl property value. Location of the resource. Required.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
