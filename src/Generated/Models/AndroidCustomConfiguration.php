<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AndroidCustomConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidCustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidCustomConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidCustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidCustomConfiguration {
        return new AndroidCustomConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'omaSettings' => fn(ParseNode $n) => $o->setOmaSettings($n->getCollectionOfObjectValues([OmaSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the omaSettings property value. OMA settings. This collection can contain a maximum of 1000 elements.
     * @return array<OmaSetting>|null
    */
    public function getOmaSettings(): ?array {
        $val = $this->getBackingStore()->get('omaSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OmaSetting::class);
            /** @var array<OmaSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'omaSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('omaSettings', $this->getOmaSettings());
    }

    /**
     * Sets the omaSettings property value. OMA settings. This collection can contain a maximum of 1000 elements.
     * @param array<OmaSetting>|null $value Value to set for the omaSettings property.
    */
    public function setOmaSettings(?array $value): void {
        $this->getBackingStore()->set('omaSettings', $value);
    }

}
