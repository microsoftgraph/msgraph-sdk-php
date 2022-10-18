<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningStatusInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ProvisioningErrorInfo|null $errorInformation The errorInformation property
    */
    private ?ProvisioningErrorInfo $errorInformation = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ProvisioningResult|null $status Possible values are: success, warning, failure, skipped, unknownFutureValue.
    */
    private ?ProvisioningResult $status = null;
    
    /**
     * Instantiates a new provisioningStatusInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.provisioningStatusInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningStatusInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningStatusInfo {
        return new ProvisioningStatusInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorInformation property value. The errorInformation property
     * @return ProvisioningErrorInfo|null
    */
    public function getErrorInformation(): ?ProvisioningErrorInfo {
        return $this->errorInformation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorInformation' => fn(ParseNode $n) => $o->setErrorInformation($n->getObjectValue([ProvisioningErrorInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ProvisioningResult::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the status property value. Possible values are: success, warning, failure, skipped, unknownFutureValue.
     * @return ProvisioningResult|null
    */
    public function getStatus(): ?ProvisioningResult {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('errorInformation', $this->errorInformation);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the errorInformation property value. The errorInformation property
     *  @param ProvisioningErrorInfo|null $value Value to set for the errorInformation property.
    */
    public function setErrorInformation(?ProvisioningErrorInfo $value ): void {
        $this->errorInformation = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the status property value. Possible values are: success, warning, failure, skipped, unknownFutureValue.
     *  @param ProvisioningResult|null $value Value to set for the status property.
    */
    public function setStatus(?ProvisioningResult $value ): void {
        $this->status = $value;
    }

}
