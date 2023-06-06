<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AmazonResourceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new AmazonResourceEvidence and sets the default values.
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
        return $this->getBackingStore()->get('amazonAccountId');
    }

    /**
     * Gets the amazonResourceId property value. The Amazon resource identifier (ARN) for the cloud resource.
     * @return string|null
    */
    public function getAmazonResourceId(): ?string {
        return $this->getBackingStore()->get('amazonResourceId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'amazonAccountId' => fn(ParseNode $n) => $o->setAmazonAccountId($n->getStringValue()),
            'amazonResourceId' => fn(ParseNode $n) => $o->setAmazonResourceId($n->getStringValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceName property value. The name of the resource.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->getBackingStore()->get('resourceName');
    }

    /**
     * Gets the resourceType property value. The type of the resource.
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->getBackingStore()->get('resourceType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('amazonAccountId', $this->getAmazonAccountId());
        $writer->writeStringValue('amazonResourceId', $this->getAmazonResourceId());
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
