<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AmazonResourceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new amazonResourceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AmazonResourceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AmazonResourceEvidence {
        return new AmazonResourceEvidence();
    }

    /**
     * Gets the amazonAccountId property value. The unique identifier for the Amazon account.
     * @return string|null
    */
    public function getAmazonAccountId(): ?string {
        $val = $this->getBackingStore()->get('amazonAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amazonAccountId'");
    }

    /**
     * Gets the amazonResourceId property value. The Amazon resource identifier (ARN) for the cloud resource.
     * @return string|null
    */
    public function getAmazonResourceId(): ?string {
        $val = $this->getBackingStore()->get('amazonResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amazonResourceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'amazonAccountId' => fn(ParseNode $n) => $o->setAmazonAccountId($n->getStringValue()),
            'amazonResourceId' => fn(ParseNode $n) => $o->setAmazonResourceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ]);
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
     * Gets the resourceName property value. The name of the resource.
     * @return string|null
    */
    public function getResourceName(): ?string {
        $val = $this->getBackingStore()->get('resourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceName'");
    }

    /**
     * Gets the resourceType property value. The type of the resource.
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('amazonAccountId', $this->getAmazonAccountId());
        $writer->writeStringValue('amazonResourceId', $this->getAmazonResourceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('resourceName', $this->getResourceName());
        $writer->writeStringValue('resourceType', $this->getResourceType());
    }

    /**
     * Sets the amazonAccountId property value. The unique identifier for the Amazon account.
     * @param string|null $value Value to set for the amazonAccountId property.
    */
    public function setAmazonAccountId(?string $value): void {
        $this->getBackingStore()->set('amazonAccountId', $value);
    }

    /**
     * Sets the amazonResourceId property value. The Amazon resource identifier (ARN) for the cloud resource.
     * @param string|null $value Value to set for the amazonResourceId property.
    */
    public function setAmazonResourceId(?string $value): void {
        $this->getBackingStore()->set('amazonResourceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceName property value. The name of the resource.
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

    /**
     * Sets the resourceType property value. The type of the resource.
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

}
