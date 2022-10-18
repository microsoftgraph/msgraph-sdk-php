<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class IosMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration implements Parsable 
{
    /**
     * @var StreamInterface|null $encodedSettingXml mdm app configuration Base64 binary.
    */
    private ?StreamInterface $encodedSettingXml = null;
    
    /**
     * @var array<AppConfigurationSettingItem>|null $settings app configuration setting items.
    */
    private ?array $settings = null;
    
    /**
     * Instantiates a new IosMobileAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosMobileAppConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosMobileAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosMobileAppConfiguration {
        return new IosMobileAppConfiguration();
    }

    /**
     * Gets the encodedSettingXml property value. mdm app configuration Base64 binary.
     * @return StreamInterface
    */
    public function getEncodedSettingXml(): StreamInterface {
        return $this->encodedSettingXml;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'encodedSettingXml' => fn(ParseNode $n) => $o->setEncodedSettingXml($n->getBinaryContent()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([AppConfigurationSettingItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. app configuration setting items.
     * @return array<AppConfigurationSettingItem>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('encodedSettingXml', $this->encodedSettingXml);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
    }

    /**
     * Sets the encodedSettingXml property value. mdm app configuration Base64 binary.
     *  @param StreamInterface|null $value Value to set for the encodedSettingXml property.
    */
    public function setEncodedSettingXml(?StreamInterface $value ): void {
        $this->encodedSettingXml = $value;
    }

    /**
     * Sets the settings property value. app configuration setting items.
     *  @param array<AppConfigurationSettingItem>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

}
