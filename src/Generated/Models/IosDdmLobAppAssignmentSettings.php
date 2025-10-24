<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties used to assign an iOS iOS Declarative Device Management (DDM) Line Of Business (LOB) mobile app to a group.
*/
class IosDdmLobAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new IosDdmLobAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosDdmLobAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosDdmLobAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosDdmLobAppAssignmentSettings {
        return new IosDdmLobAppAssignmentSettings();
    }

    /**
     * Gets the associatedDomains property value. Domain names to associate with the app
     * @return array<string>|null
    */
    public function getAssociatedDomains(): ?array {
        $val = $this->getBackingStore()->get('associatedDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedDomains'");
    }

    /**
     * Gets the associatedDomainsDirectDownloadAllowed property value. When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false.
     * @return bool|null
    */
    public function getAssociatedDomainsDirectDownloadAllowed(): ?bool {
        $val = $this->getBackingStore()->get('associatedDomainsDirectDownloadAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedDomainsDirectDownloadAllowed'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssociatedDomains($val);
            },
            'associatedDomainsDirectDownloadAllowed' => fn(ParseNode $n) => $o->setAssociatedDomainsDirectDownloadAllowed($n->getBooleanValue()),
            'preventManagedAppBackup' => fn(ParseNode $n) => $o->setPreventManagedAppBackup($n->getBooleanValue()),
            'tapToPayScreenLockEnabled' => fn(ParseNode $n) => $o->setTapToPayScreenLockEnabled($n->getBooleanValue()),
            'vpnConfigurationId' => fn(ParseNode $n) => $o->setVpnConfigurationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the preventManagedAppBackup property value. When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false.
     * @return bool|null
    */
    public function getPreventManagedAppBackup(): ?bool {
        $val = $this->getBackingStore()->get('preventManagedAppBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preventManagedAppBackup'");
    }

    /**
     * Gets the tapToPayScreenLockEnabled property value. When true, the device locks its screen after every transaction that requires a customer’s card PIN. When false, the user can choose the behavior. Default value is false.
     * @return bool|null
    */
    public function getTapToPayScreenLockEnabled(): ?bool {
        $val = $this->getBackingStore()->get('tapToPayScreenLockEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tapToPayScreenLockEnabled'");
    }

    /**
     * Gets the vpnConfigurationId property value. The unique identifier of the relay to associate with the app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('vpnConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vpnConfigurationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('associatedDomains', $this->getAssociatedDomains());
        $writer->writeBooleanValue('associatedDomainsDirectDownloadAllowed', $this->getAssociatedDomainsDirectDownloadAllowed());
        $writer->writeBooleanValue('preventManagedAppBackup', $this->getPreventManagedAppBackup());
        $writer->writeBooleanValue('tapToPayScreenLockEnabled', $this->getTapToPayScreenLockEnabled());
        $writer->writeStringValue('vpnConfigurationId', $this->getVpnConfigurationId());
    }

    /**
     * Sets the associatedDomains property value. Domain names to associate with the app
     * @param array<string>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value): void {
        $this->getBackingStore()->set('associatedDomains', $value);
    }

    /**
     * Sets the associatedDomainsDirectDownloadAllowed property value. When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false.
     * @param bool|null $value Value to set for the associatedDomainsDirectDownloadAllowed property.
    */
    public function setAssociatedDomainsDirectDownloadAllowed(?bool $value): void {
        $this->getBackingStore()->set('associatedDomainsDirectDownloadAllowed', $value);
    }

    /**
     * Sets the preventManagedAppBackup property value. When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false.
     * @param bool|null $value Value to set for the preventManagedAppBackup property.
    */
    public function setPreventManagedAppBackup(?bool $value): void {
        $this->getBackingStore()->set('preventManagedAppBackup', $value);
    }

    /**
     * Sets the tapToPayScreenLockEnabled property value. When true, the device locks its screen after every transaction that requires a customer’s card PIN. When false, the user can choose the behavior. Default value is false.
     * @param bool|null $value Value to set for the tapToPayScreenLockEnabled property.
    */
    public function setTapToPayScreenLockEnabled(?bool $value): void {
        $this->getBackingStore()->set('tapToPayScreenLockEnabled', $value);
    }

    /**
     * Sets the vpnConfigurationId property value. The unique identifier of the relay to associate with the app.
     * @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value): void {
        $this->getBackingStore()->set('vpnConfigurationId', $value);
    }

}
