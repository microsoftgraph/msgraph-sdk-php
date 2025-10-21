<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamworkTag extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamworkTag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the description property value. The description of the tag as it appears to the user in Microsoft Teams. A teamworkTag can't have more than 200 teamworkTagMembers.
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
     * Gets the displayName property value. The name of the tag as it appears to the user in Microsoft Teams.
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
        $val = $this->getBackingStore()->get('memberCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberCount'");
    }

    /**
     * Gets the members property value. Users assigned to the tag.
     * @return array<TeamworkTagMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamworkTagMember::class);
            /** @var array<TeamworkTagMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the tagType property value. The type of the tag. Default is standard.
     * @return TeamworkTagType|null
    */
    public function getTagType(): ?TeamworkTagType {
        $val = $this->getBackingStore()->get('tagType');
        if (is_null($val) || $val instanceof TeamworkTagType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tagType'");
    }

    /**
     * Gets the teamId property value. ID of the team in which the tag is defined.
     * @return string|null
    */
    public function getTeamId(): ?string {
        $val = $this->getBackingStore()->get('teamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('memberCount', $this->getMemberCount());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeEnumValue('tagType', $this->getTagType());
        $writer->writeStringValue('teamId', $this->getTeamId());
    }

    /**
     * Sets the description property value. The description of the tag as it appears to the user in Microsoft Teams. A teamworkTag can't have more than 200 teamworkTagMembers.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the tag as it appears to the user in Microsoft Teams.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the memberCount property value. The number of users assigned to the tag.
     * @param int|null $value Value to set for the memberCount property.
    */
    public function setMemberCount(?int $value): void {
        $this->getBackingStore()->set('memberCount', $value);
    }

    /**
     * Sets the members property value. Users assigned to the tag.
     * @param array<TeamworkTagMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the tagType property value. The type of the tag. Default is standard.
     * @param TeamworkTagType|null $value Value to set for the tagType property.
    */
    public function setTagType(?TeamworkTagType $value): void {
        $this->getBackingStore()->set('tagType', $value);
    }

    /**
     * Sets the teamId property value. ID of the team in which the tag is defined.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->getBackingStore()->set('teamId', $value);
    }

}
