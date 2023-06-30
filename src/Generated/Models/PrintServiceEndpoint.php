<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintServiceEndpoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new printServiceEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintServiceEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintServiceEndpoint {
        return new PrintServiceEndpoint();
    }

    /**
     * Gets the displayName property value. A human-readable display name for the endpoint.
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
            'uri' => fn(ParseNode $n) => $o->setUri($n->getStringValue()),
        ]);
    }

    /**
     * Gets the uri property value. The URI that can be used to access the service.
     * @return string|null
    */
    public function getUri(): ?string {
        $val = $this->getBackingStore()->get('uri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uri'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('uri', $this->getUri());
    }

    /**
     * Sets the displayName property value. A human-readable display name for the endpoint.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the uri property value. The URI that can be used to access the service.
     * @param string|null $value Value to set for the uri property.
    */
    public function setUri(?string $value): void {
        $this->getBackingStore()->set('uri', $value);
    }

}
