<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemoteDesktopSecurityConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new RemoteDesktopSecurityConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteDesktopSecurityConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteDesktopSecurityConfiguration {
        return new RemoteDesktopSecurityConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRemoteDesktopProtocolEnabled' => fn(ParseNode $n) => $o->setIsRemoteDesktopProtocolEnabled($n->getBooleanValue()),
            'targetDeviceGroups' => fn(ParseNode $n) => $o->setTargetDeviceGroups($n->getCollectionOfObjectValues([TargetDeviceGroup::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isRemoteDesktopProtocolEnabled property value. Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled.
     * @return bool|null
    */
    public function getIsRemoteDesktopProtocolEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRemoteDesktopProtocolEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRemoteDesktopProtocolEnabled'");
    }

    /**
     * Gets the targetDeviceGroups property value. The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
     * @return array<TargetDeviceGroup>|null
    */
    public function getTargetDeviceGroups(): ?array {
        $val = $this->getBackingStore()->get('targetDeviceGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetDeviceGroup::class);
            /** @var array<TargetDeviceGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDeviceGroups'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRemoteDesktopProtocolEnabled', $this->getIsRemoteDesktopProtocolEnabled());
        $writer->writeCollectionOfObjectValues('targetDeviceGroups', $this->getTargetDeviceGroups());
    }

    /**
     * Sets the isRemoteDesktopProtocolEnabled property value. Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled.
     * @param bool|null $value Value to set for the isRemoteDesktopProtocolEnabled property.
    */
    public function setIsRemoteDesktopProtocolEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRemoteDesktopProtocolEnabled', $value);
    }

    /**
     * Sets the targetDeviceGroups property value. The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
     * @param array<TargetDeviceGroup>|null $value Value to set for the targetDeviceGroups property.
    */
    public function setTargetDeviceGroups(?array $value): void {
        $this->getBackingStore()->set('targetDeviceGroups', $value);
    }

}
