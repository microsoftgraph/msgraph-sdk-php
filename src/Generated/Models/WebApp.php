<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebApp extends MobileApp implements Parsable 
{
    /**
     * @var string|null $appUrl The web app URL. This property cannot be PATCHed.
    */
    private ?string $appUrl = null;
    
    /**
     * @var bool|null $useManagedBrowser Whether or not to use managed browser. This property is only applicable for Android and IOS.
    */
    private ?bool $useManagedBrowser = null;
    
    /**
     * Instantiates a new WebApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->appUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUrl' => function (ParseNode $n) use ($o) { $o->setAppUrl($n->getStringValue()); },
            'useManagedBrowser' => function (ParseNode $n) use ($o) { $o->setUseManagedBrowser($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the useManagedBrowser property value. Whether or not to use managed browser. This property is only applicable for Android and IOS.
     * @return bool|null
    */
    public function getUseManagedBrowser(): ?bool {
        return $this->useManagedBrowser;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->appUrl);
        $writer->writeBooleanValue('useManagedBrowser', $this->useManagedBrowser);
    }

    /**
     * Sets the appUrl property value. The web app URL. This property cannot be PATCHed.
     *  @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value ): void {
        $this->appUrl = $value;
    }

    /**
     * Sets the useManagedBrowser property value. Whether or not to use managed browser. This property is only applicable for Android and IOS.
     *  @param bool|null $value Value to set for the useManagedBrowser property.
    */
    public function setUseManagedBrowser(?bool $value ): void {
        $this->useManagedBrowser = $value;
    }

}
