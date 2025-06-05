<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiInteractionLink extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiInteractionLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionLink {
        return new AiInteractionLink();
    }

    /**
     * Gets the displayName property value. The name of the link.
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
            'linkType' => fn(ParseNode $n) => $o->setLinkType($n->getStringValue()),
            'linkUrl' => fn(ParseNode $n) => $o->setLinkUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the linkType property value. Information about a link in an app chat or Business Chat (BizChat) interaction.
     * @return string|null
    */
    public function getLinkType(): ?string {
        $val = $this->getBackingStore()->get('linkType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkType'");
    }

    /**
     * Gets the linkUrl property value. The URL of the link.
     * @return string|null
    */
    public function getLinkUrl(): ?string {
        $val = $this->getBackingStore()->get('linkUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('linkType', $this->getLinkType());
        $writer->writeStringValue('linkUrl', $this->getLinkUrl());
    }

    /**
     * Sets the displayName property value. The name of the link.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the linkType property value. Information about a link in an app chat or Business Chat (BizChat) interaction.
     * @param string|null $value Value to set for the linkType property.
    */
    public function setLinkType(?string $value): void {
        $this->getBackingStore()->set('linkType', $value);
    }

    /**
     * Sets the linkUrl property value. The URL of the link.
     * @param string|null $value Value to set for the linkUrl property.
    */
    public function setLinkUrl(?string $value): void {
        $this->getBackingStore()->set('linkUrl', $value);
    }

}
