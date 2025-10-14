<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SocialIdentitySource extends IdentitySource implements Parsable 
{
    /**
     * Instantiates a new SocialIdentitySource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.socialIdentitySource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SocialIdentitySource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SocialIdentitySource {
        return new SocialIdentitySource();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'socialIdentitySourceType' => fn(ParseNode $n) => $o->setSocialIdentitySourceType($n->getEnumValue(SocialIdentitySourceType::class)),
        ]);
    }

    /**
     * Gets the socialIdentitySourceType property value. The socialIdentitySourceType property
     * @return SocialIdentitySourceType|null
    */
    public function getSocialIdentitySourceType(): ?SocialIdentitySourceType {
        $val = $this->getBackingStore()->get('socialIdentitySourceType');
        if (is_null($val) || $val instanceof SocialIdentitySourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'socialIdentitySourceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('socialIdentitySourceType', $this->getSocialIdentitySourceType());
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the socialIdentitySourceType property value. The socialIdentitySourceType property
     * @param SocialIdentitySourceType|null $value Value to set for the socialIdentitySourceType property.
    */
    public function setSocialIdentitySourceType(?SocialIdentitySourceType $value): void {
        $this->getBackingStore()->set('socialIdentitySourceType', $value);
    }

}
