<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcProvisioningPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcProvisioningPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcProvisioningPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicy {
        return new CloudPcProvisioningPolicy();
    }

    /**
     * Gets the alternateResourceUrl property value. The alternateResourceUrl property
     * @return string|null
    */
    public function getAlternateResourceUrl(): ?string {
        $val = $this->getBackingStore()->get('alternateResourceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateResourceUrl'");
    }

    /**
     * Gets the assignments property value. The assignments property
     * @return array<CloudPcProvisioningPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcProvisioningPolicyAssignment::class);
            /** @var array<CloudPcProvisioningPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the cloudPcGroupDisplayName property value. The cloudPcGroupDisplayName property
     * @return string|null
    */
    public function getCloudPcGroupDisplayName(): ?string {
        $val = $this->getBackingStore()->get('cloudPcGroupDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcGroupDisplayName'");
    }

    /**
     * Gets the cloudPcNamingTemplate property value. The cloudPcNamingTemplate property
     * @return string|null
    */
    public function getCloudPcNamingTemplate(): ?string {
        $val = $this->getBackingStore()->get('cloudPcNamingTemplate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcNamingTemplate'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the domainJoinConfigurations property value. The domainJoinConfigurations property
     * @return array<CloudPcDomainJoinConfiguration>|null
    */
    public function getDomainJoinConfigurations(): ?array {
        $val = $this->getBackingStore()->get('domainJoinConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcDomainJoinConfiguration::class);
            /** @var array<CloudPcDomainJoinConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainJoinConfigurations'");
    }

    /**
     * Gets the enableSingleSignOn property value. The enableSingleSignOn property
     * @return bool|null
    */
    public function getEnableSingleSignOn(): ?bool {
        $val = $this->getBackingStore()->get('enableSingleSignOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSingleSignOn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternateResourceUrl' => fn(ParseNode $n) => $o->setAlternateResourceUrl($n->getStringValue()),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([CloudPcProvisioningPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'cloudPcGroupDisplayName' => fn(ParseNode $n) => $o->setCloudPcGroupDisplayName($n->getStringValue()),
            'cloudPcNamingTemplate' => fn(ParseNode $n) => $o->setCloudPcNamingTemplate($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainJoinConfigurations' => fn(ParseNode $n) => $o->setDomainJoinConfigurations($n->getCollectionOfObjectValues([CloudPcDomainJoinConfiguration::class, 'createFromDiscriminatorValue'])),
            'enableSingleSignOn' => fn(ParseNode $n) => $o->setEnableSingleSignOn($n->getBooleanValue()),
            'gracePeriodInHours' => fn(ParseNode $n) => $o->setGracePeriodInHours($n->getIntegerValue()),
            'imageDisplayName' => fn(ParseNode $n) => $o->setImageDisplayName($n->getStringValue()),
            'imageId' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'imageType' => fn(ParseNode $n) => $o->setImageType($n->getEnumValue(CloudPcProvisioningPolicyImageType::class)),
            'localAdminEnabled' => fn(ParseNode $n) => $o->setLocalAdminEnabled($n->getBooleanValue()),
            'microsoftManagedDesktop' => fn(ParseNode $n) => $o->setMicrosoftManagedDesktop($n->getObjectValue([MicrosoftManagedDesktop::class, 'createFromDiscriminatorValue'])),
            'provisioningType' => fn(ParseNode $n) => $o->setProvisioningType($n->getEnumValue(CloudPcProvisioningType::class)),
            'windowsSetting' => fn(ParseNode $n) => $o->setWindowsSetting($n->getObjectValue([CloudPcWindowsSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gracePeriodInHours property value. The gracePeriodInHours property
     * @return int|null
    */
    public function getGracePeriodInHours(): ?int {
        $val = $this->getBackingStore()->get('gracePeriodInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodInHours'");
    }

    /**
     * Gets the imageDisplayName property value. The imageDisplayName property
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        $val = $this->getBackingStore()->get('imageDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageDisplayName'");
    }

    /**
     * Gets the imageId property value. The imageId property
     * @return string|null
    */
    public function getImageId(): ?string {
        $val = $this->getBackingStore()->get('imageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageId'");
    }

    /**
     * Gets the imageType property value. The imageType property
     * @return CloudPcProvisioningPolicyImageType|null
    */
    public function getImageType(): ?CloudPcProvisioningPolicyImageType {
        $val = $this->getBackingStore()->get('imageType');
        if (is_null($val) || $val instanceof CloudPcProvisioningPolicyImageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageType'");
    }

    /**
     * Gets the localAdminEnabled property value. The localAdminEnabled property
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        $val = $this->getBackingStore()->get('localAdminEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAdminEnabled'");
    }

    /**
     * Gets the microsoftManagedDesktop property value. The microsoftManagedDesktop property
     * @return MicrosoftManagedDesktop|null
    */
    public function getMicrosoftManagedDesktop(): ?MicrosoftManagedDesktop {
        $val = $this->getBackingStore()->get('microsoftManagedDesktop');
        if (is_null($val) || $val instanceof MicrosoftManagedDesktop) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftManagedDesktop'");
    }

    /**
     * Gets the provisioningType property value. The provisioningType property
     * @return CloudPcProvisioningType|null
    */
    public function getProvisioningType(): ?CloudPcProvisioningType {
        $val = $this->getBackingStore()->get('provisioningType');
        if (is_null($val) || $val instanceof CloudPcProvisioningType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningType'");
    }

    /**
     * Gets the windowsSetting property value. The windowsSetting property
     * @return CloudPcWindowsSetting|null
    */
    public function getWindowsSetting(): ?CloudPcWindowsSetting {
        $val = $this->getBackingStore()->get('windowsSetting');
        if (is_null($val) || $val instanceof CloudPcWindowsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsSetting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alternateResourceUrl', $this->getAlternateResourceUrl());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('cloudPcGroupDisplayName', $this->getCloudPcGroupDisplayName());
        $writer->writeStringValue('cloudPcNamingTemplate', $this->getCloudPcNamingTemplate());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('domainJoinConfigurations', $this->getDomainJoinConfigurations());
        $writer->writeBooleanValue('enableSingleSignOn', $this->getEnableSingleSignOn());
        $writer->writeIntegerValue('gracePeriodInHours', $this->getGracePeriodInHours());
        $writer->writeStringValue('imageDisplayName', $this->getImageDisplayName());
        $writer->writeStringValue('imageId', $this->getImageId());
        $writer->writeEnumValue('imageType', $this->getImageType());
        $writer->writeBooleanValue('localAdminEnabled', $this->getLocalAdminEnabled());
        $writer->writeObjectValue('microsoftManagedDesktop', $this->getMicrosoftManagedDesktop());
        $writer->writeEnumValue('provisioningType', $this->getProvisioningType());
        $writer->writeObjectValue('windowsSetting', $this->getWindowsSetting());
    }

    /**
     * Sets the alternateResourceUrl property value. The alternateResourceUrl property
     * @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value): void {
        $this->getBackingStore()->set('alternateResourceUrl', $value);
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param array<CloudPcProvisioningPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the cloudPcGroupDisplayName property value. The cloudPcGroupDisplayName property
     * @param string|null $value Value to set for the cloudPcGroupDisplayName property.
    */
    public function setCloudPcGroupDisplayName(?string $value): void {
        $this->getBackingStore()->set('cloudPcGroupDisplayName', $value);
    }

    /**
     * Sets the cloudPcNamingTemplate property value. The cloudPcNamingTemplate property
     * @param string|null $value Value to set for the cloudPcNamingTemplate property.
    */
    public function setCloudPcNamingTemplate(?string $value): void {
        $this->getBackingStore()->set('cloudPcNamingTemplate', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainJoinConfigurations property value. The domainJoinConfigurations property
     * @param array<CloudPcDomainJoinConfiguration>|null $value Value to set for the domainJoinConfigurations property.
    */
    public function setDomainJoinConfigurations(?array $value): void {
        $this->getBackingStore()->set('domainJoinConfigurations', $value);
    }

    /**
     * Sets the enableSingleSignOn property value. The enableSingleSignOn property
     * @param bool|null $value Value to set for the enableSingleSignOn property.
    */
    public function setEnableSingleSignOn(?bool $value): void {
        $this->getBackingStore()->set('enableSingleSignOn', $value);
    }

    /**
     * Sets the gracePeriodInHours property value. The gracePeriodInHours property
     * @param int|null $value Value to set for the gracePeriodInHours property.
    */
    public function setGracePeriodInHours(?int $value): void {
        $this->getBackingStore()->set('gracePeriodInHours', $value);
    }

    /**
     * Sets the imageDisplayName property value. The imageDisplayName property
     * @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value): void {
        $this->getBackingStore()->set('imageDisplayName', $value);
    }

    /**
     * Sets the imageId property value. The imageId property
     * @param string|null $value Value to set for the imageId property.
    */
    public function setImageId(?string $value): void {
        $this->getBackingStore()->set('imageId', $value);
    }

    /**
     * Sets the imageType property value. The imageType property
     * @param CloudPcProvisioningPolicyImageType|null $value Value to set for the imageType property.
    */
    public function setImageType(?CloudPcProvisioningPolicyImageType $value): void {
        $this->getBackingStore()->set('imageType', $value);
    }

    /**
     * Sets the localAdminEnabled property value. The localAdminEnabled property
     * @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value): void {
        $this->getBackingStore()->set('localAdminEnabled', $value);
    }

    /**
     * Sets the microsoftManagedDesktop property value. The microsoftManagedDesktop property
     * @param MicrosoftManagedDesktop|null $value Value to set for the microsoftManagedDesktop property.
    */
    public function setMicrosoftManagedDesktop(?MicrosoftManagedDesktop $value): void {
        $this->getBackingStore()->set('microsoftManagedDesktop', $value);
    }

    /**
     * Sets the provisioningType property value. The provisioningType property
     * @param CloudPcProvisioningType|null $value Value to set for the provisioningType property.
    */
    public function setProvisioningType(?CloudPcProvisioningType $value): void {
        $this->getBackingStore()->set('provisioningType', $value);
    }

    /**
     * Sets the windowsSetting property value. The windowsSetting property
     * @param CloudPcWindowsSetting|null $value Value to set for the windowsSetting property.
    */
    public function setWindowsSetting(?CloudPcWindowsSetting $value): void {
        $this->getBackingStore()->set('windowsSetting', $value);
    }

}
