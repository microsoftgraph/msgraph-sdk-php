<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new ContentActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentActivity {
        return new ContentActivity();
    }

    /**
     * Gets the contentMetadata property value. The contentMetadata property
     * @return ProcessContentRequest|null
    */
    public function getContentMetadata(): ?ProcessContentRequest {
        $val = $this->getBackingStore()->get('contentMetadata');
        if (is_null($val) || $val instanceof ProcessContentRequest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentMetadata'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentMetadata' => fn(ParseNode $n) => $o->setContentMetadata($n->getObjectValue([ProcessContentRequest::class, 'createFromDiscriminatorValue'])),
            'scopeIdentifier' => fn(ParseNode $n) => $o->setScopeIdentifier($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scopeIdentifier property value. The scope identified from computed protection scopes.
     * @return string|null
    */
    public function getScopeIdentifier(): ?string {
        $val = $this->getBackingStore()->get('scopeIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeIdentifier'");
    }

    /**
     * Gets the userId property value. ID of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentMetadata', $this->getContentMetadata());
        $writer->writeStringValue('scopeIdentifier', $this->getScopeIdentifier());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the contentMetadata property value. The contentMetadata property
     * @param ProcessContentRequest|null $value Value to set for the contentMetadata property.
    */
    public function setContentMetadata(?ProcessContentRequest $value): void {
        $this->getBackingStore()->set('contentMetadata', $value);
    }

    /**
     * Sets the scopeIdentifier property value. The scope identified from computed protection scopes.
     * @param string|null $value Value to set for the scopeIdentifier property.
    */
    public function setScopeIdentifier(?string $value): void {
        $this->getBackingStore()->set('scopeIdentifier', $value);
    }

    /**
     * Sets the userId property value. ID of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
