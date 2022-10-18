<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Create;

use Microsoft\Graph\Generated\Models\PrintCertificateSigningRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreatePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PrintCertificateSigningRequest|null $certificateSigningRequest The certificateSigningRequest property
    */
    private ?PrintCertificateSigningRequest $certificateSigningRequest = null;
    
    /**
     * @var string|null $connectorId The connectorId property
    */
    private ?string $connectorId = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $hasPhysicalDevice The hasPhysicalDevice property
    */
    private ?bool $hasPhysicalDevice = null;
    
    /**
     * @var string|null $manufacturer The manufacturer property
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The model property
    */
    private ?string $model = null;
    
    /**
     * @var string|null $physicalDeviceId The physicalDeviceId property
    */
    private ?string $physicalDeviceId = null;
    
    /**
     * Instantiates a new createPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePostRequestBody {
        return new CreatePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateSigningRequest property value. The certificateSigningRequest property
     * @return PrintCertificateSigningRequest|null
    */
    public function getCertificateSigningRequest(): ?PrintCertificateSigningRequest {
        return $this->certificateSigningRequest;
    }

    /**
     * Gets the connectorId property value. The connectorId property
     * @return string|null
    */
    public function getConnectorId(): ?string {
        return $this->connectorId;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificateSigningRequest' => fn(ParseNode $n) => $o->setCertificateSigningRequest($n->getObjectValue([PrintCertificateSigningRequest::class, 'createFromDiscriminatorValue'])),
            'connectorId' => fn(ParseNode $n) => $o->setConnectorId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hasPhysicalDevice' => fn(ParseNode $n) => $o->setHasPhysicalDevice($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'physicalDeviceId' => fn(ParseNode $n) => $o->setPhysicalDeviceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasPhysicalDevice property value. The hasPhysicalDevice property
     * @return bool|null
    */
    public function getHasPhysicalDevice(): ?bool {
        return $this->hasPhysicalDevice;
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The model property
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the physicalDeviceId property value. The physicalDeviceId property
     * @return string|null
    */
    public function getPhysicalDeviceId(): ?string {
        return $this->physicalDeviceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('certificateSigningRequest', $this->certificateSigningRequest);
        $writer->writeStringValue('connectorId', $this->connectorId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('hasPhysicalDevice', $this->hasPhysicalDevice);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('physicalDeviceId', $this->physicalDeviceId);
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
     * Sets the certificateSigningRequest property value. The certificateSigningRequest property
     *  @param PrintCertificateSigningRequest|null $value Value to set for the certificateSigningRequest property.
    */
    public function setCertificateSigningRequest(?PrintCertificateSigningRequest $value ): void {
        $this->certificateSigningRequest = $value;
    }

    /**
     * Sets the connectorId property value. The connectorId property
     *  @param string|null $value Value to set for the connectorId property.
    */
    public function setConnectorId(?string $value ): void {
        $this->connectorId = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the hasPhysicalDevice property value. The hasPhysicalDevice property
     *  @param bool|null $value Value to set for the hasPhysicalDevice property.
    */
    public function setHasPhysicalDevice(?bool $value ): void {
        $this->hasPhysicalDevice = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The model property
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the physicalDeviceId property value. The physicalDeviceId property
     *  @param string|null $value Value to set for the physicalDeviceId property.
    */
    public function setPhysicalDeviceId(?string $value ): void {
        $this->physicalDeviceId = $value;
    }

}
