<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Process implements AdditionalDataHolder, Parsable 
{
    /** @var string|null $accountName User account identifier (user account context the process ran under) for example, AccountName, SID, and so on. */
    private ?string $accountName = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $commandLine The full process invocation commandline including all parameters. */
    private ?string $commandLine = null;
    
    /** @var DateTime|null $createdDateTime Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $createdDateTime = null;
    
    /** @var FileHash|null $fileHash Complex type containing file hashes (cryptographic and location-sensitive). */
    private ?FileHash $fileHash = null;
    
    /** @var ProcessIntegrityLevel|null $integrityLevel The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system. */
    private ?ProcessIntegrityLevel $integrityLevel = null;
    
    /** @var bool|null $isElevated True if the process is elevated. */
    private ?bool $isElevated = null;
    
    /** @var string|null $name The name of the process' Image file. */
    private ?string $name = null;
    
    /** @var DateTime|null $parentProcessCreatedDateTime DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $parentProcessCreatedDateTime = null;
    
    /** @var int|null $parentProcessId The Process ID (PID) of the parent process. */
    private ?int $parentProcessId = null;
    
    /** @var string|null $parentProcessName The name of the image file of the parent process. */
    private ?string $parentProcessName = null;
    
    /** @var string|null $path Full path, including filename. */
    private ?string $path = null;
    
    /** @var int|null $processId The Process ID (PID) of the process. */
    private ?int $processId = null;
    
    /**
     * Instantiates a new process and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Process
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Process {
        return new Process();
    }

    /**
     * Gets the accountName property value. User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the commandLine property value. The full process invocation commandline including all parameters.
     * @return string|null
    */
    public function getCommandLine(): ?string {
        return $this->commandLine;
    }

    /**
     * Gets the createdDateTime property value. Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'accountName' => function (self $o, ParseNode $n) { $o->setAccountName($n->getStringValue()); },
            'commandLine' => function (self $o, ParseNode $n) { $o->setCommandLine($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'fileHash' => function (self $o, ParseNode $n) { $o->setFileHash($n->getObjectValue(FileHash::class)); },
            'integrityLevel' => function (self $o, ParseNode $n) { $o->setIntegrityLevel($n->getEnumValue(ProcessIntegrityLevel::class)); },
            'isElevated' => function (self $o, ParseNode $n) { $o->setIsElevated($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'parentProcessCreatedDateTime' => function (self $o, ParseNode $n) { $o->setParentProcessCreatedDateTime($n->getDateTimeValue()); },
            'parentProcessId' => function (self $o, ParseNode $n) { $o->setParentProcessId($n->getIntegerValue()); },
            'parentProcessName' => function (self $o, ParseNode $n) { $o->setParentProcessName($n->getStringValue()); },
            'path' => function (self $o, ParseNode $n) { $o->setPath($n->getStringValue()); },
            'processId' => function (self $o, ParseNode $n) { $o->setProcessId($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     * @return FileHash|null
    */
    public function getFileHash(): ?FileHash {
        return $this->fileHash;
    }

    /**
     * Gets the integrityLevel property value. The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     * @return ProcessIntegrityLevel|null
    */
    public function getIntegrityLevel(): ?ProcessIntegrityLevel {
        return $this->integrityLevel;
    }

    /**
     * Gets the isElevated property value. True if the process is elevated.
     * @return bool|null
    */
    public function getIsElevated(): ?bool {
        return $this->isElevated;
    }

    /**
     * Gets the name property value. The name of the process' Image file.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parentProcessCreatedDateTime property value. DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getParentProcessCreatedDateTime(): ?DateTime {
        return $this->parentProcessCreatedDateTime;
    }

    /**
     * Gets the parentProcessId property value. The Process ID (PID) of the parent process.
     * @return int|null
    */
    public function getParentProcessId(): ?int {
        return $this->parentProcessId;
    }

    /**
     * Gets the parentProcessName property value. The name of the image file of the parent process.
     * @return string|null
    */
    public function getParentProcessName(): ?string {
        return $this->parentProcessName;
    }

    /**
     * Gets the path property value. Full path, including filename.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the processId property value. The Process ID (PID) of the process.
     * @return int|null
    */
    public function getProcessId(): ?int {
        return $this->processId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeStringValue('commandLine', $this->commandLine);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('fileHash', $this->fileHash);
        $writer->writeEnumValue('integrityLevel', $this->integrityLevel);
        $writer->writeBooleanValue('isElevated', $this->isElevated);
        $writer->writeStringValue('name', $this->name);
        $writer->writeDateTimeValue('parentProcessCreatedDateTime', $this->parentProcessCreatedDateTime);
        $writer->writeIntegerValue('parentProcessId', $this->parentProcessId);
        $writer->writeStringValue('parentProcessName', $this->parentProcessName);
        $writer->writeStringValue('path', $this->path);
        $writer->writeIntegerValue('processId', $this->processId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountName property value. User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the commandLine property value. The full process invocation commandline including all parameters.
     *  @param string|null $value Value to set for the commandLine property.
    */
    public function setCommandLine(?string $value ): void {
        $this->commandLine = $value;
    }

    /**
     * Sets the createdDateTime property value. Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     *  @param FileHash|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?FileHash $value ): void {
        $this->fileHash = $value;
    }

    /**
     * Sets the integrityLevel property value. The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
     *  @param ProcessIntegrityLevel|null $value Value to set for the integrityLevel property.
    */
    public function setIntegrityLevel(?ProcessIntegrityLevel $value ): void {
        $this->integrityLevel = $value;
    }

    /**
     * Sets the isElevated property value. True if the process is elevated.
     *  @param bool|null $value Value to set for the isElevated property.
    */
    public function setIsElevated(?bool $value ): void {
        $this->isElevated = $value;
    }

    /**
     * Sets the name property value. The name of the process' Image file.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parentProcessCreatedDateTime property value. DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the parentProcessCreatedDateTime property.
    */
    public function setParentProcessCreatedDateTime(?DateTime $value ): void {
        $this->parentProcessCreatedDateTime = $value;
    }

    /**
     * Sets the parentProcessId property value. The Process ID (PID) of the parent process.
     *  @param int|null $value Value to set for the parentProcessId property.
    */
    public function setParentProcessId(?int $value ): void {
        $this->parentProcessId = $value;
    }

    /**
     * Sets the parentProcessName property value. The name of the image file of the parent process.
     *  @param string|null $value Value to set for the parentProcessName property.
    */
    public function setParentProcessName(?string $value ): void {
        $this->parentProcessName = $value;
    }

    /**
     * Sets the path property value. Full path, including filename.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

    /**
     * Sets the processId property value. The Process ID (PID) of the process.
     *  @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value ): void {
        $this->processId = $value;
    }

}
