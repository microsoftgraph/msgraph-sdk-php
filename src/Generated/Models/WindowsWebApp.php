<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsWebApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new WindowsWebApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsWebApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsWebApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsWebApp {
        return new WindowsWebApp();
    }

    /**
     * Gets the appUrl property value. Indicates the Windows web app URL. Example: "https://www.contoso.com"
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->getAppUrl());
    }

    /**
     * Sets the appUrl property value. Indicates the Windows web app URL. Example: "https://www.contoso.com"
     * @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value): void {
        $this->getBackingStore()->set('appUrl', $value);
    }

}
