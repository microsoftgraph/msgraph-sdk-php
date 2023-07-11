<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity for AppLogCollectionRequest contains all logs values.
*/
class AppLogCollectionRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new appLogCollectionRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppLogCollectionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppLogCollectionRequest {
        return new AppLogCollectionRequest();
    }

    /**
     * Gets the completedDateTime property value. Time at which the upload log request reached a completed state if not completed yet NULL will be returned.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the customLogFolders property value. List of log folders.
     * @return array<string>|null
    */
    public function getCustomLogFolders(): ?array {
        $val = $this->getBackingStore()->get('customLogFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customLogFolders'");
    }

    /**
     * Gets the errorMessage property value. Indicates error message if any during the upload process.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('errorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'customLogFolders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCustomLogFolders($val);
            },
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AppLogUploadState::class)),
        ]);
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
     * Gets the status property value. AppLogUploadStatus
     * @return AppLogUploadState|null
    */
    public function getStatus(): ?AppLogUploadState {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AppLogUploadState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeCollectionOfPrimitiveValues('customLogFolders', $this->getCustomLogFolders());
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the completedDateTime property value. Time at which the upload log request reached a completed state if not completed yet NULL will be returned.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the customLogFolders property value. List of log folders.
     * @param array<string>|null $value Value to set for the customLogFolders property.
    */
    public function setCustomLogFolders(?array $value): void {
        $this->getBackingStore()->set('customLogFolders', $value);
    }

    /**
     * Sets the errorMessage property value. Indicates error message if any during the upload process.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->getBackingStore()->set('errorMessage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. AppLogUploadStatus
     * @param AppLogUploadState|null $value Value to set for the status property.
    */
    public function setStatus(?AppLogUploadState $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
