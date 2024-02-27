<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Teamwork extends Entity implements Parsable 
{
    /**
     * Instantiates a new Teamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Teamwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Teamwork {
        return new Teamwork();
    }

    /**
     * Gets the deletedChats property value. The deletedChats property
     * @return array<DeletedChat>|null
    */
    public function getDeletedChats(): ?array {
        $val = $this->getBackingStore()->get('deletedChats');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeletedChat::class);
            /** @var array<DeletedChat>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedChats'");
    }

    /**
     * Gets the deletedTeams property value. The deleted team.
     * @return array<DeletedTeam>|null
    */
    public function getDeletedTeams(): ?array {
        $val = $this->getBackingStore()->get('deletedTeams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeletedTeam::class);
            /** @var array<DeletedTeam>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedTeams'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedChats' => fn(ParseNode $n) => $o->setDeletedChats($n->getCollectionOfObjectValues([DeletedChat::class, 'createFromDiscriminatorValue'])),
            'deletedTeams' => fn(ParseNode $n) => $o->setDeletedTeams($n->getCollectionOfObjectValues([DeletedTeam::class, 'createFromDiscriminatorValue'])),
            'teamsAppSettings' => fn(ParseNode $n) => $o->setTeamsAppSettings($n->getObjectValue([TeamsAppSettings::class, 'createFromDiscriminatorValue'])),
            'workforceIntegrations' => fn(ParseNode $n) => $o->setWorkforceIntegrations($n->getCollectionOfObjectValues([WorkforceIntegration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the teamsAppSettings property value. Represents tenant-wide settings for all Teams apps in the tenant.
     * @return TeamsAppSettings|null
    */
    public function getTeamsAppSettings(): ?TeamsAppSettings {
        $val = $this->getBackingStore()->get('teamsAppSettings');
        if (is_null($val) || $val instanceof TeamsAppSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsAppSettings'");
    }

    /**
     * Gets the workforceIntegrations property value. The workforceIntegrations property
     * @return array<WorkforceIntegration>|null
    */
    public function getWorkforceIntegrations(): ?array {
        $val = $this->getBackingStore()->get('workforceIntegrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkforceIntegration::class);
            /** @var array<WorkforceIntegration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workforceIntegrations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deletedChats', $this->getDeletedChats());
        $writer->writeCollectionOfObjectValues('deletedTeams', $this->getDeletedTeams());
        $writer->writeObjectValue('teamsAppSettings', $this->getTeamsAppSettings());
        $writer->writeCollectionOfObjectValues('workforceIntegrations', $this->getWorkforceIntegrations());
    }

    /**
     * Sets the deletedChats property value. The deletedChats property
     * @param array<DeletedChat>|null $value Value to set for the deletedChats property.
    */
    public function setDeletedChats(?array $value): void {
        $this->getBackingStore()->set('deletedChats', $value);
    }

    /**
     * Sets the deletedTeams property value. The deleted team.
     * @param array<DeletedTeam>|null $value Value to set for the deletedTeams property.
    */
    public function setDeletedTeams(?array $value): void {
        $this->getBackingStore()->set('deletedTeams', $value);
    }

    /**
     * Sets the teamsAppSettings property value. Represents tenant-wide settings for all Teams apps in the tenant.
     * @param TeamsAppSettings|null $value Value to set for the teamsAppSettings property.
    */
    public function setTeamsAppSettings(?TeamsAppSettings $value): void {
        $this->getBackingStore()->set('teamsAppSettings', $value);
    }

    /**
     * Sets the workforceIntegrations property value. The workforceIntegrations property
     * @param array<WorkforceIntegration>|null $value Value to set for the workforceIntegrations property.
    */
    public function setWorkforceIntegrations(?array $value): void {
        $this->getBackingStore()->set('workforceIntegrations', $value);
    }

}
