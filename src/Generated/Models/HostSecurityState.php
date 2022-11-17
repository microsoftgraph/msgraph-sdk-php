<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class HostSecurityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hostSecurityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.hostSecurityState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostSecurityState {
        return new HostSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fqdn' => fn(ParseNode $n) => $o->setFqdn($n->getStringValue()),
            'isAzureAdJoined' => fn(ParseNode $n) => $o->setIsAzureAdJoined($n->getBooleanValue()),
            'isAzureAdRegistered' => fn(ParseNode $n) => $o->setIsAzureAdRegistered($n->getBooleanValue()),
            'isHybridAzureDomainJoined' => fn(ParseNode $n) => $o->setIsHybridAzureDomainJoined($n->getBooleanValue()),
            'netBiosName' => fn(ParseNode $n) => $o->setNetBiosName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'privateIpAddress' => fn(ParseNode $n) => $o->setPrivateIpAddress($n->getStringValue()),
            'publicIpAddress' => fn(ParseNode $n) => $o->setPublicIpAddress($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
        ];
    }

    /**
     * Gets the fqdn property value. Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
     * @return string|null
    */
    public function getFqdn(): ?string {
        return $this->getBackingStore()->get('fqdn');
    }

    /**
     * Gets the isAzureAdJoined property value. The isAzureAdJoined property
     * @return bool|null
    */
    public function getIsAzureAdJoined(): ?bool {
        return $this->getBackingStore()->get('isAzureAdJoined');
    }

    /**
     * Gets the isAzureAdRegistered property value. The isAzureAdRegistered property
     * @return bool|null
    */
    public function getIsAzureAdRegistered(): ?bool {
        return $this->getBackingStore()->get('isAzureAdRegistered');
    }

    /**
     * Gets the isHybridAzureDomainJoined property value. True if the host is domain joined to an on-premises Active Directory domain.
     * @return bool|null
    */
    public function getIsHybridAzureDomainJoined(): ?bool {
        return $this->getBackingStore()->get('isHybridAzureDomainJoined');
    }

    /**
     * Gets the netBiosName property value. The local host name, without the DNS domain name.
     * @return string|null
    */
    public function getNetBiosName(): ?string {
        return $this->getBackingStore()->get('netBiosName');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the os property value. Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->getBackingStore()->get('os');
    }

    /**
     * Gets the privateIpAddress property value. Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
     * @return string|null
    */
    public function getPrivateIpAddress(): ?string {
        return $this->getBackingStore()->get('privateIpAddress');
    }

    /**
     * Gets the publicIpAddress property value. Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
     * @return string|null
    */
    public function getPublicIpAddress(): ?string {
        return $this->getBackingStore()->get('publicIpAddress');
    }

    /**
     * Gets the riskScore property value. Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fqdn', $this->getFqdn());
        $writer->writeBooleanValue('isAzureAdJoined', $this->getIsAzureAdJoined());
        $writer->writeBooleanValue('isAzureAdRegistered', $this->getIsAzureAdRegistered());
        $writer->writeBooleanValue('isHybridAzureDomainJoined', $this->getIsHybridAzureDomainJoined());
        $writer->writeStringValue('netBiosName', $this->getNetBiosName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeStringValue('privateIpAddress', $this->getPrivateIpAddress());
        $writer->writeStringValue('publicIpAddress', $this->getPublicIpAddress());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the fqdn property value. Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
     *  @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value): void {
        $this->getBackingStore()->set('fqdn', $value);
    }

    /**
     * Sets the isAzureAdJoined property value. The isAzureAdJoined property
     *  @param bool|null $value Value to set for the isAzureAdJoined property.
    */
    public function setIsAzureAdJoined(?bool $value): void {
        $this->getBackingStore()->set('isAzureAdJoined', $value);
    }

    /**
     * Sets the isAzureAdRegistered property value. The isAzureAdRegistered property
     *  @param bool|null $value Value to set for the isAzureAdRegistered property.
    */
    public function setIsAzureAdRegistered(?bool $value): void {
        $this->getBackingStore()->set('isAzureAdRegistered', $value);
    }

    /**
     * Sets the isHybridAzureDomainJoined property value. True if the host is domain joined to an on-premises Active Directory domain.
     *  @param bool|null $value Value to set for the isHybridAzureDomainJoined property.
    */
    public function setIsHybridAzureDomainJoined(?bool $value): void {
        $this->getBackingStore()->set('isHybridAzureDomainJoined', $value);
    }

    /**
     * Sets the netBiosName property value. The local host name, without the DNS domain name.
     *  @param string|null $value Value to set for the netBiosName property.
    */
    public function setNetBiosName(?string $value): void {
        $this->getBackingStore()->set('netBiosName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the os property value. Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the privateIpAddress property value. Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
     *  @param string|null $value Value to set for the privateIpAddress property.
    */
    public function setPrivateIpAddress(?string $value): void {
        $this->getBackingStore()->set('privateIpAddress', $value);
    }

    /**
     * Sets the publicIpAddress property value. Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
     *  @param string|null $value Value to set for the publicIpAddress property.
    */
    public function setPublicIpAddress(?string $value): void {
        $this->getBackingStore()->set('publicIpAddress', $value);
    }

    /**
     * Sets the riskScore property value. Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

}
