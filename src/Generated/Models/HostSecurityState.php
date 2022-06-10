<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostSecurityState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $fqdn Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
    */
    private ?string $fqdn = null;
    
    /**
     * @var bool|null $isAzureAdJoined The isAzureAdJoined property
    */
    private ?bool $isAzureAdJoined = null;
    
    /**
     * @var bool|null $isAzureAdRegistered The isAzureAdRegistered property
    */
    private ?bool $isAzureAdRegistered = null;
    
    /**
     * @var bool|null $isHybridAzureDomainJoined True if the host is domain joined to an on-premises Active Directory domain.
    */
    private ?bool $isHybridAzureDomainJoined = null;
    
    /**
     * @var string|null $netBiosName The local host name, without the DNS domain name.
    */
    private ?string $netBiosName = null;
    
    /**
     * @var string|null $os Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
    */
    private ?string $os = null;
    
    /**
     * @var string|null $privateIpAddress Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
    */
    private ?string $privateIpAddress = null;
    
    /**
     * @var string|null $publicIpAddress Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
    */
    private ?string $publicIpAddress = null;
    
    /**
     * @var string|null $riskScore Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
    */
    private ?string $riskScore = null;
    
    /**
     * Instantiates a new hostSecurityState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fqdn' => function (ParseNode $n) use ($o) { $o->setFqdn($n->getStringValue()); },
            'isAzureAdJoined' => function (ParseNode $n) use ($o) { $o->setIsAzureAdJoined($n->getBooleanValue()); },
            'isAzureAdRegistered' => function (ParseNode $n) use ($o) { $o->setIsAzureAdRegistered($n->getBooleanValue()); },
            'isHybridAzureDomainJoined' => function (ParseNode $n) use ($o) { $o->setIsHybridAzureDomainJoined($n->getBooleanValue()); },
            'netBiosName' => function (ParseNode $n) use ($o) { $o->setNetBiosName($n->getStringValue()); },
            'os' => function (ParseNode $n) use ($o) { $o->setOs($n->getStringValue()); },
            'privateIpAddress' => function (ParseNode $n) use ($o) { $o->setPrivateIpAddress($n->getStringValue()); },
            'publicIpAddress' => function (ParseNode $n) use ($o) { $o->setPublicIpAddress($n->getStringValue()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fqdn property value. Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
     * @return string|null
    */
    public function getFqdn(): ?string {
        return $this->fqdn;
    }

    /**
     * Gets the isAzureAdJoined property value. The isAzureAdJoined property
     * @return bool|null
    */
    public function getIsAzureAdJoined(): ?bool {
        return $this->isAzureAdJoined;
    }

    /**
     * Gets the isAzureAdRegistered property value. The isAzureAdRegistered property
     * @return bool|null
    */
    public function getIsAzureAdRegistered(): ?bool {
        return $this->isAzureAdRegistered;
    }

    /**
     * Gets the isHybridAzureDomainJoined property value. True if the host is domain joined to an on-premises Active Directory domain.
     * @return bool|null
    */
    public function getIsHybridAzureDomainJoined(): ?bool {
        return $this->isHybridAzureDomainJoined;
    }

    /**
     * Gets the netBiosName property value. The local host name, without the DNS domain name.
     * @return string|null
    */
    public function getNetBiosName(): ?string {
        return $this->netBiosName;
    }

    /**
     * Gets the os property value. Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->os;
    }

    /**
     * Gets the privateIpAddress property value. Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
     * @return string|null
    */
    public function getPrivateIpAddress(): ?string {
        return $this->privateIpAddress;
    }

    /**
     * Gets the publicIpAddress property value. Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
     * @return string|null
    */
    public function getPublicIpAddress(): ?string {
        return $this->publicIpAddress;
    }

    /**
     * Gets the riskScore property value. Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fqdn', $this->fqdn);
        $writer->writeBooleanValue('isAzureAdJoined', $this->isAzureAdJoined);
        $writer->writeBooleanValue('isAzureAdRegistered', $this->isAzureAdRegistered);
        $writer->writeBooleanValue('isHybridAzureDomainJoined', $this->isHybridAzureDomainJoined);
        $writer->writeStringValue('netBiosName', $this->netBiosName);
        $writer->writeStringValue('os', $this->os);
        $writer->writeStringValue('privateIpAddress', $this->privateIpAddress);
        $writer->writeStringValue('publicIpAddress', $this->publicIpAddress);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the fqdn property value. Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
     *  @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value ): void {
        $this->fqdn = $value;
    }

    /**
     * Sets the isAzureAdJoined property value. The isAzureAdJoined property
     *  @param bool|null $value Value to set for the isAzureAdJoined property.
    */
    public function setIsAzureAdJoined(?bool $value ): void {
        $this->isAzureAdJoined = $value;
    }

    /**
     * Sets the isAzureAdRegistered property value. The isAzureAdRegistered property
     *  @param bool|null $value Value to set for the isAzureAdRegistered property.
    */
    public function setIsAzureAdRegistered(?bool $value ): void {
        $this->isAzureAdRegistered = $value;
    }

    /**
     * Sets the isHybridAzureDomainJoined property value. True if the host is domain joined to an on-premises Active Directory domain.
     *  @param bool|null $value Value to set for the isHybridAzureDomainJoined property.
    */
    public function setIsHybridAzureDomainJoined(?bool $value ): void {
        $this->isHybridAzureDomainJoined = $value;
    }

    /**
     * Sets the netBiosName property value. The local host name, without the DNS domain name.
     *  @param string|null $value Value to set for the netBiosName property.
    */
    public function setNetBiosName(?string $value ): void {
        $this->netBiosName = $value;
    }

    /**
     * Sets the os property value. Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value ): void {
        $this->os = $value;
    }

    /**
     * Sets the privateIpAddress property value. Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
     *  @param string|null $value Value to set for the privateIpAddress property.
    */
    public function setPrivateIpAddress(?string $value ): void {
        $this->privateIpAddress = $value;
    }

    /**
     * Sets the publicIpAddress property value. Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
     *  @param string|null $value Value to set for the publicIpAddress property.
    */
    public function setPublicIpAddress(?string $value ): void {
        $this->publicIpAddress = $value;
    }

    /**
     * Sets the riskScore property value. Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

}
