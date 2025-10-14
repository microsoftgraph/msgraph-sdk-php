<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for the MacOS DMG (Apple Disk Image) App.
*/
class MacOSDmgApp extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new MacOSDmgApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSDmgApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSDmgApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSDmgApp {
        return new MacOSDmgApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ignoreVersionDetection' => fn(ParseNode $n) => $o->setIgnoreVersionDetection($n->getBooleanValue()),
            'includedApps' => fn(ParseNode $n) => $o->setIncludedApps($n->getCollectionOfObjectValues([MacOSIncludedApp::class, 'createFromDiscriminatorValue'])),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([MacOSMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'primaryBundleId' => fn(ParseNode $n) => $o->setPrimaryBundleId($n->getStringValue()),
            'primaryBundleVersion' => fn(ParseNode $n) => $o->setPrimaryBundleVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ignoreVersionDetection property value. When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        $val = $this->getBackingStore()->get('ignoreVersionDetection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ignoreVersionDetection'");
    }

    /**
     * Gets the includedApps property value. The list of .apps expected to be installed by the DMG (Apple Disk Image). This collection can contain a maximum of 500 elements.
     * @return array<MacOSIncludedApp>|null
    */
    public function getIncludedApps(): ?array {
        $val = $this->getBackingStore()->get('includedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSIncludedApp::class);
            /** @var array<MacOSIncludedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedApps'");
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     * @return MacOSMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?MacOSMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof MacOSMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the primaryBundleId property value. The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration.
     * @return string|null
    */
    public function getPrimaryBundleId(): ?string {
        $val = $this->getBackingStore()->get('primaryBundleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryBundleId'");
    }

    /**
     * Gets the primaryBundleVersion property value. The version of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleShortVersion in the app's bundle configuration.
     * @return string|null
    */
    public function getPrimaryBundleVersion(): ?string {
        $val = $this->getBackingStore()->get('primaryBundleVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryBundleVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->getIgnoreVersionDetection());
        $writer->writeCollectionOfObjectValues('includedApps', $this->getIncludedApps());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('primaryBundleId', $this->getPrimaryBundleId());
        $writer->writeStringValue('primaryBundleVersion', $this->getPrimaryBundleVersion());
    }

    /**
     * Sets the ignoreVersionDetection property value. When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE.
     * @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value): void {
        $this->getBackingStore()->set('ignoreVersionDetection', $value);
    }

    /**
     * Sets the includedApps property value. The list of .apps expected to be installed by the DMG (Apple Disk Image). This collection can contain a maximum of 500 elements.
     * @param array<MacOSIncludedApp>|null $value Value to set for the includedApps property.
    */
    public function setIncludedApps(?array $value): void {
        $this->getBackingStore()->set('includedApps', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     * @param MacOSMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?MacOSMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the primaryBundleId property value. The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration.
     * @param string|null $value Value to set for the primaryBundleId property.
    */
    public function setPrimaryBundleId(?string $value): void {
        $this->getBackingStore()->set('primaryBundleId', $value);
    }

    /**
     * Sets the primaryBundleVersion property value. The version of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleShortVersion in the app's bundle configuration.
     * @param string|null $value Value to set for the primaryBundleVersion property.
    */
    public function setPrimaryBundleVersion(?string $value): void {
        $this->getBackingStore()->set('primaryBundleVersion', $value);
    }

}
