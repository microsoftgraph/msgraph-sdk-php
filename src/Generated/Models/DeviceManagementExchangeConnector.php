<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExchangeConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $connectorServerName The name of the server hosting the Exchange Connector.
    */
    private ?string $connectorServerName = null;
    
    /**
     * @var string|null $exchangeAlias An alias assigned to the Exchange server
    */
    private ?string $exchangeAlias = null;
    
    /**
     * @var DeviceManagementExchangeConnectorType|null $exchangeConnectorType The type of Exchange Connector.
    */
    private ?DeviceManagementExchangeConnectorType $exchangeConnectorType = null;
    
    /**
     * @var string|null $exchangeOrganization Exchange Organization to the Exchange server
    */
    private ?string $exchangeOrganization = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last sync time for the Exchange Connector
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $primarySmtpAddress Email address used to configure the Service To Service Exchange Connector.
    */
    private ?string $primarySmtpAddress = null;
    
    /**
     * @var string|null $serverName The name of the Exchange server.
    */
    private ?string $serverName = null;
    
    /**
     * @var DeviceManagementExchangeConnectorStatus|null $status The current status of the Exchange Connector.
    */
    private ?DeviceManagementExchangeConnectorStatus $status = null;
    
    /**
     * @var string|null $version The version of the ExchangeConnectorAgent
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new deviceManagementExchangeConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementExchangeConnector');
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
        return $this->connectorServerName;
    }

    /**
     * Gets the exchangeAlias property value. An alias assigned to the Exchange server
     * @return string|null
    */
    public function getExchangeAlias(): ?string {
        return $this->exchangeAlias;
    }

    /**
     * Gets the exchangeConnectorType property value. The type of Exchange Connector.
     * @return DeviceManagementExchangeConnectorType|null
    */
    public function getExchangeConnectorType(): ?DeviceManagementExchangeConnectorType {
        return $this->exchangeConnectorType;
    }

    /**
     * Gets the exchangeOrganization property value. Exchange Organization to the Exchange server
     * @return string|null
    */
    public function getExchangeOrganization(): ?string {
        return $this->exchangeOrganization;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the primarySmtpAddress property value. Email address used to configure the Service To Service Exchange Connector.
     * @return string|null
    */
    public function getPrimarySmtpAddress(): ?string {
        return $this->primarySmtpAddress;
    }

    /**
     * Gets the serverName property value. The name of the Exchange server.
     * @return string|null
    */
    public function getServerName(): ?string {
        return $this->serverName;
    }

    /**
     * Gets the status property value. The current status of the Exchange Connector.
     * @return DeviceManagementExchangeConnectorStatus|null
    */
    public function getStatus(): ?DeviceManagementExchangeConnectorStatus {
        return $this->status;
    }

    /**
     * Gets the version property value. The version of the ExchangeConnectorAgent
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorServerName', $this->connectorServerName);
        $writer->writeStringValue('exchangeAlias', $this->exchangeAlias);
        $writer->writeEnumValue('exchangeConnectorType', $this->exchangeConnectorType);
        $writer->writeStringValue('exchangeOrganization', $this->exchangeOrganization);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('primarySmtpAddress', $this->primarySmtpAddress);
        $writer->writeStringValue('serverName', $this->serverName);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the connectorServerName property value. The name of the server hosting the Exchange Connector.
     *  @param string|null $value Value to set for the connectorServerName property.
    */
    public function setConnectorServerName(?string $value ): void {
        $this->connectorServerName = $value;
    }

    /**
     * Sets the exchangeAlias property value. An alias assigned to the Exchange server
     *  @param string|null $value Value to set for the exchangeAlias property.
    */
    public function setExchangeAlias(?string $value ): void {
        $this->exchangeAlias = $value;
    }

    /**
     * Sets the exchangeConnectorType property value. The type of Exchange Connector.
     *  @param DeviceManagementExchangeConnectorType|null $value Value to set for the exchangeConnectorType property.
    */
    public function setExchangeConnectorType(?DeviceManagementExchangeConnectorType $value ): void {
        $this->exchangeConnectorType = $value;
    }

    /**
     * Sets the exchangeOrganization property value. Exchange Organization to the Exchange server
     *  @param string|null $value Value to set for the exchangeOrganization property.
    */
    public function setExchangeOrganization(?string $value ): void {
        $this->exchangeOrganization = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync time for the Exchange Connector
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the primarySmtpAddress property value. Email address used to configure the Service To Service Exchange Connector.
     *  @param string|null $value Value to set for the primarySmtpAddress property.
    */
    public function setPrimarySmtpAddress(?string $value ): void {
        $this->primarySmtpAddress = $value;
    }

    /**
     * Sets the serverName property value. The name of the Exchange server.
     *  @param string|null $value Value to set for the serverName property.
    */
    public function setServerName(?string $value ): void {
        $this->serverName = $value;
    }

    /**
     * Sets the status property value. The current status of the Exchange Connector.
     *  @param DeviceManagementExchangeConnectorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementExchangeConnectorStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the version property value. The version of the ExchangeConnectorAgent
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
