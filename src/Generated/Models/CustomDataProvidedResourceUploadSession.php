<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Graph\Generated\Models\CustomDataProvidedResourcePayloads\Data;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomDataProvidedResourceUploadSession extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomDataProvidedResourceUploadSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomDataProvidedResourceUploadSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomDataProvidedResourceUploadSession {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.customDataProvidedResourceAccessReviewUploadSession': return new CustomDataProvidedResourceAccessReviewUploadSession();
            }
        }
        return new CustomDataProvidedResourceUploadSession();
    }

    /**
     * Gets the createdDateTime property value. DateTime when the upload session was created. Read-only. Supports $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the data property value. An object containing the context for which this data is being uploaded.
     * @return Data|null
    */
    public function getData(): ?Data {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || $val instanceof Data) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'data'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([Data::class, 'createFromDiscriminatorValue'])),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([CustomDataProvidedResourceFile::class, 'createFromDiscriminatorValue'])),
            'isUploadDone' => fn(ParseNode $n) => $o->setIsUploadDone($n->getBooleanValue()),
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'stats' => fn(ParseNode $n) => $o->setStats($n->getObjectValue([CustomDataProvidedResourceUploadStats::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CustomDataProvidedResourceUploadStatus::class)),
        ]);
    }

    /**
     * Gets the files property value. The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby.
     * @return array<CustomDataProvidedResourceFile>|null
    */
    public function getFiles(): ?array {
        $val = $this->getBackingStore()->get('files');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomDataProvidedResourceFile::class);
            /** @var array<CustomDataProvidedResourceFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Gets the isUploadDone property value. Indicates if all the necessary files have been uploaded to this session.
     * @return bool|null
    */
    public function getIsUploadDone(): ?bool {
        $val = $this->getBackingStore()->get('isUploadDone');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUploadDone'");
    }

    /**
     * Gets the referenceId property value. The ID of the context for which data is being uploaded, for example, the Access Review instance ID. Supports $filter (eq).
     * @return string|null
    */
    public function getReferenceId(): ?string {
        $val = $this->getBackingStore()->get('referenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceId'");
    }

    /**
     * Gets the stats property value. The stats property
     * @return CustomDataProvidedResourceUploadStats|null
    */
    public function getStats(): ?CustomDataProvidedResourceUploadStats {
        $val = $this->getBackingStore()->get('stats');
        if (is_null($val) || $val instanceof CustomDataProvidedResourceUploadStats) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stats'");
    }

    /**
     * Gets the status property value. The status property
     * @return CustomDataProvidedResourceUploadStatus|null
    */
    public function getStatus(): ?CustomDataProvidedResourceUploadStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CustomDataProvidedResourceUploadStatus) {
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
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeBooleanValue('isUploadDone', $this->getIsUploadDone());
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeObjectValue('stats', $this->getStats());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. DateTime when the upload session was created. Read-only. Supports $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the data property value. An object containing the context for which this data is being uploaded.
     * @param Data|null $value Value to set for the data property.
    */
    public function setData(?Data $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the files property value. The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby.
     * @param array<CustomDataProvidedResourceFile>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->getBackingStore()->set('files', $value);
    }

    /**
     * Sets the isUploadDone property value. Indicates if all the necessary files have been uploaded to this session.
     * @param bool|null $value Value to set for the isUploadDone property.
    */
    public function setIsUploadDone(?bool $value): void {
        $this->getBackingStore()->set('isUploadDone', $value);
    }

    /**
     * Sets the referenceId property value. The ID of the context for which data is being uploaded, for example, the Access Review instance ID. Supports $filter (eq).
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->getBackingStore()->set('referenceId', $value);
    }

    /**
     * Sets the stats property value. The stats property
     * @param CustomDataProvidedResourceUploadStats|null $value Value to set for the stats property.
    */
    public function setStats(?CustomDataProvidedResourceUploadStats $value): void {
        $this->getBackingStore()->set('stats', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CustomDataProvidedResourceUploadStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CustomDataProvidedResourceUploadStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
