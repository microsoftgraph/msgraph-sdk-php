<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class QrCodeImageDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new QrCodeImageDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QrCodeImageDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QrCodeImageDetails {
        return new QrCodeImageDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the binaryValue property value. The binary representation of the QR code image.
     * @return StreamInterface|null
    */
    public function getBinaryValue(): ?StreamInterface {
        $val = $this->getBackingStore()->get('binaryValue');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'binaryValue'");
    }

    /**
     * Gets the errorCorrectionLevel property value. The error correction level of the QR code, which determines how much of the QR code can be damaged while still being readable. The possible values are: l, m, q, h, unknownFutureValue.
     * @return ErrorCorrectionLevel|null
    */
    public function getErrorCorrectionLevel(): ?ErrorCorrectionLevel {
        $val = $this->getBackingStore()->get('errorCorrectionLevel');
        if (is_null($val) || $val instanceof ErrorCorrectionLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCorrectionLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'binaryValue' => fn(ParseNode $n) => $o->setBinaryValue($n->getBinaryContent()),
            'errorCorrectionLevel' => fn(ParseNode $n) => $o->setErrorCorrectionLevel($n->getEnumValue(ErrorCorrectionLevel::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'rawContent' => fn(ParseNode $n) => $o->setRawContent($n->getBinaryContent()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
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
     * Gets the rawContent property value. The raw encoded content embedded in the QR code.
     * @return StreamInterface|null
    */
    public function getRawContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('rawContent');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rawContent'");
    }

    /**
     * Gets the version property value. The version number of the QR code, which determines its size and data capacity.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('binaryValue', $this->getBinaryValue());
        $writer->writeEnumValue('errorCorrectionLevel', $this->getErrorCorrectionLevel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBinaryContent('rawContent', $this->getRawContent());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the binaryValue property value. The binary representation of the QR code image.
     * @param StreamInterface|null $value Value to set for the binaryValue property.
    */
    public function setBinaryValue(?StreamInterface $value): void {
        $this->getBackingStore()->set('binaryValue', $value);
    }

    /**
     * Sets the errorCorrectionLevel property value. The error correction level of the QR code, which determines how much of the QR code can be damaged while still being readable. The possible values are: l, m, q, h, unknownFutureValue.
     * @param ErrorCorrectionLevel|null $value Value to set for the errorCorrectionLevel property.
    */
    public function setErrorCorrectionLevel(?ErrorCorrectionLevel $value): void {
        $this->getBackingStore()->set('errorCorrectionLevel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the rawContent property value. The raw encoded content embedded in the QR code.
     * @param StreamInterface|null $value Value to set for the rawContent property.
    */
    public function setRawContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('rawContent', $value);
    }

    /**
     * Sets the version property value. The version number of the QR code, which determines its size and data capacity.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
