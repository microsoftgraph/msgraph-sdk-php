<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Workflow extends WorkflowBase implements Parsable 
{
    /**
     * Instantiates a new Workflow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.workflow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workflow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workflow {
        return new Workflow();
    }

    /**
     * Gets the deletedDateTime property value. When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * Gets the executionScope property value. The unique identifier of the Azure AD identity that last modified the workflow object.
     * @return array<UserProcessingResult>|null
    */
    public function getExecutionScope(): ?array {
        $val = $this->getBackingStore()->get('executionScope');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserProcessingResult::class);
            /** @var array<UserProcessingResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executionScope'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'executionScope' => fn(ParseNode $n) => $o->setExecutionScope($n->getCollectionOfObjectValues([UserProcessingResult::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'nextScheduleRunDateTime' => fn(ParseNode $n) => $o->setNextScheduleRunDateTime($n->getDateTimeValue()),
            'runs' => fn(ParseNode $n) => $o->setRuns($n->getCollectionOfObjectValues([Run::class, 'createFromDiscriminatorValue'])),
            'taskReports' => fn(ParseNode $n) => $o->setTaskReports($n->getCollectionOfObjectValues([TaskReport::class, 'createFromDiscriminatorValue'])),
            'userProcessingResults' => fn(ParseNode $n) => $o->setUserProcessingResults($n->getCollectionOfObjectValues([UserProcessingResult::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([WorkflowVersion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the id property value. Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the nextScheduleRunDateTime property value. The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderBy.
     * @return DateTime|null
    */
    public function getNextScheduleRunDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('nextScheduleRunDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextScheduleRunDateTime'");
    }

    /**
     * Gets the runs property value. Workflow runs.
     * @return array<Run>|null
    */
    public function getRuns(): ?array {
        $val = $this->getBackingStore()->get('runs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Run::class);
            /** @var array<Run>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runs'");
    }

    /**
     * Gets the taskReports property value. Represents the aggregation of task execution data for tasks within a workflow object.
     * @return array<TaskReport>|null
    */
    public function getTaskReports(): ?array {
        $val = $this->getBackingStore()->get('taskReports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TaskReport::class);
            /** @var array<TaskReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskReports'");
    }

    /**
     * Gets the userProcessingResults property value. Per-user workflow execution results.
     * @return array<UserProcessingResult>|null
    */
    public function getUserProcessingResults(): ?array {
        $val = $this->getBackingStore()->get('userProcessingResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserProcessingResult::class);
            /** @var array<UserProcessingResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userProcessingResults'");
    }

    /**
     * Gets the version property value. The current version number of the workflow. Value is 1 when the workflow is first created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
     * Gets the versions property value. The workflow versions that are available.
     * @return array<WorkflowVersion>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkflowVersion::class);
            /** @var array<WorkflowVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeCollectionOfObjectValues('executionScope', $this->getExecutionScope());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('nextScheduleRunDateTime', $this->getNextScheduleRunDateTime());
        $writer->writeCollectionOfObjectValues('runs', $this->getRuns());
        $writer->writeCollectionOfObjectValues('taskReports', $this->getTaskReports());
        $writer->writeCollectionOfObjectValues('userProcessingResults', $this->getUserProcessingResults());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the deletedDateTime property value. When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the executionScope property value. The unique identifier of the Azure AD identity that last modified the workflow object.
     * @param array<UserProcessingResult>|null $value Value to set for the executionScope property.
    */
    public function setExecutionScope(?array $value): void {
        $this->getBackingStore()->set('executionScope', $value);
    }

    /**
     * Sets the id property value. Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the nextScheduleRunDateTime property value. The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderBy.
     * @param DateTime|null $value Value to set for the nextScheduleRunDateTime property.
    */
    public function setNextScheduleRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextScheduleRunDateTime', $value);
    }

    /**
     * Sets the runs property value. Workflow runs.
     * @param array<Run>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value): void {
        $this->getBackingStore()->set('runs', $value);
    }

    /**
     * Sets the taskReports property value. Represents the aggregation of task execution data for tasks within a workflow object.
     * @param array<TaskReport>|null $value Value to set for the taskReports property.
    */
    public function setTaskReports(?array $value): void {
        $this->getBackingStore()->set('taskReports', $value);
    }

    /**
     * Sets the userProcessingResults property value. Per-user workflow execution results.
     * @param array<UserProcessingResult>|null $value Value to set for the userProcessingResults property.
    */
    public function setUserProcessingResults(?array $value): void {
        $this->getBackingStore()->set('userProcessingResults', $value);
    }

    /**
     * Sets the version property value. The current version number of the workflow. Value is 1 when the workflow is first created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the versions property value. The workflow versions that are available.
     * @param array<WorkflowVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
