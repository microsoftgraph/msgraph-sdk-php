<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrintJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrintJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintJob {
        return new PrintJob();
    }

    /**
     * Gets the configuration property value. The configuration property
     * @return PrintJobConfiguration|null
    */
    public function getConfiguration(): ?PrintJobConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof PrintJobConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
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
     * Gets the documents property value. The documents property
     * @return array<PrintDocument>|null
    */
    public function getDocuments(): ?array {
        $val = $this->getBackingStore()->get('documents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintDocument::class);
            /** @var array<PrintDocument>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([PrintJobConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'documents' => fn(ParseNode $n) => $o->setDocuments($n->getCollectionOfObjectValues([PrintDocument::class, 'createFromDiscriminatorValue'])),
            'isFetchable' => fn(ParseNode $n) => $o->setIsFetchable($n->getBooleanValue()),
            'redirectedFrom' => fn(ParseNode $n) => $o->setRedirectedFrom($n->getStringValue()),
            'redirectedTo' => fn(ParseNode $n) => $o->setRedirectedTo($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([PrintJobStatus::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PrintTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isFetchable property value. If true, document can be fetched by printer.
     * @return bool|null
    */
    public function getIsFetchable(): ?bool {
        $val = $this->getBackingStore()->get('isFetchable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFetchable'");
    }

    /**
     * Gets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     * @return string|null
    */
    public function getRedirectedFrom(): ?string {
        $val = $this->getBackingStore()->get('redirectedFrom');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectedFrom'");
    }

    /**
     * Gets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     * @return string|null
    */
    public function getRedirectedTo(): ?string {
        $val = $this->getBackingStore()->get('redirectedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectedTo'");
    }

    /**
     * Gets the status property value. The status property
     * @return PrintJobStatus|null
    */
    public function getStatus(): ?PrintJobStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PrintJobStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tasks property value. A list of printTasks that were triggered by this print job.
     * @return array<PrintTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintTask::class);
            /** @var array<PrintTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('documents', $this->getDocuments());
        $writer->writeBooleanValue('isFetchable', $this->getIsFetchable());
        $writer->writeStringValue('redirectedFrom', $this->getRedirectedFrom());
        $writer->writeStringValue('redirectedTo', $this->getRedirectedTo());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the configuration property value. The configuration property
     * @param PrintJobConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?PrintJobConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the documents property value. The documents property
     * @param array<PrintDocument>|null $value Value to set for the documents property.
    */
    public function setDocuments(?array $value): void {
        $this->getBackingStore()->set('documents', $value);
    }

    /**
     * Sets the isFetchable property value. If true, document can be fetched by printer.
     * @param bool|null $value Value to set for the isFetchable property.
    */
    public function setIsFetchable(?bool $value): void {
        $this->getBackingStore()->set('isFetchable', $value);
    }

    /**
     * Sets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     * @param string|null $value Value to set for the redirectedFrom property.
    */
    public function setRedirectedFrom(?string $value): void {
        $this->getBackingStore()->set('redirectedFrom', $value);
    }

    /**
     * Sets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     * @param string|null $value Value to set for the redirectedTo property.
    */
    public function setRedirectedTo(?string $value): void {
        $this->getBackingStore()->set('redirectedTo', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param PrintJobStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintJobStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tasks property value. A list of printTasks that were triggered by this print job.
     * @param array<PrintTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
