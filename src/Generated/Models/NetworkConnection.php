<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkConnection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationName Name of the application managing the network connection (for example, Facebook, SMTP, etc.).
    */
    private ?string $applicationName = null;
    
    /**
     * @var string|null $destinationAddress Destination IP address (of the network connection).
    */
    private ?string $destinationAddress = null;
    
    /**
     * @var string|null $destinationDomain Destination domain portion of the destination URL. (for example 'www.contoso.com').
    */
    private ?string $destinationDomain = null;
    
    /**
     * @var string|null $destinationLocation Location (by IP address mapping) associated with the destination of a network connection.
    */
    private ?string $destinationLocation = null;
    
    /**
     * @var string|null $destinationPort Destination port (of the network connection).
    */
    private ?string $destinationPort = null;
    
    /**
     * @var string|null $destinationUrl Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
    */
    private ?string $destinationUrl = null;
    
    /**
     * @var ConnectionDirection|null $direction Network connection direction. Possible values are: unknown, inbound, outbound.
    */
    private ?ConnectionDirection $direction = null;
    
    /**
     * @var DateTime|null $domainRegisteredDateTime Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $domainRegisteredDateTime = null;
    
    /**
     * @var string|null $localDnsName The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
    */
    private ?string $localDnsName = null;
    
    /**
     * @var string|null $natDestinationAddress Network Address Translation destination IP address.
    */
    private ?string $natDestinationAddress = null;
    
    /**
     * @var string|null $natDestinationPort Network Address Translation destination port.
    */
    private ?string $natDestinationPort = null;
    
    /**
     * @var string|null $natSourceAddress Network Address Translation source IP address.
    */
    private ?string $natSourceAddress = null;
    
    /**
     * @var string|null $natSourcePort Network Address Translation source port.
    */
    private ?string $natSourcePort = null;
    
    /**
     * @var SecurityNetworkProtocol|null $protocol Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
    */
    private ?SecurityNetworkProtocol $protocol = null;
    
    /**
     * @var string|null $riskScore Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
    */
    private ?string $riskScore = null;
    
    /**
     * @var string|null $sourceAddress Source (i.e. origin) IP address (of the network connection).
    */
    private ?string $sourceAddress = null;
    
    /**
     * @var string|null $sourceLocation Location (by IP address mapping) associated with the source of a network connection.
    */
    private ?string $sourceLocation = null;
    
    /**
     * @var string|null $sourcePort Source (i.e. origin) IP port (of the network connection).
    */
    private ?string $sourcePort = null;
    
    /**
     * @var ConnectionStatus|null $status Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
    */
    private ?ConnectionStatus $status = null;
    
    /**
     * @var string|null $urlParameters Parameters (suffix) of the destination URL.
    */
    private ?string $urlParameters = null;
    
    /**
     * Instantiates a new networkConnection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationName property value. Name of the application managing the network connection (for example, Facebook, SMTP, etc.).
     * @return string|null
    */
    public function getApplicationName(): ?string {
        return $this->applicationName;
    }

    /**
     * Gets the destinationAddress property value. Destination IP address (of the network connection).
     * @return string|null
    */
    public function getDestinationAddress(): ?string {
        return $this->destinationAddress;
    }

    /**
     * Gets the destinationDomain property value. Destination domain portion of the destination URL. (for example 'www.contoso.com').
     * @return string|null
    */
    public function getDestinationDomain(): ?string {
        return $this->destinationDomain;
    }

    /**
     * Gets the destinationLocation property value. Location (by IP address mapping) associated with the destination of a network connection.
     * @return string|null
    */
    public function getDestinationLocation(): ?string {
        return $this->destinationLocation;
    }

    /**
     * Gets the destinationPort property value. Destination port (of the network connection).
     * @return string|null
    */
    public function getDestinationPort(): ?string {
        return $this->destinationPort;
    }

    /**
     * Gets the destinationUrl property value. Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
     * @return string|null
    */
    public function getDestinationUrl(): ?string {
        return $this->destinationUrl;
    }

    /**
     * Gets the direction property value. Network connection direction. Possible values are: unknown, inbound, outbound.
     * @return ConnectionDirection|null
    */
    public function getDirection(): ?ConnectionDirection {
        return $this->direction;
    }

    /**
     * Gets the domainRegisteredDateTime property value. Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDomainRegisteredDateTime(): ?DateTime {
        return $this->domainRegisteredDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationName' => function (ParseNode $n) use ($o) { $o->setApplicationName($n->getStringValue()); },
            'destinationAddress' => function (ParseNode $n) use ($o) { $o->setDestinationAddress($n->getStringValue()); },
            'destinationDomain' => function (ParseNode $n) use ($o) { $o->setDestinationDomain($n->getStringValue()); },
            'destinationLocation' => function (ParseNode $n) use ($o) { $o->setDestinationLocation($n->getStringValue()); },
            'destinationPort' => function (ParseNode $n) use ($o) { $o->setDestinationPort($n->getStringValue()); },
            'destinationUrl' => function (ParseNode $n) use ($o) { $o->setDestinationUrl($n->getStringValue()); },
            'direction' => function (ParseNode $n) use ($o) { $o->setDirection($n->getEnumValue(ConnectionDirection::class)); },
            'domainRegisteredDateTime' => function (ParseNode $n) use ($o) { $o->setDomainRegisteredDateTime($n->getDateTimeValue()); },
            'localDnsName' => function (ParseNode $n) use ($o) { $o->setLocalDnsName($n->getStringValue()); },
            'natDestinationAddress' => function (ParseNode $n) use ($o) { $o->setNatDestinationAddress($n->getStringValue()); },
            'natDestinationPort' => function (ParseNode $n) use ($o) { $o->setNatDestinationPort($n->getStringValue()); },
            'natSourceAddress' => function (ParseNode $n) use ($o) { $o->setNatSourceAddress($n->getStringValue()); },
            'natSourcePort' => function (ParseNode $n) use ($o) { $o->setNatSourcePort($n->getStringValue()); },
            'protocol' => function (ParseNode $n) use ($o) { $o->setProtocol($n->getEnumValue(SecurityNetworkProtocol::class)); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
            'sourceAddress' => function (ParseNode $n) use ($o) { $o->setSourceAddress($n->getStringValue()); },
            'sourceLocation' => function (ParseNode $n) use ($o) { $o->setSourceLocation($n->getStringValue()); },
            'sourcePort' => function (ParseNode $n) use ($o) { $o->setSourcePort($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ConnectionStatus::class)); },
            'urlParameters' => function (ParseNode $n) use ($o) { $o->setUrlParameters($n->getStringValue()); },
        ];
    }

    /**
     * Gets the localDnsName property value. The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
     * @return string|null
    */
    public function getLocalDnsName(): ?string {
        return $this->localDnsName;
    }

    /**
     * Gets the natDestinationAddress property value. Network Address Translation destination IP address.
     * @return string|null
    */
    public function getNatDestinationAddress(): ?string {
        return $this->natDestinationAddress;
    }

    /**
     * Gets the natDestinationPort property value. Network Address Translation destination port.
     * @return string|null
    */
    public function getNatDestinationPort(): ?string {
        return $this->natDestinationPort;
    }

    /**
     * Gets the natSourceAddress property value. Network Address Translation source IP address.
     * @return string|null
    */
    public function getNatSourceAddress(): ?string {
        return $this->natSourceAddress;
    }

    /**
     * Gets the natSourcePort property value. Network Address Translation source port.
     * @return string|null
    */
    public function getNatSourcePort(): ?string {
        return $this->natSourcePort;
    }

    /**
     * Gets the protocol property value. Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     * @return SecurityNetworkProtocol|null
    */
    public function getProtocol(): ?SecurityNetworkProtocol {
        return $this->protocol;
    }

    /**
     * Gets the riskScore property value. Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the sourceAddress property value. Source (i.e. origin) IP address (of the network connection).
     * @return string|null
    */
    public function getSourceAddress(): ?string {
        return $this->sourceAddress;
    }

    /**
     * Gets the sourceLocation property value. Location (by IP address mapping) associated with the source of a network connection.
     * @return string|null
    */
    public function getSourceLocation(): ?string {
        return $this->sourceLocation;
    }

    /**
     * Gets the sourcePort property value. Source (i.e. origin) IP port (of the network connection).
     * @return string|null
    */
    public function getSourcePort(): ?string {
        return $this->sourcePort;
    }

    /**
     * Gets the status property value. Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     * @return ConnectionStatus|null
    */
    public function getStatus(): ?ConnectionStatus {
        return $this->status;
    }

    /**
     * Gets the urlParameters property value. Parameters (suffix) of the destination URL.
     * @return string|null
    */
    public function getUrlParameters(): ?string {
        return $this->urlParameters;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationName', $this->applicationName);
        $writer->writeStringValue('destinationAddress', $this->destinationAddress);
        $writer->writeStringValue('destinationDomain', $this->destinationDomain);
        $writer->writeStringValue('destinationLocation', $this->destinationLocation);
        $writer->writeStringValue('destinationPort', $this->destinationPort);
        $writer->writeStringValue('destinationUrl', $this->destinationUrl);
        $writer->writeEnumValue('direction', $this->direction);
        $writer->writeDateTimeValue('domainRegisteredDateTime', $this->domainRegisteredDateTime);
        $writer->writeStringValue('localDnsName', $this->localDnsName);
        $writer->writeStringValue('natDestinationAddress', $this->natDestinationAddress);
        $writer->writeStringValue('natDestinationPort', $this->natDestinationPort);
        $writer->writeStringValue('natSourceAddress', $this->natSourceAddress);
        $writer->writeStringValue('natSourcePort', $this->natSourcePort);
        $writer->writeEnumValue('protocol', $this->protocol);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeStringValue('sourceAddress', $this->sourceAddress);
        $writer->writeStringValue('sourceLocation', $this->sourceLocation);
        $writer->writeStringValue('sourcePort', $this->sourcePort);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('urlParameters', $this->urlParameters);
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
     * Sets the applicationName property value. Name of the application managing the network connection (for example, Facebook, SMTP, etc.).
     *  @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value ): void {
        $this->applicationName = $value;
    }

    /**
     * Sets the destinationAddress property value. Destination IP address (of the network connection).
     *  @param string|null $value Value to set for the destinationAddress property.
    */
    public function setDestinationAddress(?string $value ): void {
        $this->destinationAddress = $value;
    }

    /**
     * Sets the destinationDomain property value. Destination domain portion of the destination URL. (for example 'www.contoso.com').
     *  @param string|null $value Value to set for the destinationDomain property.
    */
    public function setDestinationDomain(?string $value ): void {
        $this->destinationDomain = $value;
    }

    /**
     * Sets the destinationLocation property value. Location (by IP address mapping) associated with the destination of a network connection.
     *  @param string|null $value Value to set for the destinationLocation property.
    */
    public function setDestinationLocation(?string $value ): void {
        $this->destinationLocation = $value;
    }

    /**
     * Sets the destinationPort property value. Destination port (of the network connection).
     *  @param string|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?string $value ): void {
        $this->destinationPort = $value;
    }

    /**
     * Sets the destinationUrl property value. Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
     *  @param string|null $value Value to set for the destinationUrl property.
    */
    public function setDestinationUrl(?string $value ): void {
        $this->destinationUrl = $value;
    }

    /**
     * Sets the direction property value. Network connection direction. Possible values are: unknown, inbound, outbound.
     *  @param ConnectionDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?ConnectionDirection $value ): void {
        $this->direction = $value;
    }

    /**
     * Sets the domainRegisteredDateTime property value. Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the domainRegisteredDateTime property.
    */
    public function setDomainRegisteredDateTime(?DateTime $value ): void {
        $this->domainRegisteredDateTime = $value;
    }

    /**
     * Sets the localDnsName property value. The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
     *  @param string|null $value Value to set for the localDnsName property.
    */
    public function setLocalDnsName(?string $value ): void {
        $this->localDnsName = $value;
    }

    /**
     * Sets the natDestinationAddress property value. Network Address Translation destination IP address.
     *  @param string|null $value Value to set for the natDestinationAddress property.
    */
    public function setNatDestinationAddress(?string $value ): void {
        $this->natDestinationAddress = $value;
    }

    /**
     * Sets the natDestinationPort property value. Network Address Translation destination port.
     *  @param string|null $value Value to set for the natDestinationPort property.
    */
    public function setNatDestinationPort(?string $value ): void {
        $this->natDestinationPort = $value;
    }

    /**
     * Sets the natSourceAddress property value. Network Address Translation source IP address.
     *  @param string|null $value Value to set for the natSourceAddress property.
    */
    public function setNatSourceAddress(?string $value ): void {
        $this->natSourceAddress = $value;
    }

    /**
     * Sets the natSourcePort property value. Network Address Translation source port.
     *  @param string|null $value Value to set for the natSourcePort property.
    */
    public function setNatSourcePort(?string $value ): void {
        $this->natSourcePort = $value;
    }

    /**
     * Sets the protocol property value. Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
     *  @param SecurityNetworkProtocol|null $value Value to set for the protocol property.
    */
    public function setProtocol(?SecurityNetworkProtocol $value ): void {
        $this->protocol = $value;
    }

    /**
     * Sets the riskScore property value. Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the sourceAddress property value. Source (i.e. origin) IP address (of the network connection).
     *  @param string|null $value Value to set for the sourceAddress property.
    */
    public function setSourceAddress(?string $value ): void {
        $this->sourceAddress = $value;
    }

    /**
     * Sets the sourceLocation property value. Location (by IP address mapping) associated with the source of a network connection.
     *  @param string|null $value Value to set for the sourceLocation property.
    */
    public function setSourceLocation(?string $value ): void {
        $this->sourceLocation = $value;
    }

    /**
     * Sets the sourcePort property value. Source (i.e. origin) IP port (of the network connection).
     *  @param string|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?string $value ): void {
        $this->sourcePort = $value;
    }

    /**
     * Sets the status property value. Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
     *  @param ConnectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectionStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the urlParameters property value. Parameters (suffix) of the destination URL.
     *  @param string|null $value Value to set for the urlParameters property.
    */
    public function setUrlParameters(?string $value ): void {
        $this->urlParameters = $value;
    }

}
