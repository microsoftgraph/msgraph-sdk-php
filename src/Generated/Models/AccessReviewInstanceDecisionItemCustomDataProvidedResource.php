<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemCustomDataProvidedResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemCustomDataProvidedResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemCustomDataProvidedResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemCustomDataProvidedResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemCustomDataProvidedResource {
        return new AccessReviewInstanceDecisionItemCustomDataProvidedResource();
    }

    /**
     * Gets the customData property value. The customData property
     * @return string|null
    */
    public function getCustomData(): ?string {
        $val = $this->getBackingStore()->get('customData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customData'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getStringValue()),
            'scopeDisplayName' => fn(ParseNode $n) => $o->setScopeDisplayName($n->getStringValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scopeDisplayName property value. The scopeDisplayName property
     * @return string|null
    */
    public function getScopeDisplayName(): ?string {
        $val = $this->getBackingStore()->get('scopeDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeDisplayName'");
    }

    /**
     * Gets the scopeId property value. The scopeId property
     * @return string|null
    */
    public function getScopeId(): ?string {
        $val = $this->getBackingStore()->get('scopeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customData', $this->getCustomData());
        $writer->writeStringValue('scopeDisplayName', $this->getScopeDisplayName());
        $writer->writeStringValue('scopeId', $this->getScopeId());
    }

    /**
     * Sets the customData property value. The customData property
     * @param string|null $value Value to set for the customData property.
    */
    public function setCustomData(?string $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the scopeDisplayName property value. The scopeDisplayName property
     * @param string|null $value Value to set for the scopeDisplayName property.
    */
    public function setScopeDisplayName(?string $value): void {
        $this->getBackingStore()->set('scopeDisplayName', $value);
    }

    /**
     * Sets the scopeId property value. The scopeId property
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

}
