<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosiPadOSWebClip extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new IosiPadOSWebClip and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosiPadOSWebClip');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosiPadOSWebClip
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosiPadOSWebClip {
        return new IosiPadOSWebClip();
    }

    /**
     * Gets the appUrl property value. Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
     * @return string|null
    */
    public function getAppUrl(): ?string {
        return $this->getBackingStore()->get('appUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUrl' => fn(ParseNode $n) => $o->setAppUrl($n->getStringValue()),
            'useManagedBrowser' => fn(ParseNode $n) => $o->setUseManagedBrowser($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the useManagedBrowser property value. Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
     * @return bool|null
    */
    public function getUseManagedBrowser(): ?bool {
        return $this->getBackingStore()->get('useManagedBrowser');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->getAppUrl());
        $writer->writeBooleanValue('useManagedBrowser', $this->getUseManagedBrowser());
    }

    /**
     * Sets the appUrl property value. Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
     * @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value): void {
        $this->getBackingStore()->set('appUrl', $value);
    }

    /**
     * Sets the useManagedBrowser property value. Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
     * @param bool|null $value Value to set for the useManagedBrowser property.
    */
    public function setUseManagedBrowser(?bool $value): void {
        $this->getBackingStore()->set('useManagedBrowser', $value);
    }

}
