<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEndpoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEndpoint {
        return new VirtualEndpoint();
    }

    /**
     * Gets the auditEvents property value. A collection of Cloud PC audit events.
     * @return array<CloudPcAuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        $val = $this->getBackingStore()->get('auditEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcAuditEvent::class);
            /** @var array<CloudPcAuditEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditEvents'");
    }

    /**
     * Gets the cloudPCs property value. A collection of cloud-managed virtual desktops.
     * @return array<CloudPC>|null
    */
    public function getCloudPCs(): ?array {
        $val = $this->getBackingStore()->get('cloudPCs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPC::class);
            /** @var array<CloudPC>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPCs'");
    }

    /**
     * Gets the deviceImages property value. A collection of device image resources on Cloud PC.
     * @return array<CloudPcDeviceImage>|null
    */
    public function getDeviceImages(): ?array {
        $val = $this->getBackingStore()->get('deviceImages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcDeviceImage::class);
            /** @var array<CloudPcDeviceImage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceImages'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([CloudPcAuditEvent::class, 'createFromDiscriminatorValue'])),
            'cloudPCs' => fn(ParseNode $n) => $o->setCloudPCs($n->getCollectionOfObjectValues([CloudPC::class, 'createFromDiscriminatorValue'])),
            'deviceImages' => fn(ParseNode $n) => $o->setDeviceImages($n->getCollectionOfObjectValues([CloudPcDeviceImage::class, 'createFromDiscriminatorValue'])),
            'galleryImages' => fn(ParseNode $n) => $o->setGalleryImages($n->getCollectionOfObjectValues([CloudPcGalleryImage::class, 'createFromDiscriminatorValue'])),
            'onPremisesConnections' => fn(ParseNode $n) => $o->setOnPremisesConnections($n->getCollectionOfObjectValues([CloudPcOnPremisesConnection::class, 'createFromDiscriminatorValue'])),
            'provisioningPolicies' => fn(ParseNode $n) => $o->setProvisioningPolicies($n->getCollectionOfObjectValues([CloudPcProvisioningPolicy::class, 'createFromDiscriminatorValue'])),
            'userSettings' => fn(ParseNode $n) => $o->setUserSettings($n->getCollectionOfObjectValues([CloudPcUserSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the galleryImages property value. A collection of gallery image resources on Cloud PC.
     * @return array<CloudPcGalleryImage>|null
    */
    public function getGalleryImages(): ?array {
        $val = $this->getBackingStore()->get('galleryImages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcGalleryImage::class);
            /** @var array<CloudPcGalleryImage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'galleryImages'");
    }

    /**
     * Gets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish Azure network connections for Cloud PCs.
     * @return array<CloudPcOnPremisesConnection>|null
    */
    public function getOnPremisesConnections(): ?array {
        $val = $this->getBackingStore()->get('onPremisesConnections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcOnPremisesConnection::class);
            /** @var array<CloudPcOnPremisesConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesConnections'");
    }

    /**
     * Gets the provisioningPolicies property value. A collection of Cloud PC provisioning policies.
     * @return array<CloudPcProvisioningPolicy>|null
    */
    public function getProvisioningPolicies(): ?array {
        $val = $this->getBackingStore()->get('provisioningPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcProvisioningPolicy::class);
            /** @var array<CloudPcProvisioningPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningPolicies'");
    }

    /**
     * Gets the userSettings property value. A collection of Cloud PC user settings.
     * @return array<CloudPcUserSetting>|null
    */
    public function getUserSettings(): ?array {
        $val = $this->getBackingStore()->get('userSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserSetting::class);
            /** @var array<CloudPcUserSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('cloudPCs', $this->getCloudPCs());
        $writer->writeCollectionOfObjectValues('deviceImages', $this->getDeviceImages());
        $writer->writeCollectionOfObjectValues('galleryImages', $this->getGalleryImages());
        $writer->writeCollectionOfObjectValues('onPremisesConnections', $this->getOnPremisesConnections());
        $writer->writeCollectionOfObjectValues('provisioningPolicies', $this->getProvisioningPolicies());
        $writer->writeCollectionOfObjectValues('userSettings', $this->getUserSettings());
    }

    /**
     * Sets the auditEvents property value. A collection of Cloud PC audit events.
     * @param array<CloudPcAuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the cloudPCs property value. A collection of cloud-managed virtual desktops.
     * @param array<CloudPC>|null $value Value to set for the cloudPCs property.
    */
    public function setCloudPCs(?array $value): void {
        $this->getBackingStore()->set('cloudPCs', $value);
    }

    /**
     * Sets the deviceImages property value. A collection of device image resources on Cloud PC.
     * @param array<CloudPcDeviceImage>|null $value Value to set for the deviceImages property.
    */
    public function setDeviceImages(?array $value): void {
        $this->getBackingStore()->set('deviceImages', $value);
    }

    /**
     * Sets the galleryImages property value. A collection of gallery image resources on Cloud PC.
     * @param array<CloudPcGalleryImage>|null $value Value to set for the galleryImages property.
    */
    public function setGalleryImages(?array $value): void {
        $this->getBackingStore()->set('galleryImages', $value);
    }

    /**
     * Sets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish Azure network connections for Cloud PCs.
     * @param array<CloudPcOnPremisesConnection>|null $value Value to set for the onPremisesConnections property.
    */
    public function setOnPremisesConnections(?array $value): void {
        $this->getBackingStore()->set('onPremisesConnections', $value);
    }

    /**
     * Sets the provisioningPolicies property value. A collection of Cloud PC provisioning policies.
     * @param array<CloudPcProvisioningPolicy>|null $value Value to set for the provisioningPolicies property.
    */
    public function setProvisioningPolicies(?array $value): void {
        $this->getBackingStore()->set('provisioningPolicies', $value);
    }

    /**
     * Sets the userSettings property value. A collection of Cloud PC user settings.
     * @param array<CloudPcUserSetting>|null $value Value to set for the userSettings property.
    */
    public function setUserSettings(?array $value): void {
        $this->getBackingStore()->set('userSettings', $value);
    }

}
