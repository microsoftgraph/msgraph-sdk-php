<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TaskDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new taskDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskDefinition {
        return new TaskDefinition();
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleTaskCategory|null
    */
    public function getCategory(): ?LifecycleTaskCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof LifecycleTaskCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the continueOnError property value. The continueOnError property
     * @return bool|null
    */
    public function getContinueOnError(): ?bool {
        $val = $this->getBackingStore()->get('continueOnError');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'continueOnError'");
    }

    /**
     * Gets the description property value. The description of the taskDefinition.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the taskDefinition.Supports $filter(eq, ne) and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LifecycleTaskCategory::class)),
            'continueOnError' => fn(ParseNode $n) => $o->setContinueOnError($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([Parameter::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the parameters property value. The parameters that must be supplied when creating a workflow task object.Supports $filter(any).
     * @return array<Parameter>|null
    */
    public function getParameters(): ?array {
        $val = $this->getBackingStore()->get('parameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Parameter::class);
            /** @var array<Parameter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Gets the version property value. The version number of the taskDefinition. New records are pushed when we add support for new parameters.Supports $filter(ge, gt, le, lt, eq, ne) and $orderby.
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
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeBooleanValue('continueOnError', $this->getContinueOnError());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the category property value. The category property
     * @param LifecycleTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleTaskCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the continueOnError property value. The continueOnError property
     * @param bool|null $value Value to set for the continueOnError property.
    */
    public function setContinueOnError(?bool $value): void {
        $this->getBackingStore()->set('continueOnError', $value);
    }

    /**
     * Sets the description property value. The description of the taskDefinition.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the taskDefinition.Supports $filter(eq, ne) and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the parameters property value. The parameters that must be supplied when creating a workflow task object.Supports $filter(any).
     * @param array<Parameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the version property value. The version number of the taskDefinition. New records are pushed when we add support for new parameters.Supports $filter(ge, gt, le, lt, eq, ne) and $orderby.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
