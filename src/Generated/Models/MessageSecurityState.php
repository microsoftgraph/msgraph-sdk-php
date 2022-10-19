<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageSecurityState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $connectingIP The connectingIP property
    */
    private ?string $connectingIP = null;
    
    /**
     * @var string|null $deliveryAction The deliveryAction property
    */
    private ?string $deliveryAction = null;
    
    /**
     * @var string|null $deliveryLocation The deliveryLocation property
    */
    private ?string $deliveryLocation = null;
    
    /**
     * @var string|null $directionality The directionality property
    */
    private ?string $directionality = null;
    
    /**
     * @var string|null $internetMessageId The internetMessageId property
    */
    private ?string $internetMessageId = null;
    
    /**
     * @var string|null $messageFingerprint The messageFingerprint property
    */
    private ?string $messageFingerprint = null;
    
    /**
     * @var DateTime|null $messageReceivedDateTime The messageReceivedDateTime property
    */
    private ?DateTime $messageReceivedDateTime = null;
    
    /**
     * @var string|null $messageSubject The messageSubject property
    */
    private ?string $messageSubject = null;
    
    /**
     * @var string|null $networkMessageId The networkMessageId property
    */
    private ?string $networkMessageId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new messageSecurityState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.messageSecurityState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageSecurityState {
        return new MessageSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the connectingIP property value. The connectingIP property
     * @return string|null
    */
    public function getConnectingIP(): ?string {
        return $this->connectingIP;
    }

    /**
     * Gets the deliveryAction property value. The deliveryAction property
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        return $this->deliveryAction;
    }

    /**
     * Gets the deliveryLocation property value. The deliveryLocation property
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        return $this->deliveryLocation;
    }

    /**
     * Gets the directionality property value. The directionality property
     * @return string|null
    */
    public function getDirectionality(): ?string {
        return $this->directionality;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connectingIP' => fn(ParseNode $n) => $o->setConnectingIP($n->getStringValue()),
            'deliveryAction' => fn(ParseNode $n) => $o->setDeliveryAction($n->getStringValue()),
            'deliveryLocation' => fn(ParseNode $n) => $o->setDeliveryLocation($n->getStringValue()),
            'directionality' => fn(ParseNode $n) => $o->setDirectionality($n->getStringValue()),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'messageFingerprint' => fn(ParseNode $n) => $o->setMessageFingerprint($n->getStringValue()),
            'messageReceivedDateTime' => fn(ParseNode $n) => $o->setMessageReceivedDateTime($n->getDateTimeValue()),
            'messageSubject' => fn(ParseNode $n) => $o->setMessageSubject($n->getStringValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the messageFingerprint property value. The messageFingerprint property
     * @return string|null
    */
    public function getMessageFingerprint(): ?string {
        return $this->messageFingerprint;
    }

    /**
     * Gets the messageReceivedDateTime property value. The messageReceivedDateTime property
     * @return DateTime|null
    */
    public function getMessageReceivedDateTime(): ?DateTime {
        return $this->messageReceivedDateTime;
    }

    /**
     * Gets the messageSubject property value. The messageSubject property
     * @return string|null
    */
    public function getMessageSubject(): ?string {
        return $this->messageSubject;
    }

    /**
     * Gets the networkMessageId property value. The networkMessageId property
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        return $this->networkMessageId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('connectingIP', $this->connectingIP);
        $writer->writeStringValue('deliveryAction', $this->deliveryAction);
        $writer->writeStringValue('deliveryLocation', $this->deliveryLocation);
        $writer->writeStringValue('directionality', $this->directionality);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeStringValue('messageFingerprint', $this->messageFingerprint);
        $writer->writeDateTimeValue('messageReceivedDateTime', $this->messageReceivedDateTime);
        $writer->writeStringValue('messageSubject', $this->messageSubject);
        $writer->writeStringValue('networkMessageId', $this->networkMessageId);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the connectingIP property value. The connectingIP property
     *  @param string|null $value Value to set for the connectingIP property.
    */
    public function setConnectingIP(?string $value ): void {
        $this->connectingIP = $value;
    }

    /**
     * Sets the deliveryAction property value. The deliveryAction property
     *  @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value ): void {
        $this->deliveryAction = $value;
    }

    /**
     * Sets the deliveryLocation property value. The deliveryLocation property
     *  @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value ): void {
        $this->deliveryLocation = $value;
    }

    /**
     * Sets the directionality property value. The directionality property
     *  @param string|null $value Value to set for the directionality property.
    */
    public function setDirectionality(?string $value ): void {
        $this->directionality = $value;
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value ): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the messageFingerprint property value. The messageFingerprint property
     *  @param string|null $value Value to set for the messageFingerprint property.
    */
    public function setMessageFingerprint(?string $value ): void {
        $this->messageFingerprint = $value;
    }

    /**
     * Sets the messageReceivedDateTime property value. The messageReceivedDateTime property
     *  @param DateTime|null $value Value to set for the messageReceivedDateTime property.
    */
    public function setMessageReceivedDateTime(?DateTime $value ): void {
        $this->messageReceivedDateTime = $value;
    }

    /**
     * Sets the messageSubject property value. The messageSubject property
     *  @param string|null $value Value to set for the messageSubject property.
    */
    public function setMessageSubject(?string $value ): void {
        $this->messageSubject = $value;
    }

    /**
     * Sets the networkMessageId property value. The networkMessageId property
     *  @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value ): void {
        $this->networkMessageId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
