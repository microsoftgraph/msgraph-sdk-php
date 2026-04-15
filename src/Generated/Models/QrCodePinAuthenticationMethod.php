<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QrCodePinAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new QrCodePinAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.qrCodePinAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QrCodePinAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QrCodePinAuthenticationMethod {
        return new QrCodePinAuthenticationMethod();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'pin' => fn(ParseNode $n) => $o->setPin($n->getObjectValue([QrPin::class, 'createFromDiscriminatorValue'])),
            'standardQRCode' => fn(ParseNode $n) => $o->setStandardQRCode($n->getObjectValue([QrCode::class, 'createFromDiscriminatorValue'])),
            'temporaryQRCode' => fn(ParseNode $n) => $o->setTemporaryQRCode($n->getObjectValue([QrCode::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the pin property value. The PIN associated with this QR code authentication method.
     * @return QrPin|null
    */
    public function getPin(): ?QrPin {
        $val = $this->getBackingStore()->get('pin');
        if (is_null($val) || $val instanceof QrPin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pin'");
    }

    /**
     * Gets the standardQRCode property value. The standard (long-lived) QR code credential, typically printed on a user's badge.
     * @return QrCode|null
    */
    public function getStandardQRCode(): ?QrCode {
        $val = $this->getBackingStore()->get('standardQRCode');
        if (is_null($val) || $val instanceof QrCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'standardQRCode'");
    }

    /**
     * Gets the temporaryQRCode property value. A temporary (short-lived) QR code credential, created when a user forgets their badge.
     * @return QrCode|null
    */
    public function getTemporaryQRCode(): ?QrCode {
        $val = $this->getBackingStore()->get('temporaryQRCode');
        if (is_null($val) || $val instanceof QrCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporaryQRCode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('pin', $this->getPin());
        $writer->writeObjectValue('standardQRCode', $this->getStandardQRCode());
        $writer->writeObjectValue('temporaryQRCode', $this->getTemporaryQRCode());
    }

    /**
     * Sets the pin property value. The PIN associated with this QR code authentication method.
     * @param QrPin|null $value Value to set for the pin property.
    */
    public function setPin(?QrPin $value): void {
        $this->getBackingStore()->set('pin', $value);
    }

    /**
     * Sets the standardQRCode property value. The standard (long-lived) QR code credential, typically printed on a user's badge.
     * @param QrCode|null $value Value to set for the standardQRCode property.
    */
    public function setStandardQRCode(?QrCode $value): void {
        $this->getBackingStore()->set('standardQRCode', $value);
    }

    /**
     * Sets the temporaryQRCode property value. A temporary (short-lived) QR code credential, created when a user forgets their badge.
     * @param QrCode|null $value Value to set for the temporaryQRCode property.
    */
    public function setTemporaryQRCode(?QrCode $value): void {
        $this->getBackingStore()->set('temporaryQRCode', $value);
    }

}
