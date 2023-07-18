<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Contains properties, inherited properties and actions for iOS mobile app configurations.
*/
class IosMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration implements Parsable 
{
    /**
     * Instantiates a new iosMobileAppConfiguration and sets the default values.
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
     * @return StreamInterface|null
    */
    public function getEncodedSettingXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('encodedSettingXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encodedSettingXml'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'encodedSettingXml' => fn(ParseNode $n) => $o->setEncodedSettingXml($n->getBinaryContent()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([AppConfigurationSettingItem::class, 'createFromDiscriminatorValue'])),
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
     * Gets the settings property value. app configuration setting items.
     * @return array<AppConfigurationSettingItem>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppConfigurationSettingItem::class);
            /** @var array<AppConfigurationSettingItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('encodedSettingXml', $this->getEncodedSettingXml());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
    }

    /**
     * Sets the encodedSettingXml property value. mdm app configuration Base64 binary.
     * @param StreamInterface|null $value Value to set for the encodedSettingXml property.
    */
    public function setEncodedSettingXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('encodedSettingXml', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settings property value. app configuration setting items.
     * @param array<AppConfigurationSettingItem>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
