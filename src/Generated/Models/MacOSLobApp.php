<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSLobApp extends MobileLobApp implements Parsable 
{
    /**
     * @var string|null $buildNumber The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file.
    */
    private ?string $buildNumber = null;
    
    /**
     * @var string|null $bundleId The primary bundleId of the package.
    */
    private ?string $bundleId = null;
    
    /**
     * @var array<MacOSLobChildApp>|null $childApps List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package.
    */
    private ?array $childApps = null;
    
    /**
     * @var bool|null $ignoreVersionDetection When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature.
    */
    private ?bool $ignoreVersionDetection = null;
    
    /**
     * @var bool|null $installAsManaged When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged.
    */
    private ?bool $installAsManaged = null;
    
    /**
     * @var array<string>|null $md5Hash The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
    */
    private ?array $md5Hash = null;
    
    /**
     * @var int|null $md5HashChunkSize The chunk size for MD5 hash. This is '0' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
    */
    private ?int $md5HashChunkSize = null;
    
    /**
     * @var MacOSMinimumOperatingSystem|null $minimumSupportedOperatingSystem ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
    */
    private ?MacOSMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $versionNumber The version number of the package. This should match the package CFBundleVersion in the packageinfo file.
    */
    private ?string $versionNumber = null;
    
    /**
     * Instantiates a new MacOSLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSLobApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSLobApp {
        return new MacOSLobApp();
    }

    /**
     * Gets the buildNumber property value. The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file.
     * @return string|null
    */
    public function getBuildNumber(): ?string {
        return $this->buildNumber;
    }

    /**
     * Gets the bundleId property value. The primary bundleId of the package.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * Gets the childApps property value. List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package.
     * @return array<MacOSLobChildApp>|null
    */
    public function getChildApps(): ?array {
        return $this->childApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buildNumber' => fn(ParseNode $n) => $o->setBuildNumber($n->getStringValue()),
            'bundleId' => fn(ParseNode $n) => $o->setBundleId($n->getStringValue()),
            'childApps' => fn(ParseNode $n) => $o->setChildApps($n->getCollectionOfObjectValues([MacOSLobChildApp::class, 'createFromDiscriminatorValue'])),
            'ignoreVersionDetection' => fn(ParseNode $n) => $o->setIgnoreVersionDetection($n->getBooleanValue()),
            'installAsManaged' => fn(ParseNode $n) => $o->setInstallAsManaged($n->getBooleanValue()),
            'md5Hash' => fn(ParseNode $n) => $o->setMd5Hash($n->getCollectionOfPrimitiveValues()),
            'md5HashChunkSize' => fn(ParseNode $n) => $o->setMd5HashChunkSize($n->getIntegerValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([MacOSMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'versionNumber' => fn(ParseNode $n) => $o->setVersionNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ignoreVersionDetection property value. When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->ignoreVersionDetection;
    }

    /**
     * Gets the installAsManaged property value. When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged.
     * @return bool|null
    */
    public function getInstallAsManaged(): ?bool {
        return $this->installAsManaged;
    }

    /**
     * Gets the md5Hash property value. The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     * @return array<string>|null
    */
    public function getMd5Hash(): ?array {
        return $this->md5Hash;
    }

    /**
     * Gets the md5HashChunkSize property value. The chunk size for MD5 hash. This is '0' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     * @return int|null
    */
    public function getMd5HashChunkSize(): ?int {
        return $this->md5HashChunkSize;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     * @return MacOSMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?MacOSMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the versionNumber property value. The version number of the package. This should match the package CFBundleVersion in the packageinfo file.
     * @return string|null
    */
    public function getVersionNumber(): ?string {
        return $this->versionNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('buildNumber', $this->buildNumber);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeCollectionOfObjectValues('childApps', $this->childApps);
        $writer->writeBooleanValue('ignoreVersionDetection', $this->ignoreVersionDetection);
        $writer->writeBooleanValue('installAsManaged', $this->installAsManaged);
        $writer->writeCollectionOfPrimitiveValues('md5Hash', $this->md5Hash);
        $writer->writeIntegerValue('md5HashChunkSize', $this->md5HashChunkSize);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('versionNumber', $this->versionNumber);
    }

    /**
     * Sets the buildNumber property value. The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file.
     *  @param string|null $value Value to set for the buildNumber property.
    */
    public function setBuildNumber(?string $value ): void {
        $this->buildNumber = $value;
    }

    /**
     * Sets the bundleId property value. The primary bundleId of the package.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the childApps property value. List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package.
     *  @param array<MacOSLobChildApp>|null $value Value to set for the childApps property.
    */
    public function setChildApps(?array $value ): void {
        $this->childApps = $value;
    }

    /**
     * Sets the ignoreVersionDetection property value. When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature.
     *  @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value ): void {
        $this->ignoreVersionDetection = $value;
    }

    /**
     * Sets the installAsManaged property value. When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged.
     *  @param bool|null $value Value to set for the installAsManaged property.
    */
    public function setInstallAsManaged(?bool $value ): void {
        $this->installAsManaged = $value;
    }

    /**
     * Sets the md5Hash property value. The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     *  @param array<string>|null $value Value to set for the md5Hash property.
    */
    public function setMd5Hash(?array $value ): void {
        $this->md5Hash = $value;
    }

    /**
     * Sets the md5HashChunkSize property value. The chunk size for MD5 hash. This is '0' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     *  @param int|null $value Value to set for the md5HashChunkSize property.
    */
    public function setMd5HashChunkSize(?int $value ): void {
        $this->md5HashChunkSize = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     *  @param MacOSMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?MacOSMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the versionNumber property value. The version number of the package. This should match the package CFBundleVersion in the packageinfo file.
     *  @param string|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?string $value ): void {
        $this->versionNumber = $value;
    }

}
