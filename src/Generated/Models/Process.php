<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Process implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Process and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Process
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Process {
        return new Process();
    }

    /**
     * Gets the accountName property value. User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the commandLine property value. The full process invocation commandline including all parameters.
     * @return string|null
    */
    public function getCommandLine(): ?string {
        return $this->getBackingStore()->get('commandLine');
    }

    /**
     * Gets the createdDateTime property value. Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'commandLine' => fn(ParseNode $n) => $o->setCommandLine($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'fileHash' => fn(ParseNode $n) => $o->setFileHash($n->getObjectValue([FileHash::class, 'createFromDiscriminatorValue'])),
            'integrityLevel' => fn(ParseNode $n) => $o->setIntegrityLevel($n->getEnumValue(ProcessIntegrityLevel::class)),
            'isElevated' => fn(ParseNode $n) => $o->setIsElevated($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentProcessCreatedDateTime' => fn(ParseNode $n) => $o->setParentProcessCreatedDateTime($n->getDateTimeValue()),
            'parentProcessId' => fn(ParseNode $n) => $o->setParentProcessId($n->getIntegerValue()),
            'parentProcessName' => fn(ParseNode $n) => $o->setParentProcessName($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'processId' => fn(ParseNode $n) => $o->setProcessId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     * @return FileHash|null
    */
    public function getFileHash(): ?FileHash {
        return $this->getBackingStore()->get('fileHash');
    }

    /**
     * Gets the integrityLevel property value. The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     * @return ProcessIntegrityLevel|null
    */
    public function getIntegrityLevel(): ?ProcessIntegrityLevel {
        return $this->getBackingStore()->get('integrityLevel');
    }

    /**
     * Gets the isElevated property value. True if the process is elevated.
     * @return bool|null
    */
    public function getIsElevated(): ?bool {
        return $this->getBackingStore()->get('isElevated');
    }

    /**
     * Gets the name property value. The name of the process' Image file.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the parentProcessCreatedDateTime property value. DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getParentProcessCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('parentProcessCreatedDateTime');
    }

    /**
     * Gets the parentProcessId property value. The Process ID (PID) of the parent process.
     * @return int|null
    */
    public function getParentProcessId(): ?int {
        return $this->getBackingStore()->get('parentProcessId');
    }

    /**
     * Gets the parentProcessName property value. The name of the image file of the parent process.
     * @return string|null
    */
    public function getParentProcessName(): ?string {
        return $this->getBackingStore()->get('parentProcessName');
    }

    /**
     * Gets the path property value. Full path, including filename.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->getBackingStore()->get('path');
    }

    /**
     * Gets the processId property value. The Process ID (PID) of the process.
     * @return int|null
    */
    public function getProcessId(): ?int {
        return $this->getBackingStore()->get('processId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeStringValue('commandLine', $this->getCommandLine());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('fileHash', $this->getFileHash());
        $writer->writeEnumValue('integrityLevel', $this->getIntegrityLevel());
        $writer->writeBooleanValue('isElevated', $this->getIsElevated());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('parentProcessCreatedDateTime', $this->getParentProcessCreatedDateTime());
        $writer->writeIntegerValue('parentProcessId', $this->getParentProcessId());
        $writer->writeStringValue('parentProcessName', $this->getParentProcessName());
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeIntegerValue('processId', $this->getProcessId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountName property value. User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the commandLine property value. The full process invocation commandline including all parameters.
     * @param string|null $value Value to set for the commandLine property.
    */
    public function setCommandLine(?string $value): void {
        $this->getBackingStore()->set('commandLine', $value);
    }

    /**
     * Sets the createdDateTime property value. Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     * @param FileHash|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?FileHash $value): void {
        $this->getBackingStore()->set('fileHash', $value);
    }

    /**
     * Sets the integrityLevel property value. The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     * @param ProcessIntegrityLevel|null $value Value to set for the integrityLevel property.
    */
    public function setIntegrityLevel(?ProcessIntegrityLevel $value): void {
        $this->getBackingStore()->set('integrityLevel', $value);
    }

    /**
     * Sets the isElevated property value. True if the process is elevated.
     * @param bool|null $value Value to set for the isElevated property.
    */
    public function setIsElevated(?bool $value): void {
        $this->getBackingStore()->set('isElevated', $value);
    }

    /**
     * Sets the name property value. The name of the process' Image file.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parentProcessCreatedDateTime property value. DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the parentProcessCreatedDateTime property.
    */
    public function setParentProcessCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('parentProcessCreatedDateTime', $value);
    }

    /**
     * Sets the parentProcessId property value. The Process ID (PID) of the parent process.
     * @param int|null $value Value to set for the parentProcessId property.
    */
    public function setParentProcessId(?int $value): void {
        $this->getBackingStore()->set('parentProcessId', $value);
    }

    /**
     * Sets the parentProcessName property value. The name of the image file of the parent process.
     * @param string|null $value Value to set for the parentProcessName property.
    */
    public function setParentProcessName(?string $value): void {
        $this->getBackingStore()->set('parentProcessName', $value);
    }

    /**
     * Sets the path property value. Full path, including filename.
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

    /**
     * Sets the processId property value. The Process ID (PID) of the process.
     * @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value): void {
        $this->getBackingStore()->set('processId', $value);
    }

}
