<?php

namespace Microsoft\Graph\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NetworkInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $bandwidthLowEventRatio Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
    */
    private ?float $bandwidthLowEventRatio = null;
    
    /**
     * @var string|null $basicServiceSetIdentifier The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
    */
    private ?string $basicServiceSetIdentifier = null;
    
    /**
     * @var NetworkConnectionType|null $connectionType Type of network used by the media endpoint. Possible values are: unknown, wired, wifi, mobile, tunnel, unknownFutureValue.
    */
    private ?NetworkConnectionType $connectionType = null;
    
    /**
     * @var float|null $delayEventRatio Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
    */
    private ?float $delayEventRatio = null;
    
    /**
     * @var string|null $dnsSuffix DNS suffix associated with the network adapter of the media endpoint.
    */
    private ?string $dnsSuffix = null;
    
    /**
     * @var string|null $ipAddress IP address of the media endpoint.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var int|null $linkSpeed Link speed in bits per second reported by the network adapter used by the media endpoint.
    */
    private ?int $linkSpeed = null;
    
    /**
     * @var string|null $macAddress The media access control (MAC) address of the media endpoint's network device.
    */
    private ?string $macAddress = null;
    
    /**
     * @var NetworkTransportProtocol|null $networkTransportProtocol Network protocol used for the transmission of stream. Possible values are: unknown, udp, tcp, unknownFutureValue.
    */
    private ?NetworkTransportProtocol $networkTransportProtocol = null;
    
    /**
     * @var int|null $port Network port number used by media endpoint.
    */
    private ?int $port = null;
    
    /**
     * @var float|null $receivedQualityEventRatio Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
    */
    private ?float $receivedQualityEventRatio = null;
    
    /**
     * @var string|null $reflexiveIPAddress IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
    */
    private ?string $reflexiveIPAddress = null;
    
    /**
     * @var string|null $relayIPAddress IP address of the media relay server allocated by the media endpoint.
    */
    private ?string $relayIPAddress = null;
    
    /**
     * @var int|null $relayPort Network port number allocated on the media relay server by the media endpoint.
    */
    private ?int $relayPort = null;
    
    /**
     * @var float|null $sentQualityEventRatio Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
    */
    private ?float $sentQualityEventRatio = null;
    
    /**
     * @var string|null $subnet Subnet used for media stream by the media endpoint.
    */
    private ?string $subnet = null;
    
    /**
     * @var array<TraceRouteHop>|null $traceRouteHops List of network trace route hops collected for this media stream.
    */
    private ?array $traceRouteHops = null;
    
    /**
     * @var WifiBand|null $wifiBand WiFi band used by the media endpoint. Possible values are: unknown, frequency24GHz, frequency50GHz, frequency60GHz, unknownFutureValue.
    */
    private ?WifiBand $wifiBand = null;
    
    /**
     * @var int|null $wifiBatteryCharge Estimated remaining battery charge in percentage reported by the media endpoint.
    */
    private ?int $wifiBatteryCharge = null;
    
    /**
     * @var int|null $wifiChannel WiFi channel used by the media endpoint.
    */
    private ?int $wifiChannel = null;
    
    /**
     * @var string|null $wifiMicrosoftDriver Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    */
    private ?string $wifiMicrosoftDriver = null;
    
    /**
     * @var string|null $wifiMicrosoftDriverVersion Version of the Microsoft WiFi driver used by the media endpoint.
    */
    private ?string $wifiMicrosoftDriverVersion = null;
    
    /**
     * @var WifiRadioType|null $wifiRadioType Type of WiFi radio used by the media endpoint. Possible values are: unknown, wifi80211a, wifi80211b, wifi80211g, wifi80211n, wifi80211ac, wifi80211ax, unknownFutureValue.
    */
    private ?WifiRadioType $wifiRadioType = null;
    
    /**
     * @var int|null $wifiSignalStrength WiFi signal strength in percentage reported by the media endpoint.
    */
    private ?int $wifiSignalStrength = null;
    
    /**
     * @var string|null $wifiVendorDriver Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    */
    private ?string $wifiVendorDriver = null;
    
    /**
     * @var string|null $wifiVendorDriverVersion Version of the WiFi driver used by the media endpoint.
    */
    private ?string $wifiVendorDriverVersion = null;
    
    /**
     * Instantiates a new networkInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkInfo {
        return new NetworkInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bandwidthLowEventRatio property value. Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     * @return float|null
    */
    public function getBandwidthLowEventRatio(): ?float {
        return $this->bandwidthLowEventRatio;
    }

    /**
     * Gets the basicServiceSetIdentifier property value. The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
     * @return string|null
    */
    public function getBasicServiceSetIdentifier(): ?string {
        return $this->basicServiceSetIdentifier;
    }

    /**
     * Gets the connectionType property value. Type of network used by the media endpoint. Possible values are: unknown, wired, wifi, mobile, tunnel, unknownFutureValue.
     * @return NetworkConnectionType|null
    */
    public function getConnectionType(): ?NetworkConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the delayEventRatio property value. Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     * @return float|null
    */
    public function getDelayEventRatio(): ?float {
        return $this->delayEventRatio;
    }

    /**
     * Gets the dnsSuffix property value. DNS suffix associated with the network adapter of the media endpoint.
     * @return string|null
    */
    public function getDnsSuffix(): ?string {
        return $this->dnsSuffix;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bandwidthLowEventRatio' => function (ParseNode $n) use ($o) { $o->setBandwidthLowEventRatio($n->getFloatValue()); },
            'basicServiceSetIdentifier' => function (ParseNode $n) use ($o) { $o->setBasicServiceSetIdentifier($n->getStringValue()); },
            'connectionType' => function (ParseNode $n) use ($o) { $o->setConnectionType($n->getEnumValue(NetworkConnectionType::class)); },
            'delayEventRatio' => function (ParseNode $n) use ($o) { $o->setDelayEventRatio($n->getFloatValue()); },
            'dnsSuffix' => function (ParseNode $n) use ($o) { $o->setDnsSuffix($n->getStringValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            'linkSpeed' => function (ParseNode $n) use ($o) { $o->setLinkSpeed($n->getIntegerValue()); },
            'macAddress' => function (ParseNode $n) use ($o) { $o->setMacAddress($n->getStringValue()); },
            'networkTransportProtocol' => function (ParseNode $n) use ($o) { $o->setNetworkTransportProtocol($n->getEnumValue(NetworkTransportProtocol::class)); },
            'port' => function (ParseNode $n) use ($o) { $o->setPort($n->getIntegerValue()); },
            'receivedQualityEventRatio' => function (ParseNode $n) use ($o) { $o->setReceivedQualityEventRatio($n->getFloatValue()); },
            'reflexiveIPAddress' => function (ParseNode $n) use ($o) { $o->setReflexiveIPAddress($n->getStringValue()); },
            'relayIPAddress' => function (ParseNode $n) use ($o) { $o->setRelayIPAddress($n->getStringValue()); },
            'relayPort' => function (ParseNode $n) use ($o) { $o->setRelayPort($n->getIntegerValue()); },
            'sentQualityEventRatio' => function (ParseNode $n) use ($o) { $o->setSentQualityEventRatio($n->getFloatValue()); },
            'subnet' => function (ParseNode $n) use ($o) { $o->setSubnet($n->getStringValue()); },
            'traceRouteHops' => function (ParseNode $n) use ($o) { $o->setTraceRouteHops($n->getCollectionOfObjectValues(array(TraceRouteHop::class, 'createFromDiscriminatorValue'))); },
            'wifiBand' => function (ParseNode $n) use ($o) { $o->setWifiBand($n->getEnumValue(WifiBand::class)); },
            'wifiBatteryCharge' => function (ParseNode $n) use ($o) { $o->setWifiBatteryCharge($n->getIntegerValue()); },
            'wifiChannel' => function (ParseNode $n) use ($o) { $o->setWifiChannel($n->getIntegerValue()); },
            'wifiMicrosoftDriver' => function (ParseNode $n) use ($o) { $o->setWifiMicrosoftDriver($n->getStringValue()); },
            'wifiMicrosoftDriverVersion' => function (ParseNode $n) use ($o) { $o->setWifiMicrosoftDriverVersion($n->getStringValue()); },
            'wifiRadioType' => function (ParseNode $n) use ($o) { $o->setWifiRadioType($n->getEnumValue(WifiRadioType::class)); },
            'wifiSignalStrength' => function (ParseNode $n) use ($o) { $o->setWifiSignalStrength($n->getIntegerValue()); },
            'wifiVendorDriver' => function (ParseNode $n) use ($o) { $o->setWifiVendorDriver($n->getStringValue()); },
            'wifiVendorDriverVersion' => function (ParseNode $n) use ($o) { $o->setWifiVendorDriverVersion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ipAddress property value. IP address of the media endpoint.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the linkSpeed property value. Link speed in bits per second reported by the network adapter used by the media endpoint.
     * @return int|null
    */
    public function getLinkSpeed(): ?int {
        return $this->linkSpeed;
    }

    /**
     * Gets the macAddress property value. The media access control (MAC) address of the media endpoint's network device.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        return $this->macAddress;
    }

    /**
     * Gets the networkTransportProtocol property value. Network protocol used for the transmission of stream. Possible values are: unknown, udp, tcp, unknownFutureValue.
     * @return NetworkTransportProtocol|null
    */
    public function getNetworkTransportProtocol(): ?NetworkTransportProtocol {
        return $this->networkTransportProtocol;
    }

    /**
     * Gets the port property value. Network port number used by media endpoint.
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Gets the receivedQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     * @return float|null
    */
    public function getReceivedQualityEventRatio(): ?float {
        return $this->receivedQualityEventRatio;
    }

    /**
     * Gets the reflexiveIPAddress property value. IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
     * @return string|null
    */
    public function getReflexiveIPAddress(): ?string {
        return $this->reflexiveIPAddress;
    }

    /**
     * Gets the relayIPAddress property value. IP address of the media relay server allocated by the media endpoint.
     * @return string|null
    */
    public function getRelayIPAddress(): ?string {
        return $this->relayIPAddress;
    }

    /**
     * Gets the relayPort property value. Network port number allocated on the media relay server by the media endpoint.
     * @return int|null
    */
    public function getRelayPort(): ?int {
        return $this->relayPort;
    }

    /**
     * Gets the sentQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     * @return float|null
    */
    public function getSentQualityEventRatio(): ?float {
        return $this->sentQualityEventRatio;
    }

    /**
     * Gets the subnet property value. Subnet used for media stream by the media endpoint.
     * @return string|null
    */
    public function getSubnet(): ?string {
        return $this->subnet;
    }

    /**
     * Gets the traceRouteHops property value. List of network trace route hops collected for this media stream.
     * @return array<TraceRouteHop>|null
    */
    public function getTraceRouteHops(): ?array {
        return $this->traceRouteHops;
    }

    /**
     * Gets the wifiBand property value. WiFi band used by the media endpoint. Possible values are: unknown, frequency24GHz, frequency50GHz, frequency60GHz, unknownFutureValue.
     * @return WifiBand|null
    */
    public function getWifiBand(): ?WifiBand {
        return $this->wifiBand;
    }

    /**
     * Gets the wifiBatteryCharge property value. Estimated remaining battery charge in percentage reported by the media endpoint.
     * @return int|null
    */
    public function getWifiBatteryCharge(): ?int {
        return $this->wifiBatteryCharge;
    }

    /**
     * Gets the wifiChannel property value. WiFi channel used by the media endpoint.
     * @return int|null
    */
    public function getWifiChannel(): ?int {
        return $this->wifiChannel;
    }

    /**
     * Gets the wifiMicrosoftDriver property value. Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @return string|null
    */
    public function getWifiMicrosoftDriver(): ?string {
        return $this->wifiMicrosoftDriver;
    }

    /**
     * Gets the wifiMicrosoftDriverVersion property value. Version of the Microsoft WiFi driver used by the media endpoint.
     * @return string|null
    */
    public function getWifiMicrosoftDriverVersion(): ?string {
        return $this->wifiMicrosoftDriverVersion;
    }

    /**
     * Gets the wifiRadioType property value. Type of WiFi radio used by the media endpoint. Possible values are: unknown, wifi80211a, wifi80211b, wifi80211g, wifi80211n, wifi80211ac, wifi80211ax, unknownFutureValue.
     * @return WifiRadioType|null
    */
    public function getWifiRadioType(): ?WifiRadioType {
        return $this->wifiRadioType;
    }

    /**
     * Gets the wifiSignalStrength property value. WiFi signal strength in percentage reported by the media endpoint.
     * @return int|null
    */
    public function getWifiSignalStrength(): ?int {
        return $this->wifiSignalStrength;
    }

    /**
     * Gets the wifiVendorDriver property value. Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @return string|null
    */
    public function getWifiVendorDriver(): ?string {
        return $this->wifiVendorDriver;
    }

    /**
     * Gets the wifiVendorDriverVersion property value. Version of the WiFi driver used by the media endpoint.
     * @return string|null
    */
    public function getWifiVendorDriverVersion(): ?string {
        return $this->wifiVendorDriverVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('bandwidthLowEventRatio', $this->bandwidthLowEventRatio);
        $writer->writeStringValue('basicServiceSetIdentifier', $this->basicServiceSetIdentifier);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeFloatValue('delayEventRatio', $this->delayEventRatio);
        $writer->writeStringValue('dnsSuffix', $this->dnsSuffix);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeIntegerValue('linkSpeed', $this->linkSpeed);
        $writer->writeStringValue('macAddress', $this->macAddress);
        $writer->writeEnumValue('networkTransportProtocol', $this->networkTransportProtocol);
        $writer->writeIntegerValue('port', $this->port);
        $writer->writeFloatValue('receivedQualityEventRatio', $this->receivedQualityEventRatio);
        $writer->writeStringValue('reflexiveIPAddress', $this->reflexiveIPAddress);
        $writer->writeStringValue('relayIPAddress', $this->relayIPAddress);
        $writer->writeIntegerValue('relayPort', $this->relayPort);
        $writer->writeFloatValue('sentQualityEventRatio', $this->sentQualityEventRatio);
        $writer->writeStringValue('subnet', $this->subnet);
        $writer->writeCollectionOfObjectValues('traceRouteHops', $this->traceRouteHops);
        $writer->writeEnumValue('wifiBand', $this->wifiBand);
        $writer->writeIntegerValue('wifiBatteryCharge', $this->wifiBatteryCharge);
        $writer->writeIntegerValue('wifiChannel', $this->wifiChannel);
        $writer->writeStringValue('wifiMicrosoftDriver', $this->wifiMicrosoftDriver);
        $writer->writeStringValue('wifiMicrosoftDriverVersion', $this->wifiMicrosoftDriverVersion);
        $writer->writeEnumValue('wifiRadioType', $this->wifiRadioType);
        $writer->writeIntegerValue('wifiSignalStrength', $this->wifiSignalStrength);
        $writer->writeStringValue('wifiVendorDriver', $this->wifiVendorDriver);
        $writer->writeStringValue('wifiVendorDriverVersion', $this->wifiVendorDriverVersion);
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
     * Sets the bandwidthLowEventRatio property value. Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     *  @param float|null $value Value to set for the bandwidthLowEventRatio property.
    */
    public function setBandwidthLowEventRatio(?float $value ): void {
        $this->bandwidthLowEventRatio = $value;
    }

    /**
     * Sets the basicServiceSetIdentifier property value. The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
     *  @param string|null $value Value to set for the basicServiceSetIdentifier property.
    */
    public function setBasicServiceSetIdentifier(?string $value ): void {
        $this->basicServiceSetIdentifier = $value;
    }

    /**
     * Sets the connectionType property value. Type of network used by the media endpoint. Possible values are: unknown, wired, wifi, mobile, tunnel, unknownFutureValue.
     *  @param NetworkConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?NetworkConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the delayEventRatio property value. Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     *  @param float|null $value Value to set for the delayEventRatio property.
    */
    public function setDelayEventRatio(?float $value ): void {
        $this->delayEventRatio = $value;
    }

    /**
     * Sets the dnsSuffix property value. DNS suffix associated with the network adapter of the media endpoint.
     *  @param string|null $value Value to set for the dnsSuffix property.
    */
    public function setDnsSuffix(?string $value ): void {
        $this->dnsSuffix = $value;
    }

    /**
     * Sets the ipAddress property value. IP address of the media endpoint.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the linkSpeed property value. Link speed in bits per second reported by the network adapter used by the media endpoint.
     *  @param int|null $value Value to set for the linkSpeed property.
    */
    public function setLinkSpeed(?int $value ): void {
        $this->linkSpeed = $value;
    }

    /**
     * Sets the macAddress property value. The media access control (MAC) address of the media endpoint's network device.
     *  @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value ): void {
        $this->macAddress = $value;
    }

    /**
     * Sets the networkTransportProtocol property value. Network protocol used for the transmission of stream. Possible values are: unknown, udp, tcp, unknownFutureValue.
     *  @param NetworkTransportProtocol|null $value Value to set for the networkTransportProtocol property.
    */
    public function setNetworkTransportProtocol(?NetworkTransportProtocol $value ): void {
        $this->networkTransportProtocol = $value;
    }

    /**
     * Sets the port property value. Network port number used by media endpoint.
     *  @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value ): void {
        $this->port = $value;
    }

    /**
     * Sets the receivedQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     *  @param float|null $value Value to set for the receivedQualityEventRatio property.
    */
    public function setReceivedQualityEventRatio(?float $value ): void {
        $this->receivedQualityEventRatio = $value;
    }

    /**
     * Sets the reflexiveIPAddress property value. IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
     *  @param string|null $value Value to set for the reflexiveIPAddress property.
    */
    public function setReflexiveIPAddress(?string $value ): void {
        $this->reflexiveIPAddress = $value;
    }

    /**
     * Sets the relayIPAddress property value. IP address of the media relay server allocated by the media endpoint.
     *  @param string|null $value Value to set for the relayIPAddress property.
    */
    public function setRelayIPAddress(?string $value ): void {
        $this->relayIPAddress = $value;
    }

    /**
     * Sets the relayPort property value. Network port number allocated on the media relay server by the media endpoint.
     *  @param int|null $value Value to set for the relayPort property.
    */
    public function setRelayPort(?int $value ): void {
        $this->relayPort = $value;
    }

    /**
     * Sets the sentQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     *  @param float|null $value Value to set for the sentQualityEventRatio property.
    */
    public function setSentQualityEventRatio(?float $value ): void {
        $this->sentQualityEventRatio = $value;
    }

    /**
     * Sets the subnet property value. Subnet used for media stream by the media endpoint.
     *  @param string|null $value Value to set for the subnet property.
    */
    public function setSubnet(?string $value ): void {
        $this->subnet = $value;
    }

    /**
     * Sets the traceRouteHops property value. List of network trace route hops collected for this media stream.
     *  @param array<TraceRouteHop>|null $value Value to set for the traceRouteHops property.
    */
    public function setTraceRouteHops(?array $value ): void {
        $this->traceRouteHops = $value;
    }

    /**
     * Sets the wifiBand property value. WiFi band used by the media endpoint. Possible values are: unknown, frequency24GHz, frequency50GHz, frequency60GHz, unknownFutureValue.
     *  @param WifiBand|null $value Value to set for the wifiBand property.
    */
    public function setWifiBand(?WifiBand $value ): void {
        $this->wifiBand = $value;
    }

    /**
     * Sets the wifiBatteryCharge property value. Estimated remaining battery charge in percentage reported by the media endpoint.
     *  @param int|null $value Value to set for the wifiBatteryCharge property.
    */
    public function setWifiBatteryCharge(?int $value ): void {
        $this->wifiBatteryCharge = $value;
    }

    /**
     * Sets the wifiChannel property value. WiFi channel used by the media endpoint.
     *  @param int|null $value Value to set for the wifiChannel property.
    */
    public function setWifiChannel(?int $value ): void {
        $this->wifiChannel = $value;
    }

    /**
     * Sets the wifiMicrosoftDriver property value. Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     *  @param string|null $value Value to set for the wifiMicrosoftDriver property.
    */
    public function setWifiMicrosoftDriver(?string $value ): void {
        $this->wifiMicrosoftDriver = $value;
    }

    /**
     * Sets the wifiMicrosoftDriverVersion property value. Version of the Microsoft WiFi driver used by the media endpoint.
     *  @param string|null $value Value to set for the wifiMicrosoftDriverVersion property.
    */
    public function setWifiMicrosoftDriverVersion(?string $value ): void {
        $this->wifiMicrosoftDriverVersion = $value;
    }

    /**
     * Sets the wifiRadioType property value. Type of WiFi radio used by the media endpoint. Possible values are: unknown, wifi80211a, wifi80211b, wifi80211g, wifi80211n, wifi80211ac, wifi80211ax, unknownFutureValue.
     *  @param WifiRadioType|null $value Value to set for the wifiRadioType property.
    */
    public function setWifiRadioType(?WifiRadioType $value ): void {
        $this->wifiRadioType = $value;
    }

    /**
     * Sets the wifiSignalStrength property value. WiFi signal strength in percentage reported by the media endpoint.
     *  @param int|null $value Value to set for the wifiSignalStrength property.
    */
    public function setWifiSignalStrength(?int $value ): void {
        $this->wifiSignalStrength = $value;
    }

    /**
     * Sets the wifiVendorDriver property value. Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     *  @param string|null $value Value to set for the wifiVendorDriver property.
    */
    public function setWifiVendorDriver(?string $value ): void {
        $this->wifiVendorDriver = $value;
    }

    /**
     * Sets the wifiVendorDriverVersion property value. Version of the WiFi driver used by the media endpoint.
     *  @param string|null $value Value to set for the wifiVendorDriverVersion property.
    */
    public function setWifiVendorDriverVersion(?string $value ): void {
        $this->wifiVendorDriverVersion = $value;
    }

}
