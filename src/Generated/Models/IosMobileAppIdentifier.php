<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The identifier for an iOS app.
*/
class IosMobileAppIdentifier extends MobileAppIdentifier implements Parsable 
{
    /**
     * Instantiates a new IosMobileAppIdentifier and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosMobileAppIdentifier');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosMobileAppIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosMobileAppIdentifier {
        return new IosMobileAppIdentifier();
    }

    /**
     * Gets the bundleId property value. The identifier for an app, as specified in the app store.
     * @return string|null
    */
    public function getBundleId(): ?string {
        $val = $this->getBackingStore()->get('bundleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleId' => fn(ParseNode $n) => $o->setBundleId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bundleId', $this->getBundleId());
    }

    /**
     * Sets the bundleId property value. The identifier for an app, as specified in the app store.
     * @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value): void {
        $this->getBackingStore()->set('bundleId', $value);
    }

}
