<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NetworkInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new networkInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bandwidthLowEventRatio property value. Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     * @return float|null
    */
    public function getBandwidthLowEventRatio(): ?float {
        $val = $this->getBackingStore()->get('bandwidthLowEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bandwidthLowEventRatio'");
    }

    /**
     * Gets the basicServiceSetIdentifier property value. The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
     * @return string|null
    */
    public function getBasicServiceSetIdentifier(): ?string {
        $val = $this->getBackingStore()->get('basicServiceSetIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'basicServiceSetIdentifier'");
    }

    /**
     * Gets the connectionType property value. The connectionType property
     * @return NetworkConnectionType|null
    */
    public function getConnectionType(): ?NetworkConnectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof NetworkConnectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the delayEventRatio property value. Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     * @return float|null
    */
    public function getDelayEventRatio(): ?float {
        $val = $this->getBackingStore()->get('delayEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delayEventRatio'");
    }

    /**
     * Gets the dnsSuffix property value. DNS suffix associated with the network adapter of the media endpoint.
     * @return string|null
    */
    public function getDnsSuffix(): ?string {
        $val = $this->getBackingStore()->get('dnsSuffix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsSuffix'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bandwidthLowEventRatio' => fn(ParseNode $n) => $o->setBandwidthLowEventRatio($n->getFloatValue()),
            'basicServiceSetIdentifier' => fn(ParseNode $n) => $o->setBasicServiceSetIdentifier($n->getStringValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(NetworkConnectionType::class)),
            'delayEventRatio' => fn(ParseNode $n) => $o->setDelayEventRatio($n->getFloatValue()),
            'dnsSuffix' => fn(ParseNode $n) => $o->setDnsSuffix($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'linkSpeed' => fn(ParseNode $n) => $o->setLinkSpeed($n->getIntegerValue()),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            'networkTransportProtocol' => fn(ParseNode $n) => $o->setNetworkTransportProtocol($n->getEnumValue(NetworkTransportProtocol::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'receivedQualityEventRatio' => fn(ParseNode $n) => $o->setReceivedQualityEventRatio($n->getFloatValue()),
            'reflexiveIPAddress' => fn(ParseNode $n) => $o->setReflexiveIPAddress($n->getStringValue()),
            'relayIPAddress' => fn(ParseNode $n) => $o->setRelayIPAddress($n->getStringValue()),
            'relayPort' => fn(ParseNode $n) => $o->setRelayPort($n->getIntegerValue()),
            'sentQualityEventRatio' => fn(ParseNode $n) => $o->setSentQualityEventRatio($n->getFloatValue()),
            'subnet' => fn(ParseNode $n) => $o->setSubnet($n->getStringValue()),
            'traceRouteHops' => fn(ParseNode $n) => $o->setTraceRouteHops($n->getCollectionOfObjectValues([TraceRouteHop::class, 'createFromDiscriminatorValue'])),
            'wifiBand' => fn(ParseNode $n) => $o->setWifiBand($n->getEnumValue(WifiBand::class)),
            'wifiBatteryCharge' => fn(ParseNode $n) => $o->setWifiBatteryCharge($n->getIntegerValue()),
            'wifiChannel' => fn(ParseNode $n) => $o->setWifiChannel($n->getIntegerValue()),
            'wifiMicrosoftDriver' => fn(ParseNode $n) => $o->setWifiMicrosoftDriver($n->getStringValue()),
            'wifiMicrosoftDriverVersion' => fn(ParseNode $n) => $o->setWifiMicrosoftDriverVersion($n->getStringValue()),
            'wifiRadioType' => fn(ParseNode $n) => $o->setWifiRadioType($n->getEnumValue(WifiRadioType::class)),
            'wifiSignalStrength' => fn(ParseNode $n) => $o->setWifiSignalStrength($n->getIntegerValue()),
            'wifiVendorDriver' => fn(ParseNode $n) => $o->setWifiVendorDriver($n->getStringValue()),
            'wifiVendorDriverVersion' => fn(ParseNode $n) => $o->setWifiVendorDriverVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. IP address of the media endpoint.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the linkSpeed property value. Link speed in bits per second reported by the network adapter used by the media endpoint.
     * @return int|null
    */
    public function getLinkSpeed(): ?int {
        $val = $this->getBackingStore()->get('linkSpeed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkSpeed'");
    }

    /**
     * Gets the macAddress property value. The media access control (MAC) address of the media endpoint's network device.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        $val = $this->getBackingStore()->get('macAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddress'");
    }

    /**
     * Gets the networkTransportProtocol property value. The networkTransportProtocol property
     * @return NetworkTransportProtocol|null
    */
    public function getNetworkTransportProtocol(): ?NetworkTransportProtocol {
        $val = $this->getBackingStore()->get('networkTransportProtocol');
        if (is_null($val) || $val instanceof NetworkTransportProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkTransportProtocol'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the port property value. Network port number used by media endpoint.
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
    }

    /**
     * Gets the receivedQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     * @return float|null
    */
    public function getReceivedQualityEventRatio(): ?float {
        $val = $this->getBackingStore()->get('receivedQualityEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedQualityEventRatio'");
    }

    /**
     * Gets the reflexiveIPAddress property value. IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
     * @return string|null
    */
    public function getReflexiveIPAddress(): ?string {
        $val = $this->getBackingStore()->get('reflexiveIPAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reflexiveIPAddress'");
    }

    /**
     * Gets the relayIPAddress property value. IP address of the media relay server allocated by the media endpoint.
     * @return string|null
    */
    public function getRelayIPAddress(): ?string {
        $val = $this->getBackingStore()->get('relayIPAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relayIPAddress'");
    }

    /**
     * Gets the relayPort property value. Network port number allocated on the media relay server by the media endpoint.
     * @return int|null
    */
    public function getRelayPort(): ?int {
        $val = $this->getBackingStore()->get('relayPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relayPort'");
    }

    /**
     * Gets the sentQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     * @return float|null
    */
    public function getSentQualityEventRatio(): ?float {
        $val = $this->getBackingStore()->get('sentQualityEventRatio');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentQualityEventRatio'");
    }

    /**
     * Gets the subnet property value. Subnet used for media stream by the media endpoint.
     * @return string|null
    */
    public function getSubnet(): ?string {
        $val = $this->getBackingStore()->get('subnet');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnet'");
    }

    /**
     * Gets the traceRouteHops property value. List of network trace route hops collected for this media stream.*
     * @return array<TraceRouteHop>|null
    */
    public function getTraceRouteHops(): ?array {
        $val = $this->getBackingStore()->get('traceRouteHops');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TraceRouteHop::class);
            /** @var array<TraceRouteHop>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'traceRouteHops'");
    }

    /**
     * Gets the wifiBand property value. The wifiBand property
     * @return WifiBand|null
    */
    public function getWifiBand(): ?WifiBand {
        $val = $this->getBackingStore()->get('wifiBand');
        if (is_null($val) || $val instanceof WifiBand) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBand'");
    }

    /**
     * Gets the wifiBatteryCharge property value. Estimated remaining battery charge in percentage reported by the media endpoint.
     * @return int|null
    */
    public function getWifiBatteryCharge(): ?int {
        $val = $this->getBackingStore()->get('wifiBatteryCharge');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBatteryCharge'");
    }

    /**
     * Gets the wifiChannel property value. WiFi channel used by the media endpoint.
     * @return int|null
    */
    public function getWifiChannel(): ?int {
        $val = $this->getBackingStore()->get('wifiChannel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiChannel'");
    }

    /**
     * Gets the wifiMicrosoftDriver property value. Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @return string|null
    */
    public function getWifiMicrosoftDriver(): ?string {
        $val = $this->getBackingStore()->get('wifiMicrosoftDriver');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiMicrosoftDriver'");
    }

    /**
     * Gets the wifiMicrosoftDriverVersion property value. Version of the Microsoft WiFi driver used by the media endpoint.
     * @return string|null
    */
    public function getWifiMicrosoftDriverVersion(): ?string {
        $val = $this->getBackingStore()->get('wifiMicrosoftDriverVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiMicrosoftDriverVersion'");
    }

    /**
     * Gets the wifiRadioType property value. The wifiRadioType property
     * @return WifiRadioType|null
    */
    public function getWifiRadioType(): ?WifiRadioType {
        $val = $this->getBackingStore()->get('wifiRadioType');
        if (is_null($val) || $val instanceof WifiRadioType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiRadioType'");
    }

    /**
     * Gets the wifiSignalStrength property value. WiFi signal strength in percentage reported by the media endpoint.
     * @return int|null
    */
    public function getWifiSignalStrength(): ?int {
        $val = $this->getBackingStore()->get('wifiSignalStrength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiSignalStrength'");
    }

    /**
     * Gets the wifiVendorDriver property value. Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @return string|null
    */
    public function getWifiVendorDriver(): ?string {
        $val = $this->getBackingStore()->get('wifiVendorDriver');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiVendorDriver'");
    }

    /**
     * Gets the wifiVendorDriverVersion property value. Version of the WiFi driver used by the media endpoint.
     * @return string|null
    */
    public function getWifiVendorDriverVersion(): ?string {
        $val = $this->getBackingStore()->get('wifiVendorDriverVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiVendorDriverVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('bandwidthLowEventRatio', $this->getBandwidthLowEventRatio());
        $writer->writeStringValue('basicServiceSetIdentifier', $this->getBasicServiceSetIdentifier());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeFloatValue('delayEventRatio', $this->getDelayEventRatio());
        $writer->writeStringValue('dnsSuffix', $this->getDnsSuffix());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeIntegerValue('linkSpeed', $this->getLinkSpeed());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeEnumValue('networkTransportProtocol', $this->getNetworkTransportProtocol());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeFloatValue('receivedQualityEventRatio', $this->getReceivedQualityEventRatio());
        $writer->writeStringValue('reflexiveIPAddress', $this->getReflexiveIPAddress());
        $writer->writeStringValue('relayIPAddress', $this->getRelayIPAddress());
        $writer->writeIntegerValue('relayPort', $this->getRelayPort());
        $writer->writeFloatValue('sentQualityEventRatio', $this->getSentQualityEventRatio());
        $writer->writeStringValue('subnet', $this->getSubnet());
        $writer->writeCollectionOfObjectValues('traceRouteHops', $this->getTraceRouteHops());
        $writer->writeEnumValue('wifiBand', $this->getWifiBand());
        $writer->writeIntegerValue('wifiBatteryCharge', $this->getWifiBatteryCharge());
        $writer->writeIntegerValue('wifiChannel', $this->getWifiChannel());
        $writer->writeStringValue('wifiMicrosoftDriver', $this->getWifiMicrosoftDriver());
        $writer->writeStringValue('wifiMicrosoftDriverVersion', $this->getWifiMicrosoftDriverVersion());
        $writer->writeEnumValue('wifiRadioType', $this->getWifiRadioType());
        $writer->writeIntegerValue('wifiSignalStrength', $this->getWifiSignalStrength());
        $writer->writeStringValue('wifiVendorDriver', $this->getWifiVendorDriver());
        $writer->writeStringValue('wifiVendorDriverVersion', $this->getWifiVendorDriverVersion());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bandwidthLowEventRatio property value. Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     * @param float|null $value Value to set for the bandwidthLowEventRatio property.
    */
    public function setBandwidthLowEventRatio(?float $value): void {
        $this->getBackingStore()->set('bandwidthLowEventRatio', $value);
    }

    /**
     * Sets the basicServiceSetIdentifier property value. The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
     * @param string|null $value Value to set for the basicServiceSetIdentifier property.
    */
    public function setBasicServiceSetIdentifier(?string $value): void {
        $this->getBackingStore()->set('basicServiceSetIdentifier', $value);
    }

    /**
     * Sets the connectionType property value. The connectionType property
     * @param NetworkConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?NetworkConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the delayEventRatio property value. Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     * @param float|null $value Value to set for the delayEventRatio property.
    */
    public function setDelayEventRatio(?float $value): void {
        $this->getBackingStore()->set('delayEventRatio', $value);
    }

    /**
     * Sets the dnsSuffix property value. DNS suffix associated with the network adapter of the media endpoint.
     * @param string|null $value Value to set for the dnsSuffix property.
    */
    public function setDnsSuffix(?string $value): void {
        $this->getBackingStore()->set('dnsSuffix', $value);
    }

    /**
     * Sets the ipAddress property value. IP address of the media endpoint.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the linkSpeed property value. Link speed in bits per second reported by the network adapter used by the media endpoint.
     * @param int|null $value Value to set for the linkSpeed property.
    */
    public function setLinkSpeed(?int $value): void {
        $this->getBackingStore()->set('linkSpeed', $value);
    }

    /**
     * Sets the macAddress property value. The media access control (MAC) address of the media endpoint's network device.
     * @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the networkTransportProtocol property value. The networkTransportProtocol property
     * @param NetworkTransportProtocol|null $value Value to set for the networkTransportProtocol property.
    */
    public function setNetworkTransportProtocol(?NetworkTransportProtocol $value): void {
        $this->getBackingStore()->set('networkTransportProtocol', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the port property value. Network port number used by media endpoint.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the receivedQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     * @param float|null $value Value to set for the receivedQualityEventRatio property.
    */
    public function setReceivedQualityEventRatio(?float $value): void {
        $this->getBackingStore()->set('receivedQualityEventRatio', $value);
    }

    /**
     * Sets the reflexiveIPAddress property value. IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
     * @param string|null $value Value to set for the reflexiveIPAddress property.
    */
    public function setReflexiveIPAddress(?string $value): void {
        $this->getBackingStore()->set('reflexiveIPAddress', $value);
    }

    /**
     * Sets the relayIPAddress property value. IP address of the media relay server allocated by the media endpoint.
     * @param string|null $value Value to set for the relayIPAddress property.
    */
    public function setRelayIPAddress(?string $value): void {
        $this->getBackingStore()->set('relayIPAddress', $value);
    }

    /**
     * Sets the relayPort property value. Network port number allocated on the media relay server by the media endpoint.
     * @param int|null $value Value to set for the relayPort property.
    */
    public function setRelayPort(?int $value): void {
        $this->getBackingStore()->set('relayPort', $value);
    }

    /**
     * Sets the sentQualityEventRatio property value. Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     * @param float|null $value Value to set for the sentQualityEventRatio property.
    */
    public function setSentQualityEventRatio(?float $value): void {
        $this->getBackingStore()->set('sentQualityEventRatio', $value);
    }

    /**
     * Sets the subnet property value. Subnet used for media stream by the media endpoint.
     * @param string|null $value Value to set for the subnet property.
    */
    public function setSubnet(?string $value): void {
        $this->getBackingStore()->set('subnet', $value);
    }

    /**
     * Sets the traceRouteHops property value. List of network trace route hops collected for this media stream.*
     * @param array<TraceRouteHop>|null $value Value to set for the traceRouteHops property.
    */
    public function setTraceRouteHops(?array $value): void {
        $this->getBackingStore()->set('traceRouteHops', $value);
    }

    /**
     * Sets the wifiBand property value. The wifiBand property
     * @param WifiBand|null $value Value to set for the wifiBand property.
    */
    public function setWifiBand(?WifiBand $value): void {
        $this->getBackingStore()->set('wifiBand', $value);
    }

    /**
     * Sets the wifiBatteryCharge property value. Estimated remaining battery charge in percentage reported by the media endpoint.
     * @param int|null $value Value to set for the wifiBatteryCharge property.
    */
    public function setWifiBatteryCharge(?int $value): void {
        $this->getBackingStore()->set('wifiBatteryCharge', $value);
    }

    /**
     * Sets the wifiChannel property value. WiFi channel used by the media endpoint.
     * @param int|null $value Value to set for the wifiChannel property.
    */
    public function setWifiChannel(?int $value): void {
        $this->getBackingStore()->set('wifiChannel', $value);
    }

    /**
     * Sets the wifiMicrosoftDriver property value. Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @param string|null $value Value to set for the wifiMicrosoftDriver property.
    */
    public function setWifiMicrosoftDriver(?string $value): void {
        $this->getBackingStore()->set('wifiMicrosoftDriver', $value);
    }

    /**
     * Sets the wifiMicrosoftDriverVersion property value. Version of the Microsoft WiFi driver used by the media endpoint.
     * @param string|null $value Value to set for the wifiMicrosoftDriverVersion property.
    */
    public function setWifiMicrosoftDriverVersion(?string $value): void {
        $this->getBackingStore()->set('wifiMicrosoftDriverVersion', $value);
    }

    /**
     * Sets the wifiRadioType property value. The wifiRadioType property
     * @param WifiRadioType|null $value Value to set for the wifiRadioType property.
    */
    public function setWifiRadioType(?WifiRadioType $value): void {
        $this->getBackingStore()->set('wifiRadioType', $value);
    }

    /**
     * Sets the wifiSignalStrength property value. WiFi signal strength in percentage reported by the media endpoint.
     * @param int|null $value Value to set for the wifiSignalStrength property.
    */
    public function setWifiSignalStrength(?int $value): void {
        $this->getBackingStore()->set('wifiSignalStrength', $value);
    }

    /**
     * Sets the wifiVendorDriver property value. Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     * @param string|null $value Value to set for the wifiVendorDriver property.
    */
    public function setWifiVendorDriver(?string $value): void {
        $this->getBackingStore()->set('wifiVendorDriver', $value);
    }

    /**
     * Sets the wifiVendorDriverVersion property value. Version of the WiFi driver used by the media endpoint.
     * @param string|null $value Value to set for the wifiVendorDriverVersion property.
    */
    public function setWifiVendorDriverVersion(?string $value): void {
        $this->getBackingStore()->set('wifiVendorDriverVersion', $value);
    }

}
