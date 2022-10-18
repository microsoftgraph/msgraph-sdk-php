<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OcrSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isEnabled Indicates whether or not OCR is enabled for the case.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var int|null $maxImageSize Maximum image size that will be processed in KB).
    */
    private ?int $maxImageSize = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateInterval|null $timeout The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
    */
    private ?DateInterval $timeout = null;
    
    /**
     * Instantiates a new ocrSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.ocrSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OcrSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OcrSettings {
        return new OcrSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'maxImageSize' => fn(ParseNode $n) => $o->setMaxImageSize($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'timeout' => fn(ParseNode $n) => $o->setTimeout($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. Indicates whether or not OCR is enabled for the case.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the maxImageSize property value. Maximum image size that will be processed in KB).
     * @return int|null
    */
    public function getMaxImageSize(): ?int {
        return $this->maxImageSize;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the timeout property value. The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
     * @return DateInterval|null
    */
    public function getTimeout(): ?DateInterval {
        return $this->timeout;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeIntegerValue('maxImageSize', $this->maxImageSize);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateIntervalValue('timeout', $this->timeout);
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
     * Sets the isEnabled property value. Indicates whether or not OCR is enabled for the case.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the maxImageSize property value. Maximum image size that will be processed in KB).
     *  @param int|null $value Value to set for the maxImageSize property.
    */
    public function setMaxImageSize(?int $value ): void {
        $this->maxImageSize = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the timeout property value. The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
     *  @param DateInterval|null $value Value to set for the timeout property.
    */
    public function setTimeout(?DateInterval $value ): void {
        $this->timeout = $value;
    }

}
