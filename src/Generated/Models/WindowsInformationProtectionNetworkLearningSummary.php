<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionNetworkLearningSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsInformationProtectionNetworkLearningSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionNetworkLearningSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionNetworkLearningSummary {
        return new WindowsInformationProtectionNetworkLearningSummary();
    }

    /**
     * Gets the deviceCount property value. Device Count
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->getBackingStore()->get('deviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the url property value. Website url
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the deviceCount property value. Device Count
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the url property value. Website url
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
