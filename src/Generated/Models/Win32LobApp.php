<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for Win32 apps.
*/
class Win32LobApp extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new Win32LobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobApp {
        return new Win32LobApp();
    }

    /**
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('applicableArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableArchitectures'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => fn(ParseNode $n) => $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'installCommandLine' => fn(ParseNode $n) => $o->setInstallCommandLine($n->getStringValue()),
            'installExperience' => fn(ParseNode $n) => $o->setInstallExperience($n->getObjectValue([Win32LobAppInstallExperience::class, 'createFromDiscriminatorValue'])),
            'minimumCpuSpeedInMHz' => fn(ParseNode $n) => $o->setMinimumCpuSpeedInMHz($n->getIntegerValue()),
            'minimumFreeDiskSpaceInMB' => fn(ParseNode $n) => $o->setMinimumFreeDiskSpaceInMB($n->getIntegerValue()),
            'minimumMemoryInMB' => fn(ParseNode $n) => $o->setMinimumMemoryInMB($n->getIntegerValue()),
            'minimumNumberOfProcessors' => fn(ParseNode $n) => $o->setMinimumNumberOfProcessors($n->getIntegerValue()),
            'minimumSupportedWindowsRelease' => fn(ParseNode $n) => $o->setMinimumSupportedWindowsRelease($n->getStringValue()),
            'msiInformation' => fn(ParseNode $n) => $o->setMsiInformation($n->getObjectValue([Win32LobAppMsiInformation::class, 'createFromDiscriminatorValue'])),
            'returnCodes' => fn(ParseNode $n) => $o->setReturnCodes($n->getCollectionOfObjectValues([Win32LobAppReturnCode::class, 'createFromDiscriminatorValue'])),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([Win32LobAppRule::class, 'createFromDiscriminatorValue'])),
            'setupFilePath' => fn(ParseNode $n) => $o->setSetupFilePath($n->getStringValue()),
            'uninstallCommandLine' => fn(ParseNode $n) => $o->setUninstallCommandLine($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installCommandLine property value. The command line to install this app
     * @return string|null
    */
    public function getInstallCommandLine(): ?string {
        $val = $this->getBackingStore()->get('installCommandLine');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installCommandLine'");
    }

    /**
     * Gets the installExperience property value. The install experience for this app.
     * @return Win32LobAppInstallExperience|null
    */
    public function getInstallExperience(): ?Win32LobAppInstallExperience {
        $val = $this->getBackingStore()->get('installExperience');
        if (is_null($val) || $val instanceof Win32LobAppInstallExperience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installExperience'");
    }

    /**
     * Gets the minimumCpuSpeedInMHz property value. The value for the minimum CPU speed which is required to install this app.
     * @return int|null
    */
    public function getMinimumCpuSpeedInMHz(): ?int {
        $val = $this->getBackingStore()->get('minimumCpuSpeedInMHz');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumCpuSpeedInMHz'");
    }

    /**
     * Gets the minimumFreeDiskSpaceInMB property value. The value for the minimum free disk space which is required to install this app.
     * @return int|null
    */
    public function getMinimumFreeDiskSpaceInMB(): ?int {
        $val = $this->getBackingStore()->get('minimumFreeDiskSpaceInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumFreeDiskSpaceInMB'");
    }

    /**
     * Gets the minimumMemoryInMB property value. The value for the minimum physical memory which is required to install this app.
     * @return int|null
    */
    public function getMinimumMemoryInMB(): ?int {
        $val = $this->getBackingStore()->get('minimumMemoryInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumMemoryInMB'");
    }

    /**
     * Gets the minimumNumberOfProcessors property value. The value for the minimum number of processors which is required to install this app.
     * @return int|null
    */
    public function getMinimumNumberOfProcessors(): ?int {
        $val = $this->getBackingStore()->get('minimumNumberOfProcessors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumNumberOfProcessors'");
    }

    /**
     * Gets the minimumSupportedWindowsRelease property value. The value for the minimum supported windows release.
     * @return string|null
    */
    public function getMinimumSupportedWindowsRelease(): ?string {
        $val = $this->getBackingStore()->get('minimumSupportedWindowsRelease');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedWindowsRelease'");
    }

    /**
     * Gets the msiInformation property value. The MSI details if this Win32 app is an MSI app.
     * @return Win32LobAppMsiInformation|null
    */
    public function getMsiInformation(): ?Win32LobAppMsiInformation {
        $val = $this->getBackingStore()->get('msiInformation');
        if (is_null($val) || $val instanceof Win32LobAppMsiInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'msiInformation'");
    }

    /**
     * Gets the returnCodes property value. The return codes for post installation behavior.
     * @return array<Win32LobAppReturnCode>|null
    */
    public function getReturnCodes(): ?array {
        $val = $this->getBackingStore()->get('returnCodes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppReturnCode::class);
            /** @var array<Win32LobAppReturnCode>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnCodes'");
    }

    /**
     * Gets the rules property value. The detection and requirement rules for this app.
     * @return array<Win32LobAppRule>|null
    */
    public function getRules(): ?array {
        $val = $this->getBackingStore()->get('rules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppRule::class);
            /** @var array<Win32LobAppRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rules'");
    }

    /**
     * Gets the setupFilePath property value. The relative path of the setup file in the encrypted Win32LobApp package.
     * @return string|null
    */
    public function getSetupFilePath(): ?string {
        $val = $this->getBackingStore()->get('setupFilePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setupFilePath'");
    }

    /**
     * Gets the uninstallCommandLine property value. The command line to uninstall this app
     * @return string|null
    */
    public function getUninstallCommandLine(): ?string {
        $val = $this->getBackingStore()->get('uninstallCommandLine');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uninstallCommandLine'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->getApplicableArchitectures());
        $writer->writeStringValue('installCommandLine', $this->getInstallCommandLine());
        $writer->writeObjectValue('installExperience', $this->getInstallExperience());
        $writer->writeIntegerValue('minimumCpuSpeedInMHz', $this->getMinimumCpuSpeedInMHz());
        $writer->writeIntegerValue('minimumFreeDiskSpaceInMB', $this->getMinimumFreeDiskSpaceInMB());
        $writer->writeIntegerValue('minimumMemoryInMB', $this->getMinimumMemoryInMB());
        $writer->writeIntegerValue('minimumNumberOfProcessors', $this->getMinimumNumberOfProcessors());
        $writer->writeStringValue('minimumSupportedWindowsRelease', $this->getMinimumSupportedWindowsRelease());
        $writer->writeObjectValue('msiInformation', $this->getMsiInformation());
        $writer->writeCollectionOfObjectValues('returnCodes', $this->getReturnCodes());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeStringValue('setupFilePath', $this->getSetupFilePath());
        $writer->writeStringValue('uninstallCommandLine', $this->getUninstallCommandLine());
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('applicableArchitectures', $value);
    }

    /**
     * Sets the installCommandLine property value. The command line to install this app
     * @param string|null $value Value to set for the installCommandLine property.
    */
    public function setInstallCommandLine(?string $value): void {
        $this->getBackingStore()->set('installCommandLine', $value);
    }

    /**
     * Sets the installExperience property value. The install experience for this app.
     * @param Win32LobAppInstallExperience|null $value Value to set for the installExperience property.
    */
    public function setInstallExperience(?Win32LobAppInstallExperience $value): void {
        $this->getBackingStore()->set('installExperience', $value);
    }

    /**
     * Sets the minimumCpuSpeedInMHz property value. The value for the minimum CPU speed which is required to install this app.
     * @param int|null $value Value to set for the minimumCpuSpeedInMHz property.
    */
    public function setMinimumCpuSpeedInMHz(?int $value): void {
        $this->getBackingStore()->set('minimumCpuSpeedInMHz', $value);
    }

    /**
     * Sets the minimumFreeDiskSpaceInMB property value. The value for the minimum free disk space which is required to install this app.
     * @param int|null $value Value to set for the minimumFreeDiskSpaceInMB property.
    */
    public function setMinimumFreeDiskSpaceInMB(?int $value): void {
        $this->getBackingStore()->set('minimumFreeDiskSpaceInMB', $value);
    }

    /**
     * Sets the minimumMemoryInMB property value. The value for the minimum physical memory which is required to install this app.
     * @param int|null $value Value to set for the minimumMemoryInMB property.
    */
    public function setMinimumMemoryInMB(?int $value): void {
        $this->getBackingStore()->set('minimumMemoryInMB', $value);
    }

    /**
     * Sets the minimumNumberOfProcessors property value. The value for the minimum number of processors which is required to install this app.
     * @param int|null $value Value to set for the minimumNumberOfProcessors property.
    */
    public function setMinimumNumberOfProcessors(?int $value): void {
        $this->getBackingStore()->set('minimumNumberOfProcessors', $value);
    }

    /**
     * Sets the minimumSupportedWindowsRelease property value. The value for the minimum supported windows release.
     * @param string|null $value Value to set for the minimumSupportedWindowsRelease property.
    */
    public function setMinimumSupportedWindowsRelease(?string $value): void {
        $this->getBackingStore()->set('minimumSupportedWindowsRelease', $value);
    }

    /**
     * Sets the msiInformation property value. The MSI details if this Win32 app is an MSI app.
     * @param Win32LobAppMsiInformation|null $value Value to set for the msiInformation property.
    */
    public function setMsiInformation(?Win32LobAppMsiInformation $value): void {
        $this->getBackingStore()->set('msiInformation', $value);
    }

    /**
     * Sets the returnCodes property value. The return codes for post installation behavior.
     * @param array<Win32LobAppReturnCode>|null $value Value to set for the returnCodes property.
    */
    public function setReturnCodes(?array $value): void {
        $this->getBackingStore()->set('returnCodes', $value);
    }

    /**
     * Sets the rules property value. The detection and requirement rules for this app.
     * @param array<Win32LobAppRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the setupFilePath property value. The relative path of the setup file in the encrypted Win32LobApp package.
     * @param string|null $value Value to set for the setupFilePath property.
    */
    public function setSetupFilePath(?string $value): void {
        $this->getBackingStore()->set('setupFilePath', $value);
    }

    /**
     * Sets the uninstallCommandLine property value. The command line to uninstall this app
     * @param string|null $value Value to set for the uninstallCommandLine property.
    */
    public function setUninstallCommandLine(?string $value): void {
        $this->getBackingStore()->set('uninstallCommandLine', $value);
    }

}
