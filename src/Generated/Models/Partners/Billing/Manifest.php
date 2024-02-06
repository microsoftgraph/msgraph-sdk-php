<?php

namespace Microsoft\Graph\Generated\Models\Partners\Billing;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Manifest extends Entity implements Parsable 
{
    /**
     * Instantiates a new manifest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Manifest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Manifest {
        return new Manifest();
    }

    /**
     * Gets the blobCount property value. The total file count for this partner tenant ID.
     * @return int|null
    */
    public function getBlobCount(): ?int {
        $val = $this->getBackingStore()->get('blobCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blobCount'");
    }

    /**
     * Gets the blobs property value. A collection of blob objects that contain details of all the files for the partner tenant ID.
     * @return array<Blob>|null
    */
    public function getBlobs(): ?array {
        $val = $this->getBackingStore()->get('blobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Blob::class);
            /** @var array<Blob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blobs'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when a manifest resource was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the dataFormat property value. The billing data file format. The possible value is: compressedJSONLines. Each blob is a compressed file and data in the file is in JSON lines format. Decompress the file to access the data.
     * @return string|null
    */
    public function getDataFormat(): ?string {
        $val = $this->getBackingStore()->get('dataFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataFormat'");
    }

    /**
     * Gets the eTag property value. Version of data represented by the manifest. Any change in eTag indicates a new data version.
     * @return string|null
    */
    public function getETag(): ?string {
        $val = $this->getBackingStore()->get('eTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eTag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blobCount' => fn(ParseNode $n) => $o->setBlobCount($n->getIntegerValue()),
            'blobs' => fn(ParseNode $n) => $o->setBlobs($n->getCollectionOfObjectValues([Blob::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dataFormat' => fn(ParseNode $n) => $o->setDataFormat($n->getStringValue()),
            'eTag' => fn(ParseNode $n) => $o->setETag($n->getStringValue()),
            'partitionType' => fn(ParseNode $n) => $o->setPartitionType($n->getStringValue()),
            'partnerTenantId' => fn(ParseNode $n) => $o->setPartnerTenantId($n->getStringValue()),
            'rootDirectory' => fn(ParseNode $n) => $o->setRootDirectory($n->getStringValue()),
            'sasToken' => fn(ParseNode $n) => $o->setSasToken($n->getStringValue()),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the partitionType property value. Indicates the division of data. If a given partition has more than the supported number, the data is split into multiple files, each file representing a specific partitionValue. By default, the data in the file is partitioned by the number of line items.
     * @return string|null
    */
    public function getPartitionType(): ?string {
        $val = $this->getBackingStore()->get('partitionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partitionType'");
    }

    /**
     * Gets the partnerTenantId property value. The Microsoft Entra tenant ID of the partner.
     * @return string|null
    */
    public function getPartnerTenantId(): ?string {
        $val = $this->getBackingStore()->get('partnerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerTenantId'");
    }

    /**
     * Gets the rootDirectory property value. The root directory that contains all the files.
     * @return string|null
    */
    public function getRootDirectory(): ?string {
        $val = $this->getBackingStore()->get('rootDirectory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootDirectory'");
    }

    /**
     * Gets the sasToken property value. The SAS token for accessing the directory or an individual file in the directory.
     * @return string|null
    */
    public function getSasToken(): ?string {
        $val = $this->getBackingStore()->get('sasToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sasToken'");
    }

    /**
     * Gets the schemaVersion property value. The version of the manifest schema.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        $val = $this->getBackingStore()->get('schemaVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schemaVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('blobCount', $this->getBlobCount());
        $writer->writeCollectionOfObjectValues('blobs', $this->getBlobs());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('dataFormat', $this->getDataFormat());
        $writer->writeStringValue('eTag', $this->getETag());
        $writer->writeStringValue('partitionType', $this->getPartitionType());
        $writer->writeStringValue('partnerTenantId', $this->getPartnerTenantId());
        $writer->writeStringValue('rootDirectory', $this->getRootDirectory());
        $writer->writeStringValue('sasToken', $this->getSasToken());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
    }

    /**
     * Sets the blobCount property value. The total file count for this partner tenant ID.
     * @param int|null $value Value to set for the blobCount property.
    */
    public function setBlobCount(?int $value): void {
        $this->getBackingStore()->set('blobCount', $value);
    }

    /**
     * Sets the blobs property value. A collection of blob objects that contain details of all the files for the partner tenant ID.
     * @param array<Blob>|null $value Value to set for the blobs property.
    */
    public function setBlobs(?array $value): void {
        $this->getBackingStore()->set('blobs', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when a manifest resource was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the dataFormat property value. The billing data file format. The possible value is: compressedJSONLines. Each blob is a compressed file and data in the file is in JSON lines format. Decompress the file to access the data.
     * @param string|null $value Value to set for the dataFormat property.
    */
    public function setDataFormat(?string $value): void {
        $this->getBackingStore()->set('dataFormat', $value);
    }

    /**
     * Sets the eTag property value. Version of data represented by the manifest. Any change in eTag indicates a new data version.
     * @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value): void {
        $this->getBackingStore()->set('eTag', $value);
    }

    /**
     * Sets the partitionType property value. Indicates the division of data. If a given partition has more than the supported number, the data is split into multiple files, each file representing a specific partitionValue. By default, the data in the file is partitioned by the number of line items.
     * @param string|null $value Value to set for the partitionType property.
    */
    public function setPartitionType(?string $value): void {
        $this->getBackingStore()->set('partitionType', $value);
    }

    /**
     * Sets the partnerTenantId property value. The Microsoft Entra tenant ID of the partner.
     * @param string|null $value Value to set for the partnerTenantId property.
    */
    public function setPartnerTenantId(?string $value): void {
        $this->getBackingStore()->set('partnerTenantId', $value);
    }

    /**
     * Sets the rootDirectory property value. The root directory that contains all the files.
     * @param string|null $value Value to set for the rootDirectory property.
    */
    public function setRootDirectory(?string $value): void {
        $this->getBackingStore()->set('rootDirectory', $value);
    }

    /**
     * Sets the sasToken property value. The SAS token for accessing the directory or an individual file in the directory.
     * @param string|null $value Value to set for the sasToken property.
    */
    public function setSasToken(?string $value): void {
        $this->getBackingStore()->set('sasToken', $value);
    }

    /**
     * Sets the schemaVersion property value. The version of the manifest schema.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->getBackingStore()->set('schemaVersion', $value);
    }

}
