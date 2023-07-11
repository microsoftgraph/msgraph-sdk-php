<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity which represents a connection to an Exchange environment.
*/
class DeviceManagementExchangeConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementExchangeConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeConnector {
        return new DeviceManagementExchangeConnector();
    }

    /**
     * Gets the connectorServerName property value. The name of the server hosting the Exchange Connector.
     * @return string|null
    */
    public function getConnectorServerName(): ?string {
        $val = $this->getBackingStore()->get('connectorServerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorServerName'");
    }

    /**
     * Gets the exchangeAlias property value. An alias assigned to the Exchange server
     * @return string|null
    */
    public function getExchangeAlias(): ?string {
        $val = $this->getBackingStore()->get('exchangeAlias');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeAlias'");
    }

    /**
     * Gets the exchangeConnectorType property value. The type of Exchange Connector.
     * @return DeviceManagementExchangeConnectorType|null
    */
    public function getExchangeConnectorType(): ?DeviceManagementExchangeConnectorType {
        $val = $this->getBackingStore()->get('exchangeConnectorType');
        if (is_null($val) || $val instanceof DeviceManagementExchangeConnectorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeConnectorType'");
    }

    /**
     * Gets the exchangeOrganization property value. Exchange Organization to the Exchange server
     * @return string|null
    */
    public function getExchangeOrganization(): ?string {
        $val = $this->getBackingStore()->get('exchangeOrganization');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeOrganization'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectorServerName' => fn(ParseNode $n) => $o->setConnectorServerName($n->getStringValue()),
            'exchangeAlias' => fn(ParseNode $n) => $o->setExchangeAlias($n->getStringValue()),
            'exchangeConnectorType' => fn(ParseNode $n) => $o->setExchangeConnectorType($n->getEnumValue(DeviceManagementExchangeConnectorType::class)),
            'exchangeOrganization' => fn(ParseNode $n) => $o->setExchangeOrganization($n->getStringValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'primarySmtpAddress' => fn(ParseNode $n) => $o->setPrimarySmtpAddress($n->getStringValue()),
            'serverName' => fn(ParseNode $n) => $o->setServerName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceManagementExchangeConnectorStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync time for the Exchange Connector
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the primarySmtpAddress property value. Email address used to configure the Service To Service Exchange Connector.
     * @return string|null
    */
    public function getPrimarySmtpAddress(): ?string {
        $val = $this->getBackingStore()->get('primarySmtpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primarySmtpAddress'");
    }

    /**
     * Gets the serverName property value. The name of the Exchange server.
     * @return string|null
    */
    public function getServerName(): ?string {
        $val = $this->getBackingStore()->get('serverName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serverName'");
    }

    /**
     * Gets the status property value. The current status of the Exchange Connector.
     * @return DeviceManagementExchangeConnectorStatus|null
    */
    public function getStatus(): ?DeviceManagementExchangeConnectorStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DeviceManagementExchangeConnectorStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the version property value. The version of the ExchangeConnectorAgent
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorServerName', $this->getConnectorServerName());
        $writer->writeStringValue('exchangeAlias', $this->getExchangeAlias());
        $writer->writeEnumValue('exchangeConnectorType', $this->getExchangeConnectorType());
        $writer->writeStringValue('exchangeOrganization', $this->getExchangeOrganization());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('primarySmtpAddress', $this->getPrimarySmtpAddress());
        $writer->writeStringValue('serverName', $this->getServerName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the connectorServerName property value. The name of the server hosting the Exchange Connector.
     * @param string|null $value Value to set for the connectorServerName property.
    */
    public function setConnectorServerName(?string $value): void {
        $this->getBackingStore()->set('connectorServerName', $value);
    }

    /**
     * Sets the exchangeAlias property value. An alias assigned to the Exchange server
     * @param string|null $value Value to set for the exchangeAlias property.
    */
    public function setExchangeAlias(?string $value): void {
        $this->getBackingStore()->set('exchangeAlias', $value);
    }

    /**
     * Sets the exchangeConnectorType property value. The type of Exchange Connector.
     * @param DeviceManagementExchangeConnectorType|null $value Value to set for the exchangeConnectorType property.
    */
    public function setExchangeConnectorType(?DeviceManagementExchangeConnectorType $value): void {
        $this->getBackingStore()->set('exchangeConnectorType', $value);
    }

    /**
     * Sets the exchangeOrganization property value. Exchange Organization to the Exchange server
     * @param string|null $value Value to set for the exchangeOrganization property.
    */
    public function setExchangeOrganization(?string $value): void {
        $this->getBackingStore()->set('exchangeOrganization', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync time for the Exchange Connector
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the primarySmtpAddress property value. Email address used to configure the Service To Service Exchange Connector.
     * @param string|null $value Value to set for the primarySmtpAddress property.
    */
    public function setPrimarySmtpAddress(?string $value): void {
        $this->getBackingStore()->set('primarySmtpAddress', $value);
    }

    /**
     * Sets the serverName property value. The name of the Exchange server.
     * @param string|null $value Value to set for the serverName property.
    */
    public function setServerName(?string $value): void {
        $this->getBackingStore()->set('serverName', $value);
    }

    /**
     * Sets the status property value. The current status of the Exchange Connector.
     * @param DeviceManagementExchangeConnectorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementExchangeConnectorStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the version property value. The version of the ExchangeConnectorAgent
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
