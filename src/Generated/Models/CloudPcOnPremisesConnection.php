<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOnPremisesConnection extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcOnPremisesConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOnPremisesConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOnPremisesConnection {
        return new CloudPcOnPremisesConnection();
    }

    /**
     * Gets the adDomainName property value. The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Maximum length is 255. Optional.
     * @return string|null
    */
    public function getAdDomainName(): ?string {
        $val = $this->getBackingStore()->get('adDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainName'");
    }

    /**
     * Gets the adDomainPassword property value. The password associated with the username of an Active Directory account (adDomainUsername).
     * @return string|null
    */
    public function getAdDomainPassword(): ?string {
        $val = $this->getBackingStore()->get('adDomainPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainPassword'");
    }

    /**
     * Gets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permission to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     * @return string|null
    */
    public function getAdDomainUsername(): ?string {
        $val = $this->getBackingStore()->get('adDomainUsername');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainUsername'");
    }

    /**
     * Gets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
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
     * Gets the connectionType property value. Specifies how the provisioned Cloud PC joins to Microsoft Entra. It includes different types, one is Microsoft Entra ID join, which means there's no on-premises Active Directory (AD) in the current tenant, and the Cloud PC device is joined by Microsoft Entra. Another one is hybridAzureADJoin, which means there's also an on-premises Active Directory (AD) in the current tenant and the Cloud PC device joins to on-premises Active Directory (AD) and Microsoft Entra. The type also determines which types of users can be assigned and can sign into a Cloud PC. The azureADJoin type indicates that cloud-only and hybrid users can be assigned and signed into the Cloud PC. hybridAzureADJoin indicates only hybrid users can be assigned and signed into the Cloud PC. The default value is hybridAzureADJoin.
     * @return CloudPcOnPremisesConnectionType|null
    */
    public function getConnectionType(): ?CloudPcOnPremisesConnectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the displayName property value. The display name for the Azure network connection.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adDomainName' => fn(ParseNode $n) => $o->setAdDomainName($n->getStringValue()),
            'adDomainPassword' => fn(ParseNode $n) => $o->setAdDomainPassword($n->getStringValue()),
            'adDomainUsername' => fn(ParseNode $n) => $o->setAdDomainUsername($n->getStringValue()),
            'alternateResourceUrl' => fn(ParseNode $n) => $o->setAlternateResourceUrl($n->getStringValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(CloudPcOnPremisesConnectionType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'healthCheckStatus' => fn(ParseNode $n) => $o->setHealthCheckStatus($n->getEnumValue(CloudPcOnPremisesConnectionStatus::class)),
            'healthCheckStatusDetail' => fn(ParseNode $n) => $o->setHealthCheckStatusDetail($n->getObjectValue([CloudPcOnPremisesConnectionStatusDetail::class, 'createFromDiscriminatorValue'])),
            'inUse' => fn(ParseNode $n) => $o->setInUse($n->getBooleanValue()),
            'organizationalUnit' => fn(ParseNode $n) => $o->setOrganizationalUnit($n->getStringValue()),
            'resourceGroupId' => fn(ParseNode $n) => $o->setResourceGroupId($n->getStringValue()),
            'subnetId' => fn(ParseNode $n) => $o->setSubnetId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionName' => fn(ParseNode $n) => $o->setSubscriptionName($n->getStringValue()),
            'virtualNetworkId' => fn(ParseNode $n) => $o->setVirtualNetworkId($n->getStringValue()),
            'virtualNetworkLocation' => fn(ParseNode $n) => $o->setVirtualNetworkLocation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthCheckStatus property value. The healthCheckStatus property
     * @return CloudPcOnPremisesConnectionStatus|null
    */
    public function getHealthCheckStatus(): ?CloudPcOnPremisesConnectionStatus {
        $val = $this->getBackingStore()->get('healthCheckStatus');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatus'");
    }

    /**
     * Gets the healthCheckStatusDetail property value. Indicates the results of health checks performed on the on-premises connection. Read-only. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     * @return CloudPcOnPremisesConnectionStatusDetail|null
    */
    public function getHealthCheckStatusDetail(): ?CloudPcOnPremisesConnectionStatusDetail {
        $val = $this->getBackingStore()->get('healthCheckStatusDetail');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionStatusDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatusDetail'");
    }

    /**
     * Gets the inUse property value. When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     * @return bool|null
    */
    public function getInUse(): ?bool {
        $val = $this->getBackingStore()->get('inUse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inUse'");
    }

    /**
     * Gets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU configured as the default (a well-known computer object container) in the tenant's Active Directory domain (OU) is used. Optional.
     * @return string|null
    */
    public function getOrganizationalUnit(): ?string {
        $val = $this->getBackingStore()->get('organizationalUnit');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalUnit'");
    }

    /**
     * Gets the resourceGroupId property value. The unique identifier of the target resource group used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}'
     * @return string|null
    */
    public function getResourceGroupId(): ?string {
        $val = $this->getBackingStore()->get('resourceGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroupId'");
    }

    /**
     * Gets the subnetId property value. The unique identifier of the target subnet used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}'
     * @return string|null
    */
    public function getSubnetId(): ?string {
        $val = $this->getBackingStore()->get('subnetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnetId'");
    }

    /**
     * Gets the subscriptionId property value. The unique identifier of the Azure subscription associated with the tenant.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the subscriptionName property value. The name of the Azure subscription is used to create an Azure network connection. Read-only.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        $val = $this->getBackingStore()->get('subscriptionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionName'");
    }

    /**
     * Gets the virtualNetworkId property value. The unique identifier of the target virtual network used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}'
     * @return string|null
    */
    public function getVirtualNetworkId(): ?string {
        $val = $this->getBackingStore()->get('virtualNetworkId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualNetworkId'");
    }

    /**
     * Gets the virtualNetworkLocation property value. Indicates the resource location of the target virtual network. For example, the location can be eastus2, westeurope, etc. Read-only (computed value).
     * @return string|null
    */
    public function getVirtualNetworkLocation(): ?string {
        $val = $this->getBackingStore()->get('virtualNetworkLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualNetworkLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('adDomainName', $this->getAdDomainName());
        $writer->writeStringValue('adDomainPassword', $this->getAdDomainPassword());
        $writer->writeStringValue('adDomainUsername', $this->getAdDomainUsername());
        $writer->writeStringValue('alternateResourceUrl', $this->getAlternateResourceUrl());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('healthCheckStatus', $this->getHealthCheckStatus());
        $writer->writeObjectValue('healthCheckStatusDetail', $this->getHealthCheckStatusDetail());
        $writer->writeBooleanValue('inUse', $this->getInUse());
        $writer->writeStringValue('organizationalUnit', $this->getOrganizationalUnit());
        $writer->writeStringValue('resourceGroupId', $this->getResourceGroupId());
        $writer->writeStringValue('subnetId', $this->getSubnetId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionName', $this->getSubscriptionName());
        $writer->writeStringValue('virtualNetworkId', $this->getVirtualNetworkId());
        $writer->writeStringValue('virtualNetworkLocation', $this->getVirtualNetworkLocation());
    }

    /**
     * Sets the adDomainName property value. The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Maximum length is 255. Optional.
     * @param string|null $value Value to set for the adDomainName property.
    */
    public function setAdDomainName(?string $value): void {
        $this->getBackingStore()->set('adDomainName', $value);
    }

    /**
     * Sets the adDomainPassword property value. The password associated with the username of an Active Directory account (adDomainUsername).
     * @param string|null $value Value to set for the adDomainPassword property.
    */
    public function setAdDomainPassword(?string $value): void {
        $this->getBackingStore()->set('adDomainPassword', $value);
    }

    /**
     * Sets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permission to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     * @param string|null $value Value to set for the adDomainUsername property.
    */
    public function setAdDomainUsername(?string $value): void {
        $this->getBackingStore()->set('adDomainUsername', $value);
    }

    /**
     * Sets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     * @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value): void {
        $this->getBackingStore()->set('alternateResourceUrl', $value);
    }

    /**
     * Sets the connectionType property value. Specifies how the provisioned Cloud PC joins to Microsoft Entra. It includes different types, one is Microsoft Entra ID join, which means there's no on-premises Active Directory (AD) in the current tenant, and the Cloud PC device is joined by Microsoft Entra. Another one is hybridAzureADJoin, which means there's also an on-premises Active Directory (AD) in the current tenant and the Cloud PC device joins to on-premises Active Directory (AD) and Microsoft Entra. The type also determines which types of users can be assigned and can sign into a Cloud PC. The azureADJoin type indicates that cloud-only and hybrid users can be assigned and signed into the Cloud PC. hybridAzureADJoin indicates only hybrid users can be assigned and signed into the Cloud PC. The default value is hybridAzureADJoin.
     * @param CloudPcOnPremisesConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?CloudPcOnPremisesConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the displayName property value. The display name for the Azure network connection.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the healthCheckStatus property value. The healthCheckStatus property
     * @param CloudPcOnPremisesConnectionStatus|null $value Value to set for the healthCheckStatus property.
    */
    public function setHealthCheckStatus(?CloudPcOnPremisesConnectionStatus $value): void {
        $this->getBackingStore()->set('healthCheckStatus', $value);
    }

    /**
     * Sets the healthCheckStatusDetail property value. Indicates the results of health checks performed on the on-premises connection. Read-only. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     * @param CloudPcOnPremisesConnectionStatusDetail|null $value Value to set for the healthCheckStatusDetail property.
    */
    public function setHealthCheckStatusDetail(?CloudPcOnPremisesConnectionStatusDetail $value): void {
        $this->getBackingStore()->set('healthCheckStatusDetail', $value);
    }

    /**
     * Sets the inUse property value. When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     * @param bool|null $value Value to set for the inUse property.
    */
    public function setInUse(?bool $value): void {
        $this->getBackingStore()->set('inUse', $value);
    }

    /**
     * Sets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU configured as the default (a well-known computer object container) in the tenant's Active Directory domain (OU) is used. Optional.
     * @param string|null $value Value to set for the organizationalUnit property.
    */
    public function setOrganizationalUnit(?string $value): void {
        $this->getBackingStore()->set('organizationalUnit', $value);
    }

    /**
     * Sets the resourceGroupId property value. The unique identifier of the target resource group used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}'
     * @param string|null $value Value to set for the resourceGroupId property.
    */
    public function setResourceGroupId(?string $value): void {
        $this->getBackingStore()->set('resourceGroupId', $value);
    }

    /**
     * Sets the subnetId property value. The unique identifier of the target subnet used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}'
     * @param string|null $value Value to set for the subnetId property.
    */
    public function setSubnetId(?string $value): void {
        $this->getBackingStore()->set('subnetId', $value);
    }

    /**
     * Sets the subscriptionId property value. The unique identifier of the Azure subscription associated with the tenant.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the subscriptionName property value. The name of the Azure subscription is used to create an Azure network connection. Read-only.
     * @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value): void {
        $this->getBackingStore()->set('subscriptionName', $value);
    }

    /**
     * Sets the virtualNetworkId property value. The unique identifier of the target virtual network used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}'
     * @param string|null $value Value to set for the virtualNetworkId property.
    */
    public function setVirtualNetworkId(?string $value): void {
        $this->getBackingStore()->set('virtualNetworkId', $value);
    }

    /**
     * Sets the virtualNetworkLocation property value. Indicates the resource location of the target virtual network. For example, the location can be eastus2, westeurope, etc. Read-only (computed value).
     * @param string|null $value Value to set for the virtualNetworkLocation property.
    */
    public function setVirtualNetworkLocation(?string $value): void {
        $this->getBackingStore()->set('virtualNetworkLocation', $value);
    }

}
