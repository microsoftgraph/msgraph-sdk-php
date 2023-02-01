<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NetworkConnection implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new networkConnection and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkConnection {
        return new NetworkConnection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applicationName property value. Name of the application managing the network connection (for example, Facebook or SMTP).
     * @return string|null
    */
    public function getApplicationName(): ?string {
        return $this->getBackingStore()->get('applicationName');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the destinationAddress property value. Destination IP address (of the network connection).
     * @return string|null
    */
    public function getDestinationAddress(): ?string {
        return $this->getBackingStore()->get('destinationAddress');
    }

    /**
     * Gets the destinationDomain property value. Destination domain portion of the destination URL. (for example 'www.contoso.com').
     * @return string|null
    */
    public function getDestinationDomain(): ?string {
        return $this->getBackingStore()->get('destinationDomain');
    }

    /**
     * Gets the destinationLocation property value. Location (by IP address mapping) associated with the destination of a network connection.
     * @return string|null
    */
    public function getDestinationLocation(): ?string {
        return $this->getBackingStore()->get('destinationLocation');
    }

    /**
     * Gets the destinationPort property value. Destination port (of the network connection).
     * @return string|null
    */
    public function getDestinationPort(): ?string {
        return $this->getBackingStore()->get('destinationPort');
    }

    /**
     * Gets the destinationUrl property value. Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
     * @return string|null
    */
    public function getDestinationUrl(): ?string {
        return $this->getBackingStore()->get('destinationUrl');
    }

    /**
     * Gets the direction property value. Network connection direction. Possible values are: unknown, inbound, outbound.
     * @return ConnectionDirection|null
    */
    public function getDirection(): ?ConnectionDirection {
        return $this->getBackingStore()->get('direction');
    }

    /**
     * Gets the domainRegisteredDateTime property value. Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDomainRegisteredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('domainRegisteredDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationName' => fn(ParseNode $n) => $o->setApplicationName($n->getStringValue()),
            'destinationAddress' => fn(ParseNode $n) => $o->setDestinationAddress($n->getStringValue()),
            'destinationDomain' => fn(ParseNode $n) => $o->setDestinationDomain($n->getStringValue()),
            'destinationLocation' => fn(ParseNode $n) => $o->setDestinationLocation($n->getStringValue()),
            'destinationPort' => fn(ParseNode $n) => $o->setDestinationPort($n->getStringValue()),
            'destinationUrl' => fn(ParseNode $n) => $o->setDestinationUrl($n->getStringValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getEnumValue(ConnectionDirection::class)),
            'domainRegisteredDateTime' => fn(ParseNode $n) => $o->setDomainRegisteredDateTime($n->getDateTimeValue()),
            'localDnsName' => fn(ParseNode $n) => $o->setLocalDnsName($n->getStringValue()),
            'natDestinationAddress' => fn(ParseNode $n) => $o->setNatDestinationAddress($n->getStringValue()),
            'natDestinationPort' => fn(ParseNode $n) => $o->setNatDestinationPort($n->getStringValue()),
            'natSourceAddress' => fn(ParseNode $n) => $o->setNatSourceAddress($n->getStringValue()),
            'natSourcePort' => fn(ParseNode $n) => $o->setNatSourcePort($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getEnumValue(SecurityNetworkProtocol::class)),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'sourceAddress' => fn(ParseNode $n) => $o->setSourceAddress($n->getStringValue()),
            'sourceLocation' => fn(ParseNode $n) => $o->setSourceLocation($n->getStringValue()),
            'sourcePort' => fn(ParseNode $n) => $o->setSourcePort($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ConnectionStatus::class)),
            'urlParameters' => fn(ParseNode $n) => $o->setUrlParameters($n->getStringValue()),
        ];
    }

    /**
     * Gets the localDnsName property value. The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
     * @return string|null
    */
    public function getLocalDnsName(): ?string {
        return $this->getBackingStore()->get('localDnsName');
    }

    /**
     * Gets the natDestinationAddress property value. Network Address Translation destination IP address.
     * @return string|null
    */
    public function getNatDestinationAddress(): ?string {
        return $this->getBackingStore()->get('natDestinationAddress');
    }

    /**
     * Gets the natDestinationPort property value. Network Address Translation destination port.
     * @return string|null
    */
    public function getNatDestinationPort(): ?string {
        return $this->getBackingStore()->get('natDestinationPort');
    }

    /**
     * Gets the natSourceAddress property value. Network Address Translation source IP address.
     * @return string|null
    */
    public function getNatSourceAddress(): ?string {
        return $this->getBackingStore()->get('natSourceAddress');
    }

    /**
     * Gets the natSourcePort property value. Network Address Translation source port.
     * @return string|null
    */
    public function getNatSourcePort(): ?string {
        return $this->getBackingStore()->get('natSourcePort');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the protocol property value. Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     * @return SecurityNetworkProtocol|null
    */
    public function getProtocol(): ?SecurityNetworkProtocol {
        return $this->getBackingStore()->get('protocol');
    }

    /**
     * Gets the riskScore property value. Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the sourceAddress property value. Source (i.e. origin) IP address (of the network connection).
     * @return string|null
    */
    public function getSourceAddress(): ?string {
        return $this->getBackingStore()->get('sourceAddress');
    }

    /**
     * Gets the sourceLocation property value. Location (by IP address mapping) associated with the source of a network connection.
     * @return string|null
    */
    public function getSourceLocation(): ?string {
        return $this->getBackingStore()->get('sourceLocation');
    }

    /**
     * Gets the sourcePort property value. Source (i.e. origin) IP port (of the network connection).
     * @return string|null
    */
    public function getSourcePort(): ?string {
        return $this->getBackingStore()->get('sourcePort');
    }

    /**
     * Gets the status property value. Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     * @return ConnectionStatus|null
    */
    public function getStatus(): ?ConnectionStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the urlParameters property value. Parameters (suffix) of the destination URL.
     * @return string|null
    */
    public function getUrlParameters(): ?string {
        return $this->getBackingStore()->get('urlParameters');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationName', $this->getApplicationName());
        $writer->writeStringValue('destinationAddress', $this->getDestinationAddress());
        $writer->writeStringValue('destinationDomain', $this->getDestinationDomain());
        $writer->writeStringValue('destinationLocation', $this->getDestinationLocation());
        $writer->writeStringValue('destinationPort', $this->getDestinationPort());
        $writer->writeStringValue('destinationUrl', $this->getDestinationUrl());
        $writer->writeEnumValue('direction', $this->getDirection());
        $writer->writeDateTimeValue('domainRegisteredDateTime', $this->getDomainRegisteredDateTime());
        $writer->writeStringValue('localDnsName', $this->getLocalDnsName());
        $writer->writeStringValue('natDestinationAddress', $this->getNatDestinationAddress());
        $writer->writeStringValue('natDestinationPort', $this->getNatDestinationPort());
        $writer->writeStringValue('natSourceAddress', $this->getNatSourceAddress());
        $writer->writeStringValue('natSourcePort', $this->getNatSourcePort());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('protocol', $this->getProtocol());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeStringValue('sourceAddress', $this->getSourceAddress());
        $writer->writeStringValue('sourceLocation', $this->getSourceLocation());
        $writer->writeStringValue('sourcePort', $this->getSourcePort());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('urlParameters', $this->getUrlParameters());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationName property value. Name of the application managing the network connection (for example, Facebook or SMTP).
     * @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value): void {
        $this->getBackingStore()->set('applicationName', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the destinationAddress property value. Destination IP address (of the network connection).
     * @param string|null $value Value to set for the destinationAddress property.
    */
    public function setDestinationAddress(?string $value): void {
        $this->getBackingStore()->set('destinationAddress', $value);
    }

    /**
     * Sets the destinationDomain property value. Destination domain portion of the destination URL. (for example 'www.contoso.com').
     * @param string|null $value Value to set for the destinationDomain property.
    */
    public function setDestinationDomain(?string $value): void {
        $this->getBackingStore()->set('destinationDomain', $value);
    }

    /**
     * Sets the destinationLocation property value. Location (by IP address mapping) associated with the destination of a network connection.
     * @param string|null $value Value to set for the destinationLocation property.
    */
    public function setDestinationLocation(?string $value): void {
        $this->getBackingStore()->set('destinationLocation', $value);
    }

    /**
     * Sets the destinationPort property value. Destination port (of the network connection).
     * @param string|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?string $value): void {
        $this->getBackingStore()->set('destinationPort', $value);
    }

    /**
     * Sets the destinationUrl property value. Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
     * @param string|null $value Value to set for the destinationUrl property.
    */
    public function setDestinationUrl(?string $value): void {
        $this->getBackingStore()->set('destinationUrl', $value);
    }

    /**
     * Sets the direction property value. Network connection direction. Possible values are: unknown, inbound, outbound.
     * @param ConnectionDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?ConnectionDirection $value): void {
        $this->getBackingStore()->set('direction', $value);
    }

    /**
     * Sets the domainRegisteredDateTime property value. Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the domainRegisteredDateTime property.
    */
    public function setDomainRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('domainRegisteredDateTime', $value);
    }

    /**
     * Sets the localDnsName property value. The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
     * @param string|null $value Value to set for the localDnsName property.
    */
    public function setLocalDnsName(?string $value): void {
        $this->getBackingStore()->set('localDnsName', $value);
    }

    /**
     * Sets the natDestinationAddress property value. Network Address Translation destination IP address.
     * @param string|null $value Value to set for the natDestinationAddress property.
    */
    public function setNatDestinationAddress(?string $value): void {
        $this->getBackingStore()->set('natDestinationAddress', $value);
    }

    /**
     * Sets the natDestinationPort property value. Network Address Translation destination port.
     * @param string|null $value Value to set for the natDestinationPort property.
    */
    public function setNatDestinationPort(?string $value): void {
        $this->getBackingStore()->set('natDestinationPort', $value);
    }

    /**
     * Sets the natSourceAddress property value. Network Address Translation source IP address.
     * @param string|null $value Value to set for the natSourceAddress property.
    */
    public function setNatSourceAddress(?string $value): void {
        $this->getBackingStore()->set('natSourceAddress', $value);
    }

    /**
     * Sets the natSourcePort property value. Network Address Translation source port.
     * @param string|null $value Value to set for the natSourcePort property.
    */
    public function setNatSourcePort(?string $value): void {
        $this->getBackingStore()->set('natSourcePort', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the protocol property value. Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     * @param SecurityNetworkProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?SecurityNetworkProtocol $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the riskScore property value. Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
     * @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the sourceAddress property value. Source (i.e. origin) IP address (of the network connection).
     * @param string|null $value Value to set for the sourceAddress property.
    */
    public function setSourceAddress(?string $value): void {
        $this->getBackingStore()->set('sourceAddress', $value);
    }

    /**
     * Sets the sourceLocation property value. Location (by IP address mapping) associated with the source of a network connection.
     * @param string|null $value Value to set for the sourceLocation property.
    */
    public function setSourceLocation(?string $value): void {
        $this->getBackingStore()->set('sourceLocation', $value);
    }

    /**
     * Sets the sourcePort property value. Source (i.e. origin) IP port (of the network connection).
     * @param string|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?string $value): void {
        $this->getBackingStore()->set('sourcePort', $value);
    }

    /**
     * Sets the status property value. Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     * @param ConnectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the urlParameters property value. Parameters (suffix) of the destination URL.
     * @param string|null $value Value to set for the urlParameters property.
    */
    public function setUrlParameters(?string $value): void {
        $this->getBackingStore()->set('urlParameters', $value);
    }

}
