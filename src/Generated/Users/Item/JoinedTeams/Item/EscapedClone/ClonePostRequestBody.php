<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\EscapedClone;

use Microsoft\Graph\Generated\Models\ClonableTeamParts;
use Microsoft\Graph\Generated\Models\TeamVisibilityType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClonePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $classification The classification property
    */
    private ?string $classification = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $mailNickname The mailNickname property
    */
    private ?string $mailNickname = null;
    
    /**
     * @var ClonableTeamParts|null $partsToClone The partsToClone property
    */
    private ?ClonableTeamParts $partsToClone = null;
    
    /**
     * @var TeamVisibilityType|null $visibility The visibility property
    */
    private ?TeamVisibilityType $visibility = null;
    
    /**
     * Instantiates a new clonePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClonePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClonePostRequestBody {
        return new ClonePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. The classification property
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'mailNickname' => function (ParseNode $n) use ($o) { $o->setMailNickname($n->getStringValue()); },
            'partsToClone' => function (ParseNode $n) use ($o) { $o->setPartsToClone($n->getEnumValue(ClonableTeamParts::class)); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getEnumValue(TeamVisibilityType::class)); },
        ];
    }

    /**
     * Gets the mailNickname property value. The mailNickname property
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the partsToClone property value. The partsToClone property
     * @return ClonableTeamParts|null
    */
    public function getPartsToClone(): ?ClonableTeamParts {
        return $this->partsToClone;
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return TeamVisibilityType|null
    */
    public function getVisibility(): ?TeamVisibilityType {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('classification', $this->classification);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeEnumValue('partsToClone', $this->partsToClone);
        $writer->writeEnumValue('visibility', $this->visibility);
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
     * Sets the classification property value. The classification property
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the mailNickname property value. The mailNickname property
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the partsToClone property value. The partsToClone property
     *  @param ClonableTeamParts|null $value Value to set for the partsToClone property.
    */
    public function setPartsToClone(?ClonableTeamParts $value ): void {
        $this->partsToClone = $value;
    }

    /**
     * Sets the visibility property value. The visibility property
     *  @param TeamVisibilityType|null $value Value to set for the visibility property.
    */
    public function setVisibility(?TeamVisibilityType $value ): void {
        $this->visibility = $value;
    }

}
