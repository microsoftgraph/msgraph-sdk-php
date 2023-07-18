<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for web apps.
*/
class WebApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new webApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.webApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebApp {
        return new WebApp();
    }

    /**
     * Gets the appUrl property value. The web app URL. This property cannot be PATCHed.
     * @return string|null
    */
    public function getAppUrl(): ?string {
        $val = $this->getBackingStore()->get('appUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUrl' => fn(ParseNode $n) => $o->setAppUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'useManagedBrowser' => fn(ParseNode $n) => $o->setUseManagedBrowser($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the useManagedBrowser property value. Whether or not to use managed browser. This property is only applicable for Android and IOS.
     * @return bool|null
    */
    public function getUseManagedBrowser(): ?bool {
        $val = $this->getBackingStore()->get('useManagedBrowser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useManagedBrowser'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->getAppUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('useManagedBrowser', $this->getUseManagedBrowser());
    }

    /**
     * Sets the appUrl property value. The web app URL. This property cannot be PATCHed.
     * @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value): void {
        $this->getBackingStore()->set('appUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the useManagedBrowser property value. Whether or not to use managed browser. This property is only applicable for Android and IOS.
     * @param bool|null $value Value to set for the useManagedBrowser property.
    */
    public function setUseManagedBrowser(?bool $value): void {
        $this->getBackingStore()->set('useManagedBrowser', $value);
    }

}
