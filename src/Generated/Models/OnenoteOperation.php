<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteOperation extends Operation implements Parsable 
{
    /**
     * Instantiates a new OnenoteOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteOperation {
        return new OnenoteOperation();
    }

    /**
     * Gets the error property value. The error returned by the operation.
     * @return OnenoteOperationError|null
    */
    public function getError(): ?OnenoteOperationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof OnenoteOperationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([OnenoteOperationError::class, 'createFromDiscriminatorValue'])),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceLocation' => fn(ParseNode $n) => $o->setResourceLocation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the percentComplete property value. The operation percent complete if the operation is still in running status.
     * @return string|null
    */
    public function getPercentComplete(): ?string {
        $val = $this->getBackingStore()->get('percentComplete');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentComplete'");
    }

    /**
     * Gets the resourceId property value. The resource id.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the resourceLocation property value. The resource URI for the object. For example, the resource URI for a copied page or section.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        $val = $this->getBackingStore()->get('resourceLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('percentComplete', $this->getPercentComplete());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceLocation', $this->getResourceLocation());
    }

    /**
     * Sets the error property value. The error returned by the operation.
     * @param OnenoteOperationError|null $value Value to set for the error property.
    */
    public function setError(?OnenoteOperationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the percentComplete property value. The operation percent complete if the operation is still in running status.
     * @param string|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?string $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the resourceId property value. The resource id.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the resourceLocation property value. The resource URI for the object. For example, the resource URI for a copied page or section.
     * @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value): void {
        $this->getBackingStore()->set('resourceLocation', $value);
    }

}
