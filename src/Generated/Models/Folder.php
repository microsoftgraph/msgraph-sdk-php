<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Folder implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $childCount Number of children contained immediately within this container.
    */
    private ?int $childCount = null;
    
    /**
     * @var FolderView|null $view A collection of properties defining the recommended view for the folder.
    */
    private ?FolderView $view = null;
    
    /**
     * Instantiates a new folder and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Folder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Folder {
        return new Folder();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the childCount property value. Number of children contained immediately within this container.
     * @return int|null
    */
    public function getChildCount(): ?int {
        return $this->childCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'childCount' => function (ParseNode $n) use ($o) { $o->setChildCount($n->getIntegerValue()); },
            'view' => function (ParseNode $n) use ($o) { $o->setView($n->getObjectValue(array(FolderView::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the view property value. A collection of properties defining the recommended view for the folder.
     * @return FolderView|null
    */
    public function getView(): ?FolderView {
        return $this->view;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('childCount', $this->childCount);
        $writer->writeObjectValue('view', $this->view);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the childCount property value. Number of children contained immediately within this container.
     *  @param int|null $value Value to set for the childCount property.
    */
    public function setChildCount(?int $value ): void {
        $this->childCount = $value;
    }

    /**
     * Sets the view property value. A collection of properties defining the recommended view for the folder.
     *  @param FolderView|null $value Value to set for the view property.
    */
    public function setView(?FolderView $value ): void {
        $this->view = $value;
    }

}
