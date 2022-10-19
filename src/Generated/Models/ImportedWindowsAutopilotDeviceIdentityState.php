<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportedWindowsAutopilotDeviceIdentityState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $deviceErrorCode Device error code reported by Device Directory Service(DDS).
    */
    private ?int $deviceErrorCode = null;
    
    /**
     * @var string|null $deviceErrorName Device error name reported by Device Directory Service(DDS).
    */
    private ?string $deviceErrorName = null;
    
    /**
     * @var ImportedWindowsAutopilotDeviceIdentityImportStatus|null $deviceImportStatus The deviceImportStatus property
    */
    private ?ImportedWindowsAutopilotDeviceIdentityImportStatus $deviceImportStatus = null;
    
    /**
     * @var string|null $deviceRegistrationId Device Registration ID for successfully added device reported by Device Directory Service(DDS).
    */
    private ?string $deviceRegistrationId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new importedWindowsAutopilotDeviceIdentityState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.importedWindowsAutopilotDeviceIdentityState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedWindowsAutopilotDeviceIdentityState {
        return new ImportedWindowsAutopilotDeviceIdentityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceErrorCode property value. Device error code reported by Device Directory Service(DDS).
     * @return int|null
    */
    public function getDeviceErrorCode(): ?int {
        return $this->deviceErrorCode;
    }

    /**
     * Gets the deviceErrorName property value. Device error name reported by Device Directory Service(DDS).
     * @return string|null
    */
    public function getDeviceErrorName(): ?string {
        return $this->deviceErrorName;
    }

    /**
     * Gets the deviceImportStatus property value. The deviceImportStatus property
     * @return ImportedWindowsAutopilotDeviceIdentityImportStatus|null
    */
    public function getDeviceImportStatus(): ?ImportedWindowsAutopilotDeviceIdentityImportStatus {
        return $this->deviceImportStatus;
    }

    /**
     * Gets the deviceRegistrationId property value. Device Registration ID for successfully added device reported by Device Directory Service(DDS).
     * @return string|null
    */
    public function getDeviceRegistrationId(): ?string {
        return $this->deviceRegistrationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceErrorCode' => fn(ParseNode $n) => $o->setDeviceErrorCode($n->getIntegerValue()),
            'deviceErrorName' => fn(ParseNode $n) => $o->setDeviceErrorName($n->getStringValue()),
            'deviceImportStatus' => fn(ParseNode $n) => $o->setDeviceImportStatus($n->getEnumValue(ImportedWindowsAutopilotDeviceIdentityImportStatus::class)),
            'deviceRegistrationId' => fn(ParseNode $n) => $o->setDeviceRegistrationId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceErrorCode', $this->deviceErrorCode);
        $writer->writeStringValue('deviceErrorName', $this->deviceErrorName);
        $writer->writeEnumValue('deviceImportStatus', $this->deviceImportStatus);
        $writer->writeStringValue('deviceRegistrationId', $this->deviceRegistrationId);
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
     * Sets the deviceErrorCode property value. Device error code reported by Device Directory Service(DDS).
     *  @param int|null $value Value to set for the deviceErrorCode property.
    */
    public function setDeviceErrorCode(?int $value ): void {
        $this->deviceErrorCode = $value;
    }

    /**
     * Sets the deviceErrorName property value. Device error name reported by Device Directory Service(DDS).
     *  @param string|null $value Value to set for the deviceErrorName property.
    */
    public function setDeviceErrorName(?string $value ): void {
        $this->deviceErrorName = $value;
    }

    /**
     * Sets the deviceImportStatus property value. The deviceImportStatus property
     *  @param ImportedWindowsAutopilotDeviceIdentityImportStatus|null $value Value to set for the deviceImportStatus property.
    */
    public function setDeviceImportStatus(?ImportedWindowsAutopilotDeviceIdentityImportStatus $value ): void {
        $this->deviceImportStatus = $value;
    }

    /**
     * Sets the deviceRegistrationId property value. Device Registration ID for successfully added device reported by Device Directory Service(DDS).
     *  @param string|null $value Value to set for the deviceRegistrationId property.
    */
    public function setDeviceRegistrationId(?string $value ): void {
        $this->deviceRegistrationId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
