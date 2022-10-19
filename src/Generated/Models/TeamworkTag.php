<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkTag extends Entity implements Parsable 
{
    /**
     * @var string|null $description The description of the tag as it will appear to the user in Microsoft Teams.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the tag as it will appear to the user in Microsoft Teams.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $memberCount The number of users assigned to the tag.
    */
    private ?int $memberCount = null;
    
    /**
     * @var array<TeamworkTagMember>|null $members Users assigned to the tag.
    */
    private ?array $members = null;
    
    /**
     * @var TeamworkTagType|null $tagType The type of the tag. Default is standard.
    */
    private ?TeamworkTagType $tagType = null;
    
    /**
     * @var string|null $teamId ID of the team in which the tag is defined.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new teamworkTag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkTag');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkTag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkTag {
        return new TeamworkTag();
    }

    /**
     * Gets the description property value. The description of the tag as it will appear to the user in Microsoft Teams.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the tag as it will appear to the user in Microsoft Teams.
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
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'memberCount' => fn(ParseNode $n) => $o->setMemberCount($n->getIntegerValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([TeamworkTagMember::class, 'createFromDiscriminatorValue'])),
            'tagType' => fn(ParseNode $n) => $o->setTagType($n->getEnumValue(TeamworkTagType::class)),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the memberCount property value. The number of users assigned to the tag.
     * @return int|null
    */
    public function getMemberCount(): ?int {
        return $this->memberCount;
    }

    /**
     * Gets the members property value. Users assigned to the tag.
     * @return array<TeamworkTagMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the tagType property value. The type of the tag. Default is standard.
     * @return TeamworkTagType|null
    */
    public function getTagType(): ?TeamworkTagType {
        return $this->tagType;
    }

    /**
     * Gets the teamId property value. ID of the team in which the tag is defined.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('memberCount', $this->memberCount);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeEnumValue('tagType', $this->tagType);
        $writer->writeStringValue('teamId', $this->teamId);
    }

    /**
     * Sets the description property value. The description of the tag as it will appear to the user in Microsoft Teams.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the tag as it will appear to the user in Microsoft Teams.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the memberCount property value. The number of users assigned to the tag.
     *  @param int|null $value Value to set for the memberCount property.
    */
    public function setMemberCount(?int $value ): void {
        $this->memberCount = $value;
    }

    /**
     * Sets the members property value. Users assigned to the tag.
     *  @param array<TeamworkTagMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the tagType property value. The type of the tag. Default is standard.
     *  @param TeamworkTagType|null $value Value to set for the tagType property.
    */
    public function setTagType(?TeamworkTagType $value ): void {
        $this->tagType = $value;
    }

    /**
     * Sets the teamId property value. ID of the team in which the tag is defined.
     *  @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value ): void {
        $this->teamId = $value;
    }

}
