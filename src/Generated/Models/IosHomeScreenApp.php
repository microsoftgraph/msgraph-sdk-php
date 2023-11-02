<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an icon for an app on the Home Screen
*/
class IosHomeScreenApp extends IosHomeScreenItem implements Parsable 
{
    /**
     * Instantiates a new iosHomeScreenApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosHomeScreenApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosHomeScreenApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosHomeScreenApp {
        return new IosHomeScreenApp();
    }

    /**
     * Gets the bundleID property value. BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
     * @return string|null
    */
    public function getBundleID(): ?string {
        $val = $this->getBackingStore()->get('bundleID');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleID'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleID' => fn(ParseNode $n) => $o->setBundleID($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bundleID', $this->getBundleID());
    }

    /**
     * Sets the bundleID property value. BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
     * @param string|null $value Value to set for the bundleID property.
    */
    public function setBundleID(?string $value): void {
        $this->getBackingStore()->set('bundleID', $value);
    }

}
