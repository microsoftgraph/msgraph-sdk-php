<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookNamedItem extends Entity 
{
    /** @var string|null $comment Represents the comment associated with this name. */
    private ?string $comment = null;
    
    /** @var string|null $name The name of the object. Read-only. */
    private ?string $name = null;
    
    /** @var string|null $scope Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only. */
    private ?string $scope = null;
    
    /** @var string|null $type Indicates what type of reference is associated with the name. The possible values are: String, Integer, Double, Boolean, Range. Read-only. */
    private ?string $type = null;
    
    /** @var Json|null $value Represents the formula that the name is defined to refer to. E.g. =Sheet14!$B$2:$H$12, =4.75, etc. Read-only. */
    private ?Json $value = null;
    
    /** @var bool|null $visible Specifies whether the object is visible or not. */
    private ?bool $visible = null;
    
    /** @var WorkbookWorksheet|null $worksheet Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only. */
    private ?WorkbookWorksheet $worksheet = null;
    
    /**
     * Instantiates a new workbookNamedItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookNamedItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookNamedItem {
        return new WorkbookNamedItem();
    }

    /**
     * Gets the comment property value. Represents the comment associated with this name.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getObjectValue(Json::class)); },
            'visible' => function (self $o, ParseNode $n) { $o->setVisible($n->getBooleanValue()); },
            'worksheet' => function (self $o, ParseNode $n) { $o->setWorksheet($n->getObjectValue(WorkbookWorksheet::class)); },
        ]);
    }

    /**
     * Gets the name property value. The name of the object. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the scope property value. Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the type property value. Indicates what type of reference is associated with the name. The possible values are: String, Integer, Double, Boolean, Range. Read-only.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the value property value. Represents the formula that the name is defined to refer to. E.g. =Sheet14!$B$2:$H$12, =4.75, etc. Read-only.
     * @return Json|null
    */
    public function getValue(): ?Json {
        return $this->value;
    }

    /**
     * Gets the visible property value. Specifies whether the object is visible or not.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Gets the worksheet property value. Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        return $this->worksheet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeStringValue('type', $this->type);
        $writer->writeObjectValue('value', $this->value);
        $writer->writeBooleanValue('visible', $this->visible);
        $writer->writeObjectValue('worksheet', $this->worksheet);
    }

    /**
     * Sets the comment property value. Represents the comment associated with this name.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the name property value. The name of the object. Read-only.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the scope property value. Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the type property value. Indicates what type of reference is associated with the name. The possible values are: String, Integer, Double, Boolean, Range. Read-only.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. Represents the formula that the name is defined to refer to. E.g. =Sheet14!$B$2:$H$12, =4.75, etc. Read-only.
     *  @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value ): void {
        $this->value = $value;
    }

    /**
     * Sets the visible property value. Specifies whether the object is visible or not.
     *  @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value ): void {
        $this->visible = $value;
    }

    /**
     * Sets the worksheet property value. Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value ): void {
        $this->worksheet = $value;
    }

}
