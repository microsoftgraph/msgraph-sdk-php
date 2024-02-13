<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The identifier for an Android app.
*/
class AndroidMobileAppIdentifier extends MobileAppIdentifier implements Parsable 
{
    /**
     * Instantiates a new AndroidMobileAppIdentifier and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidMobileAppIdentifier');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidMobileAppIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidMobileAppIdentifier {
        return new AndroidMobileAppIdentifier();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the packageId property value. The identifier for an app, as specified in the play store.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('packageId', $this->getPackageId());
    }

    /**
     * Sets the packageId property value. The identifier for an app, as specified in the play store.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

}
