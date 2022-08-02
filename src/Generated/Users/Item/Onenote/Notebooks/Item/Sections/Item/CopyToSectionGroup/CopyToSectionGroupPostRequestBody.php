<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\Sections\Item\CopyToSectionGroup;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopyToSectionGroupPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $groupId The groupId property
    */
    private ?string $groupId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $renameAs The renameAs property
    */
    private ?string $renameAs = null;
    
    /**
     * @var string|null $siteCollectionId The siteCollectionId property
    */
    private ?string $siteCollectionId = null;
    
    /**
     * @var string|null $siteId The siteId property
    */
    private ?string $siteId = null;
    
    /**
     * Instantiates a new copyToSectionGroupPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyToSectionGroupPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyToSectionGroupPostRequestBody {
        return new CopyToSectionGroupPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'renameAs' => function (ParseNode $n) use ($o) { $o->setRenameAs($n->getStringValue()); },
            'siteCollectionId' => function (ParseNode $n) use ($o) { $o->setSiteCollectionId($n->getStringValue()); },
            'siteId' => function (ParseNode $n) use ($o) { $o->setSiteId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the renameAs property value. The renameAs property
     * @return string|null
    */
    public function getRenameAs(): ?string {
        return $this->renameAs;
    }

    /**
     * Gets the siteCollectionId property value. The siteCollectionId property
     * @return string|null
    */
    public function getSiteCollectionId(): ?string {
        return $this->siteCollectionId;
    }

    /**
     * Gets the siteId property value. The siteId property
     * @return string|null
    */
    public function getSiteId(): ?string {
        return $this->siteId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('groupId', $this->groupId);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('renameAs', $this->renameAs);
        $writer->writeStringValue('siteCollectionId', $this->siteCollectionId);
        $writer->writeStringValue('siteId', $this->siteId);
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
     * Sets the groupId property value. The groupId property
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the renameAs property value. The renameAs property
     *  @param string|null $value Value to set for the renameAs property.
    */
    public function setRenameAs(?string $value ): void {
        $this->renameAs = $value;
    }

    /**
     * Sets the siteCollectionId property value. The siteCollectionId property
     *  @param string|null $value Value to set for the siteCollectionId property.
    */
    public function setSiteCollectionId(?string $value ): void {
        $this->siteCollectionId = $value;
    }

    /**
     * Sets the siteId property value. The siteId property
     *  @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value ): void {
        $this->siteId = $value;
    }

}
